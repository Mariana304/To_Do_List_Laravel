@extends('layouts.plantilla')


@section('title', ' Tarea ' . $task->task)


@section('contect')

    <h1> {{ $task->task }} </h1>


    
    <a href="{{ route('tasks.edit', $task) }}">Editar tarea</a>


    <p> Tarea: {{ $task->task }}</p>


    <p>*Descripcion: {{ $task->summary }}</p>


    <p>*Estado: {{ $task->state }}</p>
    
    <p>*Fecha limite:  {{ $task->dead_line }}</p>

    
    <form action="{{route('tasks.destroy', $task)}}" method="POST">
        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>
        
    </form>



  
@endsection
