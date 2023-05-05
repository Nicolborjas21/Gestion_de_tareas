@extends('plantillamadre')

@section('titulo', 'Formulario de proyecto')

@section('container')

    <h1> modificacion del Proyecto</h1>

    <form method="post" action="{{route('proyecto.update', ['id'=>$proyecto->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del proyecto" value="{{$proyecto->nombre}}">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"
                   placeholder="0 100" value="{{$proyecto->descripcion}}">
        </div>

        <div class="form-group">
            <label for="fecha_inicio">fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
            placeholder=" YYYY-MM-DD" value="{{$proyecto->fecha_inicio}}">
        </div>

        
        <div class="form-group">
            <label for="fecha_fin">fecha final</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
            placeholder=" YYYY-MM-DD" value="{{$proyecto->fecha_fin}}">
        </div>

       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
    <a class='btn btn-info' href="{{route('raizproyecto')}}">volver</a>

@endsection
