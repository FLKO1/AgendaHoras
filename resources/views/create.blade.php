@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Agendar Horas</h2>
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

    <form action="{{route('citas.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Paciente:</strong>
                    <input type="text" name="paciente" class="form-control" placeholder="Nombre" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" class="form-control" placeholder="Rut" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="correo" class="form-control" placeholder="Correo" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono" >
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Razon (inicial):</strong>
                    <select name="razon" class="form-select" id="">
                        <option value="">-- Seleccion la razon --</option>
                        <option value="Control">Control</option>
                        <option value="Limpieza">Limpieza</option>
                        <option value="Operacion">Operacion</option>
                        <option value="Urgencia">Urgencia</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Prevision (inicial):</strong>
                    <select name="Prevision" class="form-select" id="">
                        <option value="">-- Seleccion su prevision de salud--</option>
                        <option value="Fonasa">Fonasa</option>
                        <option value="Privada">Privada</option>
                        <option value="Ninguna">Ninguna</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="fecha" class="form-control" id="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción..."></textarea>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection