@extends("plantillamadre")

@section('titulo','Creacion  de usuario')
@section('container')

    <h1>Usuario</h1>

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
                   placeholder="Nombre del usuario">
        </div>


        <div class="form-group">
            <label for="correo">Correo electronico</label>
            <input type="email" class="form-control" name="correo" id="correo"
                   placeholder=" Ingrese su correo electronico">
        </div>
        
      <br>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection