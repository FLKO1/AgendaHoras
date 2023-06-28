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
                    <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Nombre" value="{{ old('paciente')}}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" id="rut" class="form-control" placeholder="Rut" value="{{ old('rut')}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" value="{{ old('correo') }}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" value="{{ old('telefono') }}">
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Razon (inicial):</strong>
                    <select name="razon" class="form-select" id="razon">
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
                    <input type="text" class="form-control datetimepicker-input" id="cita_date" name="fecha" data-toggle="datetimepicker" data-target="#appointment_date" value="{{ old('cita_date') }}">

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción..." ></textarea>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection



@push('scripts')
<script>
    var disabledDates = [
    @foreach($citas as $cita)
        '{{ $cita->cita_date->format('d-m-Y H:i') }}',
    @endforeach

    var horasPermitidas=[];
    for (var i = 9; i <= 18; i++) {
    for (var j = 0; j <= 45; j += 15) {
        var hour = i;
        var minute = j;
        if (i === 18 && j > 30) {
            continue;
        }
        if (hour < 10) {
            hour = '0' + hour;
        }
        if (minute < 10) {
            minute = '0' + minute;
        }
        horasPermitidas.push(hour + ':' + minute);
    }
}

];
$(function () {
    $('#cita_date').datetimepicker({
        format: 'd-m-Y H:i',
        step: 15,
        minDate: 0
        disabledDates: disabledDates,
        diasBloqueados:[0, 6],
        horasPermitidas: horasPermitidas,
        onGenerate:function (ct){
            $(this).find('.xdsoft_date.xdsoft_weekend')
            .addClass('xdsoft_disabled');           
        },
        timepickerScrollbarr:false});
        
        $('#cita_date').on('change', function () {
    var selectedDate = $(this).val();
    if (disabledDates.includes(selectedDate)) {
        alert('Día y hora ya ocupados');
        $(this).val('');
    }
});
});
</script>
@endpush