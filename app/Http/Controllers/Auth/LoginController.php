<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    //
    public function register(Request $request){
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        Auth::login($user);

        return redirect(route('privada'));
    }


    public function login(Request $request){
        
        
        $credentials = [
            "email"=> $request->email,
            "password"=>$request->password,
        ];
        $remember = ($request->has('remember')? true : false);
        
        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));

        }else{
            return redirect('login');
        }
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   
     //protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo()
{
    return '/index';
}


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
