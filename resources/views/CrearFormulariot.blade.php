@extends("plantillamadre")

@section('titulo','Creacion  de tarea')
@section('container')

    <h1>Tarea</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del proyecto">
        </div>


        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"
                   placeholder="descripcion breve de la tarea">
        </div>

      
            <label for="estado_estado">Estado</label>
            <select id="estado_estado" name="estado">
            <option value="Pendiente">Pendiente</option>
            <option value="En Progreso">En Progreso</option>
            <option value="Terminado">Terminado</option>
            </select>
       

        <div class="form-group">
            <label for="fecha_inicio">fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
            placeholder=" YYYY-MM-DD">
                   
        </div>

        <div class="form-group">
            <label for="fecha_fin">fecha fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
            placeholder=" 0-1000">

        </div>
        
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
<a  class="btn btn-info"href="{{route('raiztarea')}}">volver</a>

@endsection