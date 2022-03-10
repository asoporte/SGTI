@extends('adminlte::page')

@section('title', 'Nueva acta')

@section('content_header')
    <h1>Nueva Acta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-group">
            {!! Form::open(['route'=>'actas.store']) !!}
                <div class="form-group">
                    {!! Form::label('usuario', 'Usuario') !!}
                    {!! Form::text('Usuario', null, ['class' => 'form-control form-control-lg']) !!}
                    {{-- //EL MENSAJE DE ERROR QUE MOSTRARA SI NO INGRESAMOS EL ERROR, LA VARIABLE $message MUESTRA UN ERROR PREDETERMINADO --}}       
                    @error('usuario')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                
            
                <div class="form-group">
                    {!! Form::label('ubicacion', 'Ubicacion') !!}
                    {!! Form::text('Ubicacion', null, ['class'=>'form-control']) !!}
                    @error('ubicacion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('tipo_solicitud', 'T.solicitud') !!}
                    {!! Form::text('tipo_solicitud', null, ['class'=>'form-control']) !!}
                    @error('tipo_solicitud')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('Fecha', null, ['class'=>'form-control']) !!}
                    @error('fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('Descripcion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('serial', 'Serial') !!}
                    {!! Form::text('Serial', null, ['class'=>'form-control']) !!}
                    @error('serial')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('equipo', 'Equipo') !!}
                    {!! Form::text('equipo', null, ['class'=>'form-control']) !!}
                    @error('equipo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('responsable', 'Responsable') !!}
                    {!! Form::text('responsable', null, ['class'=>'form-control']) !!}
                    @error('responsable')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('version', 'Version') !!}
                    {!! Form::text('Version', null, ['class'=>'form-control']) !!}
                    @error('version')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('observacion', 'Observacion') !!}
                    {!! Form::text('Observacion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('documento', 'Documento') !!}
                    {!! Form::text('documento', null, ['class'=>'form-control']) !!}
                    @error('documento')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!} 
         </div>
    </div>
@stop

