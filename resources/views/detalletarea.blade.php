@extends("plantillamadre")

@section('titulo','detalles de tarea')
@section('container')
<h1> Detalles de {{ $tarea->nombre }} 
    <a class="btn btn-warning" href="{{route('tarea.edit', ['id'=>$tarea->id])}}">Editar</a>
    </h1>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valores</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Nombre</th>
                <td>{{ $tarea->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">Descripcion</th>
                <td>  {{ $tarea->descripcion }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha inicio</th>
                <td>{{ $tarea->fecha_inicio }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha fin</th>
                <td>{{ $tarea->fecha_final }}</td>
            </tr>
            <tr>
                <th scope="row">Proyecto_id</th>
                <td>{{ $tarea->proyecto_id }}</td>
            </tr>
            <tr>
                <th scope="row">Usuario_id</th>
                <td>{{ $tarea->usuario_id }}</td>
            </tr>
           

        </tbody>
       
    </table>
    <a class="btn btn-primary" href="{{route('raiztarea')}}">volver</a>

    @endsection