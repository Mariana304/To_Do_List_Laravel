@extends('layouts.plantilla')


@section('title', ' edit')


@section('contect')
 
    <form action=" {{ route('tasks.update', $task) }}" method="POST">
        @csrf

        @method('patch')




    <div
        class="container bg-slate-100 shadow-lg  rounded-lg   w-96 sm:w-3/4 xl:w-2/4 2xl:w-2/5 flex flex-col text-center mx-auto  mt-10">

        <div class="grid justify-items-start mt-4 mx-4  ">
            <p class=" flex flex-col    mx-2 w-16 ">
                <a href="{{ route('tasks.index') }}" class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}">
                    <img src="{{ asset('images/volver.png') }}" class="w-10  ">
                </a>
            </p>

        </div>

        <div class="mt-12 uppercase text-2xl italic font-semibold">
            <h1>Actualizar tarea</h1>
        </div>

        <form action=" {{ route('tasks.update', $task) }}" method="POST">

            @csrf
            @method('patch')


            <div class="text-center font-bo mx-auto w-auto text-xl  mb-9 mt-16 ">

                <div>
                    <label for="task">Tarea</label>
                </div>

                <input type="text" name="task" class="rounded-md border w-96 " value="{{ old('task', $task->task) }}">
            </div>


            <div class=" text-center mx-auto w-auto text-xl  mb-5  ">

                <div class="mb-3"><label for="summary">Descripción</label></div>

                <textarea name="summary" class="border rounded-md w-96 h-36">{{ old('summary', $task->summary) }}</textarea>
            </div>



            <div class="px-6 py-3 rounded-lg ">
                <label for="select" class="text-xl">Estado</label>
                <select name="state" class="rounded-md border w-32 mx-4 text-center" id="select">

                    <option value="pendiente">Pendiente</option>
                    <option value="en curso">En curso</option>
                    <option value="finalizada">Finalizada</option>


                </select><br><br>
            </div>

            <div class="px-6 py-3 ">
                <label for="dead_line" class="text-xl ">Fecha limite</label>
                <input type="date" class="rounded-md border w-36 mx-4  text-center" name="dead_line"
                    value="{{ old('dead_line', $task->dead_line) }}"><br><br>
            </div>

            <div class=" grid justify-items-center mb-8 ">

            <div class="border border-orange-400  mx-2 italic h-9 py-1 rounded-lg bg-orange-400  text-center w-28">

              
                <button type="submit">Actualizar</button>

            </div>
        </div>



    </div>

    </form>

    </div>




@endsection
