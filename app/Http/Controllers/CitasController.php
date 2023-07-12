<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CitasController extends Controller
{
 
    
     public function index()
    {
        $citas= Cita::latest()->get();
        return view('index',['citas' => $citas]);
    }


 
 
     public function create()
    {
        $citas=Cita::all();
        return view('citas.create', compact($citas));
        
    }

    
    
     public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'paciente' => 'required',
            'rut' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'razon' => 'required',
            'Prevision' => 'required',
            'fecha' => 'required',
        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index')->with('Exito', 'Cita agendada con exito');
    }




    public function show($id)
    {
        //
    }



    public function edit(Cita $cita): View
    {
        return view('edit',['cita' => $cita]);
    }



    public function update(Request $request, Cita $cita): RedirectResponse
    {
    
        $cita->update($request->all());
        return redirect()->route('citas.inde')->with('Exito', 'Cita actualizada con exito');


    }


    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success' , 'Cita Eliminada exitosamente');
    }
}
