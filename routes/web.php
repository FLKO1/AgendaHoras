<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CitasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('login', 'login')->name('login');
Route::view('/register', "register")->name('register');
Route::view('home', 'home')->middleware('auth');

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');


Route::get('/', function () {
    return view('welcome');
});


Route::post('login', function() {
    $credentials= request()->only('email', 'password');
    if (Auth::attempt($credentials)){
        return redirect('home');
    }
        return redirect('login');
});

Route::resource('citas', CitasController::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


