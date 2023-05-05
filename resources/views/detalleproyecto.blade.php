@extends("plantillamadre")

@section('titulo','detalles de proyecto')
@section('container')
<h1> Detalles de {{ $proyecto->nombre }} 
    <a class="btn btn-warning" href="{{route('proyecto.edit', ['id'=>$proyecto->id])}}">Editar</a>
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
                <td>{{ $proyecto->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">Descripcion</th>
                <td>  {{ $proyecto->descripcion }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha inicio</th>
                <td>{{ $proyecto->fecha_inicio }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha final</th>
                <td>{{ $proyecto->fecha_fin}}</td>
            </tr>
           

        </tbody>
       
    </table>
    <a class="btn btn-primary" href="{{route('raizproyecto')}}">volver</a>

    @endsection