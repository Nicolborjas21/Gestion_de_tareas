@extends('plantillamadre')

@section('titulo', 'Formulario de usuario')

@section('container')

    <h1>Usuario</h1>

    <form method="post" action="{{route('usuario.update', ['id'=>$usuario->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del proyecto" value="{{$usuario->nombre}}">
        </div>

        <div class="form-group">
            <label for="correo">Correo electronico</label>
            <input type="email" class="form-control" name="correo" id="correo"
                   placeholder=" Ingrese su correo electronico" value="{{$usuario->correo_electronico}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>

    <a class='btn btn-info' href="{{route('raizusuario')}}">volver</a>
@endsection
