@extends('adminlte::page')

@section('title', 'Editar acta')

@section('content_header')
    <h1>Editar acta de {{$acta->usuario}}</h1>
@stop

@section('content')
<div class="card">
        <div class="card-group">
            {{--PARA LLAMR LA FUNCION UPDATE EL FORM QUEDA MODEL, UTILIZANDO LARAVEL COLLECTIVE UTILIZAMOS EL METHOD PUT DE ACTUALIZACION--}}
            {!! Form::model($acta, ['route'=>['actas.update',$acta], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('usuario', 'usuario') !!}
                    {!! Form::text('Usuario', null, ['class' => 'form-control form-control-lg']) !!}
                    {{-- //EL MENSAJE DE ERROR QUE MOSTRARA SI NO INGRESAMOS EL ERROR, LA VARIABLE $message MUESTRA UN ERROR PREDETERMINADO --}}       
                    @error('Usuario')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                
            
                <div class="form-group">
                    {!! Form::label('ubicacion', 'ubicacion') !!}
                    {!! Form::text('Ubicacion', null, ['class'=>'form-control']) !!}
                    @error('Ubicacion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('tipo_solicitud', 'tipo_solicitud') !!}
                    {!! Form::text('Tipo_Solicitud', null, ['class'=>'form-control']) !!}
                    @error('Tipo_solicitud')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('fecha', 'fecha') !!}
                    {!! Form::date('Fecha', null, ['class'=>'form-control']) !!}
                    @error('Fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'descripcion') !!}
                    {!! Form::text('Descripcion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('serial', 'serial') !!}
                    {!! Form::text('Serial', null, ['class'=>'form-control']) !!}
                    @error('Serial')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('equipo', 'equipo') !!}
                    {!! Form::text('Equipo', null, ['class'=>'form-control']) !!}
                    @error('Equipo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('responsable', 'responsable') !!}
                    {!! Form::text('Responsable', null, ['class'=>'form-control']) !!}
                    @error('Responsable')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('version', 'version') !!}
                    {!! Form::text('Version', null, ['class'=>'form-control']) !!}
                    @error('Version')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('observacion', 'observacion') !!}
                    {!! Form::text('Observacion', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('documento', 'documento') !!}
                    {!! Form::text('Documento', null, ['class'=>'form-control']) !!}
                    @error('Documento')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Actualizar acta',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!} 
         </div>
    </div>
@stop

