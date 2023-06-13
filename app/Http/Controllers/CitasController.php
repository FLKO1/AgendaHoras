<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CitasController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas= Cita::latest()->get();
        return view('index',['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(Cita $cita): View
    {
        return view('edit',['cita' => $cita]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Cita $cita): RedirectResponse
    {
    
        $cita->update($request->all());
        return redirect()->route('citas.index')->with('Exito', 'Cita actualizada con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('Exito', 'Cita eliminada exitosamente');
    }
}
