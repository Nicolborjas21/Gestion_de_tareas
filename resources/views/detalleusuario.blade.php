@extends("plantillamadre")

@section('titulo','detalles de usuario')
@section('container')
<h1> Detalles de {{ $usuario->nombre }} 
    <a class="btn btn-warning" href="{{route('usuario.edit', ['id'=>$usuario->id])}}">Editar</a>
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
                <td>{{ $usuario->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">Correo Electronico</th>
                <td>  {{ $usuario->correo_electronico }}</td>
            </tr>
            

        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('raizusuario')}}">volver</a>

    @endsection