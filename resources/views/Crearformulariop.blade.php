@extends("plantillamadre")

@section('titulo','Creacion  de proyecto')
@section('container')

    <h1>Proyecto</h1>

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
                   placeholder=" hacer una descrpcion">
        </div>
        <div class="form-group">
            <label for="fecha_inicio">fecha inicial</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
            placeholder=" YYYY-MM-DD">

        </div>

        <div class="form-group">
            <label for="fecha_final">fecha final</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
            placeholder=" YYYY-MM-DD">

        </div>  
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
    <br>
    <a class='btn btn-info' href="{{route('raizproyecto')}}">volver</a>


@endsection