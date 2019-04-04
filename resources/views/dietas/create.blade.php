@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Asignar Dieta')
@section('titulo','Nutriólogo')
@section('subtitulo','Asignar Dieta')
@section('contenido')

<form method="POST" action="{{route('dietas.store')}}">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Información de la Dieta</h3>
            </div>
            <div class="box-body">
                <div class="formg-roup">
                    <label>Paciente</label>
                    <select class="form-control">
                        <option selected disabled value="">Elige un paciente</option>
                        @foreach($pacientes as $paciente)
                            <option value="{{$paciente->id}}">{{ $paciente->nombre . " " . $paciente->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Semana</label>
                    <input type="date" name="semana" class="form-control" required>
                    <small class="form-text text-muted">Elige solo días lunes</small>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary" type="submit">Asignar Dieta</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lunes</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_lunes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_lunes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_lunes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_lunes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_lunes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_lunes"></textarea>
               </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Martes</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_martes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_martes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_martes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_martes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_martes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_martes"></textarea>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Miércoles</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_miercoles">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_miercoles"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_miercoles">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_miercoles"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_miercoles">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_miercoles"></textarea>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Jueves</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_jueves">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_jueves"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_jueves">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_jueves"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_jueves">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_jueves"></textarea>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Viernes</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_viernes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_viernes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_viernes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_viernes"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_viernes">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_viernes"></textarea>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sábado</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_sabado">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_sabado"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_sabado">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_sabado"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_sabado">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_sabado"></textarea>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Domingo</h3>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Desayuno</label>
                    <input class ="form-control" type="text" placeholder="Título del desayuno" required name="desayuno_domingo">
                    <textarea class="form-control" rows="4" placeholder=" Descripción del desayuno" name="descripcion_desayuno_domingo"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Comida</label>
                    <input class ="form-control" type="text" placeholder="Título de la comida" required name="comida_domingo">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la comida" name="descripcion_comida_domingo"></textarea>
               </div>
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label>Cena</label>
                    <input class ="form-control" type="text" placeholder="Título de la cena" required name="cena_domingo">
                    <textarea class="form-control" rows="4" placeholder=" Descripción de la cena" name="descripcion_cena_domingo"></textarea>
               </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection