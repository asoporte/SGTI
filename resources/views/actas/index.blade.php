@extends('adminlte::page')

@section('title', 'Lista de Actas')

@section('content_header')
    <h1>Actas</h1>
@stop

@section('content')

@if (session('guardar'))
    <div class="aler alert-success">
        <strong>{{session('guardar')}}</strong>
    </div>    
@endif

@if (session('actualizar'))
    <div class="aler alert-success">
        <strong>{{session('actualizar')}}</strong>
    </div>    
@endif

@if (session('eliminar'))
    <div class="aler alert-success">
        <strong>{{session('eliminar')}}</strong>
    </div>    
@endif

    <div class="card-header">
        <a href="{{route('actas.create')}}" class="btn btn-primary">Crear Acta</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="actas" class="table table-striped shadow-lg mt-4">
                <thead>
                    <tr>
                        <th>USUARIO</th>
                        <th>UBICACION</th>
                        <th>T. SOLICITUD</th>
                        <th>FECHA</th>
                        <th>SERIAL</th>
                        <th>EQUIPO</th>
                        <th>RESPONSABLE</th>
                        <th>DOCUMENTO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actas as $acta)
                    <tr>
                        <td>{{$acta->Usuario}}</td>
                        <td>{{$acta->Ubicacion}}</td>
                        <td>{{$acta->Tipo_Solicitud}}</td>
                        <td>{{$acta->Fecha}}</td>
                        <td>{{$acta->Serial}}</td>
                        <td>{{$acta->Equipo}}</td>
                        <td>{{$acta->Responsable}}</td>
                        <td>{{$acta->Documento}}</td>
                        <td width="150px">
                            <form action="{{route('actas.destroy',$acta)}}"  method="POST">
                                <a href="{{route('actas.edit',$acta)}}" class="btn btn-warning">Editar</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
            $('#actas').DataTable({
                "language":{
                    "search":       "Buscar",
                    "lengthMenu":    "Mostrar _MENU_ registros por pagina",
                    "info":         "Mostrando pagina _PAGE_ de _PAGES_",
                    "paginate":     {
                                        "previous": "Anterior",
                                        "next":     "Siguiente",
                                        "first":    "Primero",
                                        "last":     "Ultimo"
                    }
                }
            });
            } );
        </script>
@endsection