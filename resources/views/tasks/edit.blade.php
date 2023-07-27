@extends('layouts.plantilla')


@section('title', ' edit')


@section('contect')
    <h1>Editar un curso</h1>

    <form action=" {{ route('tasks.update', $task) }}" method="POST">
        @csrf

        @method('patch')



        <label for="">Tarea</label>
        <input type="text" name="task" value="{{ old('task', $task->task) }}"><br><br>


        <label for="">Descripcion</label>
        <input type="text" name="summary" value="{{ old('summary', $task->summary) }}"><br><br>



        <label for="select">Estado</label>
        <select name="state" id="select">

            <option value="pendiente">Pendiente</option>
            <option value="en curso">En curso</option>
            <option value="atrasada">Finalizada</option>


        </select><br><br>

        <label for="">Fecha limite</label>
        <input type="date" name="dead_line" value="{{ old('dead_line', $task->dead_line) }}"><br><br>

        <br><br>
        <button type="submit">Actualizar</button>
    </form>

@endsection




