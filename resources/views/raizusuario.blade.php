@extends("plantillamadre")

@section('titulo','lista de usuarios')
@section('container')

@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
@endif
<h1>Lista de Usuarios<a class="btn btn-warning"  href="{{ route("usuario.create") }}">Nuevo </a></h1>
 <table class= "table table-success table-striped-columns">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">correo_electronico</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>


    </tr>
    </thead>
   
        <tbody>

        @forelse($usuarios as $usuario)
            <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{ $usuario->nombre }} </td>
                <td>{{ $usuario->correo_electronico }}</td>
                <td><a class="btn btn-primary" href="{{ route('usuario.show', ['id'=> $usuario->id])}}">Ver</a></td>
                <td><a class="btn btn-success" href="{{ route('usuario.edit', ['id'=> $usuario->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('usuario.destroy', ['id'=>$usuario->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('seguro que quieres eliminar el usuario')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay usuarios</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $usuarios->links() }}

@endsection