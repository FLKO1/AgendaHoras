@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Modificar Horas</h2>
        </div>
        <div>
            <a href="{{route('citas.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>



    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error</strong> Ingreso un dato mal o lo dejo nulo<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('citas.update', $cita)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Paciente:</strong>
                    <input type="text" name="paciente" class="form-control" placeholder="Nombre" value="{{$cita->paciente}}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" class="form-control" placeholder="Rut" value="{{$cita->rut}}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="correo" class="form-control" placeholder="Correo" value="{{$cita->correo}}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{$cita->telefono}}" >
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Razon (inicial):</strong>
                    <select name="razon" class="form-select" id="">
                        <option value="">-- Seleccion la razon --</option>
                        <option value="Control" @selected("Control" == $cita->razon)>Control</option>
                        <option value="Limpieza" @selected("Limpieza" == $cita->razon)>Limpieza</option>
                        <option value="Operacion" @selected("Operacion" == $cita->razon)>Operacion</option>
                        <option value="Urgencia" @selected("Urgencia" == $cita->razon)>Urgencia</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Prevision (inicial):</strong>
                    <select name="Prevision" class="form-select" id="">
                        <option value="">-- Seleccion su prevision de salud--</option>
                        <option value="Fonasa" @selected("Fonasa" == $cita->Prevision)>Fonasa</option>
                        <option value="Privada" @selected("Privada" == $cita->Prevision)>Privada</option>
                        <option value="Ninguna" @selected("Ninguna" == $cita->Prevision)>Ninguna</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="fecha" class="form-control" value={{$cita->fecha}}>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción...">{{$cita->descripcion}}</textarea>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection