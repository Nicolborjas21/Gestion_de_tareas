@extends("plantillamadre")

@section('titulo','lista de proyectos')
@section('container')

@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
@endif
<h1>Lista de Proyectos<a class="btn btn-warning"  href="{{ route("proyecto.create") }}">Nuevo </a></h1>
 <table class= "table table-success table-striped-columns">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">fecha_inicio</th>
        <th scope="col">fech_fin</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>


    </tr>
    </thead>
   
        <tbody>

        @forelse($proyectos as $proyecto)
            <tr>
                <th scope="row">{{ $proyecto->id }}</th>
                <td>{{ $proyecto->nombre }} </td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->fecha_inicio }}</td>
                <td>{{ $proyecto->fecha_fin }}</td>
                <td><a class="btn btn-primary" href="{{ route('proyecto.show', ['id'=> $proyecto->id])}}">Ver</a></td>
                <td><a class="btn btn-success" href="{{ route('proyecto.edit', ['id'=> $proyecto->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('proyecto.destroy', ['id'=>$proyecto->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('seguro que quieres eliminar el proyecto')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay proyectos</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $proyectos->links() }}

@endsection