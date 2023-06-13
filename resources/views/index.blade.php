@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Citas</h2>
        </div>
        <div>
            <a href="{{route('citas.create')}}" class="btn btn-primary">Crear cita</a>
        </div>
    </div>

    @if (Session::get('Exito'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('Exito')}}<br> 
        </div>
        
        
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Paciente</th>
                <th>Rut</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Razon</th>
                <th>Prevision</th>
                <th>Fecha</th>
                <th>Descripcion</th>
            </tr>

            @foreach ($citas as $cita )
          
            <tr>
                <td class="fw-bold">{{$cita->paciente}}</td>
                <td>{{$cita->rut}}</td>
                <td>{{$cita->correo}}</td>
                <td>{{$cita->telefono}}</td>
                <td>
                    <span class="badge bg-warning fs-6">{{$cita->razon}}</span>
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$cita->Previson}}</span>
                </td>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->descripcion}}</td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
   
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
@endsection