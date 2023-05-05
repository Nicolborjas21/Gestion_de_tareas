@extends("plantillamadre")

@section('titulo','lista de tareas')
@section('container')

@if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
@endif
<h1>Lista de Tareas<a class="btn btn-warning"  href="{{ route("tarea.create") }}">Nuevo </a></h1>
 <table class= "table table-success table-striped-columns">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">estado</th>
        <th scope="col">fecha_inicio</th>
        <th scope="col">fecha_final</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>


    </tr>
    </thead>
   
        <tbody>
            
        @forelse($tareas as $tarea)
            <tr>
                <th scope="row">{{ $tarea->id }}</th>
                <td>{{ $tarea->nombre }} </td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->estado }}</td>
                <td>{{ $tarea->fecha_inicio }}</td>
                <td>{{ $tarea->fecha_final }}</td>
                <td><a class="btn btn-primary" href="{{ route('tarea.show', ['id'=> $tarea->id])}}">Ver</a></td>
                <td><a class="btn btn-success" href="{{ route('tarea.edit', ['id'=> $tarea->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('tarea.destroy', ['id'=>$tarea->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('seguro que quieres eliminar la tarea numero')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay tareas</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $tareas->links() }}

@endsection