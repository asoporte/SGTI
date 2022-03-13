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
                    {!! Form::label('usuario', 'USUARIO') !!}
                    {!! Form::text('Usuario', null, ['class' => 'form-control form-control-lg']) !!}
                    {{-- //EL MENSAJE DE ERROR QUE MOSTRARA SI NO INGRESAMOS EL ERROR, LA VARIABLE $message MUESTRA UN ERROR PREDETERMINADO --}}       
                    @error('Usuario')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                
            
                <div class="form-group">
                    {!! Form::label('ubicacion', 'UBICACION') !!}
                    {!! Form::text('Ubicacion', null, ['class'=>'form-control']) !!}
                    @error('Ubicacion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('tipo_solicitud', 'T. SOLICITUD') !!}
                    {!! Form::text('Tipo_Solicitud', null, ['class'=>'form-control']) !!}
                    @error('Tipo_solicitud')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('fecha', 'FECHA') !!}
                    {!! Form::date('Fecha', null, ['class'=>'form-control']) !!}
                    @error('Fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'DESCRIPCION') !!}
                    {!! Form::text('Descripcion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('serial', 'SERIAL') !!}
                    {!! Form::text('Serial', null, ['class'=>'form-control']) !!}
                    @error('Serial')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('equipo', 'EQUIPO') !!}
                    {!! Form::text('Equipo', null, ['class'=>'form-control']) !!}
                    @error('Equipo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('responsable', 'RESPONSABLE') !!}
                    {!! Form::text('Responsable', null, ['class'=>'form-control']) !!}
                    @error('Responsable')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('version', 'VERSION') !!}
                    {!! Form::text('Version', null, ['class'=>'form-control']) !!}
                    @error('Version')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('observacion', 'OBSERVACION') !!}
                    {!! Form::text('Observacion', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('documento', 'DOCUMENTO') !!}
                    {!! Form::text('Documento', null, ['class'=>'form-control']) !!}
                    @error('Documento')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!} 
         </div>
    </div>
@stop

