@extends('plantillamadre')

@section('titulo', 'Formulario de tarea')

@section('container')

    <h1> modificacion de Tarea</h1>

    <form method="post" action="{{route('tarea.update', ['id'=>$tarea->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre de la tarea" value="{{$tarea->nombre}}">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"
                   placeholder="0 100" value="{{$tarea->descripcion}}">
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado">
                <option value="Pendiente" {{ $tarea->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="En progreso" {{ $tarea->Tipo == 'En progreso' ? 'selected' : '' }}>En progreso</option>
                <option value="Terminado" {{ $tarea->Tipo == 'Terminado' ? 'selected' : '' }}>Terminado</option>
            </select>
        </div>


        <div class="form-group">
            <label for="fecha_inicio">fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
            placeholder=" YYYY-MM-DD" value="{{$tarea->fecha_inicio}}">
        </div>

        
        <div class="form-group">
            <label for="fecha_fin">fecha fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
            placeholder=" YYYY-MM-DD" value="{{$tarea->fecha_fin}}">
        </div>

        <div class="form-group">
            <label for="">proyecto id</label>
            <input type="number" class="form-control" name="proyecto_id" id="proyecto_id"
            placeholder=" ##" value="{{$tarea->proyecto_id}}" readonly>
        </div>

        <div class="form-group">
            <label for="">usuario id</label>
            <input type="number" class="form-control" name="usuario_id" id="usuario_id"
            placeholder=" ##" value="{{$tarea->usuario_id}}" readonly>
        </div>

       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
    <a  class="btn btn-info"href="{{route('raiztarea')}}">volver</a>


@endsection
