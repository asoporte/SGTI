@extends('adminlte::page')

@section('title', 'Nueva acta')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-group">
            {!! Form::open(['route'=>'actas.store']) !!}
                <div class="form-group">
                    {!! Form::label('usuario', 'Usuario') !!}
                    {!! Form::text('Usuario', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ubicacion', 'Ubicacion') !!}
                    {!! Form::text('Ubicacion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Tipo_solicitud', 'T.solicitud') !!}
                    {!! Form::text('Tipo_Solicitud', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('Fecha', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('Descripcion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('serial', 'Serial') !!}
                    {!! Form::text('Serial', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('equipo', 'Equipo') !!}
                    {!! Form::text('Equipo', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('responsable', 'Responsable') !!}
                    {!! Form::text('Responsable', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('version', 'Version') !!}
                    {!! Form::text('Version', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('observacion', 'Observacion') !!}
                    {!! Form::text('Observacion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('documento', 'Documento') !!}
                    {!! Form::text('Documento', null, ['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!} 
         </div>
    </div>
@stop

