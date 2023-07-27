@extends('layouts.plantilla')

@section('title', 'index')

@section('contect')


<h1>Tareas</h1>

<a href="{{ route('tasks.create') }}">Nueva tarea</a>



<table  border="1" cellpadding="15" cellspacing="0">

    <tr>
        <th><h4>Tarea</h4></th>          
        <th><h4>Descripcion</h4></th>
        <th><h4>Estado</h4></th>
        <th><h4>fecha limite</h4></th>
    </tr>


    @foreach ($task as $task)
    <tr>

        <td>{{ $task->task }} </td>

        <td>{{ $task->summary }}</td>

       
        <td>{{ $task->state }}</td>

        
        <td>{{ $task->dead_line }} <br><br></td>

        <td><a href="{{ route('tasks.show', $task) }}">ver</a> <br><br></td>

        <td><form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf

            @method('delete')

            <button type="submit">Eliminar</button>

        </form>
    </td>

    </tr>
    @endforeach

</table>


@endsection()

