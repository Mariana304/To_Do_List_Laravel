@extends('layouts.plantilla')

@section('title', 'create')

@section('contect')
    <h1>Agrega tu tarea pendiente</h1> 

    <form action="{{ route('tasks.store') }}" method="POST" >

        @csrf

        <label for="">Tarea</label>
        <input type="text" name="task"  value="{{ old('task') }}"><br><br>


        <label for="">Descripcion</label>
        <input type="text" name="summary"  value="{{ old('summary') }}"><br><br>



        <label for="select">Estado</label>
        <select name="state"   id="select">

            <option value="pendiente" >Pendiente</option>
            <option value="en curso" >En curso</option>
            <option value="finalizada" >Finalizada</option>
           
           
        </select><br><br>

        <label for="">Fecha limite</label>
        <input type="date" name="dead_line" value="{{ old('dead_line')  }}"><br><br>

        <button type="submit">Agregar tarea</button>


    </form>

@endsection()
