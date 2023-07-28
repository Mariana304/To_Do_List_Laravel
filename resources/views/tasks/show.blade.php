@extends('layouts.plantilla')


@section('title', ' Tarea ' . $task->task)


@section('contect')


    <div class="container w-96 text-center h-auto p-9 mx-auto ">

        <div class="grid justify-items-start mt-2   ">


            <p class=" flex flex-col   w-16 ">
                <a href="{{ route('tasks.index') }}" class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}">
                    <img src="{{ asset('images/volver.png') }}" class="w-10  ">
                </a>
            </p>

        </div>


        <div class=" uppercase justify-items-center text-2xl italic  font-semibold">
            <h1>{{ $task->task }}</h1>
        </div>




        <div class=" mx-18 w-64 justify-items-center border mt-3  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            Tarea
                        </th>


                    </tr>
                </thead>


                <tbody>
                    <tr class=" bg-white even:bg-slate-50 text-base  border border-gray-300 ">
                        <th scope="row" class="px-6 py-4 font-medium  italic text-gray-900 whitespace-nowrap ">
                            {{ $task->task }}
                        </th>

                    </tr>
                </tbody>


            </table>

        </div>



        <div class=" mx-18 w-64 justify-items-center border mt-3  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            Descripcion
                        </th>


                    </tr>
                </thead>


                <tbody>
                    <tr class=" bg-white even:bg-slate-50 text-base  border  border-gray-300 ">
                        <th scope="row" class="px-6 py-4 font-medium  italic text-gray-900 whitespace-nowrap ">
                            {{ $task->summary }}
                        </th>

                    </tr>
                </tbody>


            </table>

        </div>



        <div class=" mx-18 w-64 justify-items-center border mt-3  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            Estado
                        </th>


                    </tr>
                </thead>


                <tbody>
                    <tr class=" bg-white even:bg-slate-50 text-base  border  border-gray-300 ">
                        <th scope="row" class="px-6 py-4 font-medium  italic text-gray-900 whitespace-nowrap ">
                            {{ $task->state }}
                        </th>

                    </tr>
                </tbody>


            </table>

        </div>





        <div class=" mx-18 w-64 justify-items-center border mt-3  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            Fecha limite
                        </th>


                    </tr>
                </thead>


                <tbody>
                    <tr class=" bg-white even:bg-slate-50 text-base  border border-gray-300 ">
                        <th scope="row" class="px-6 py-4 font-medium  italic text-gray-900 whitespace-nowrap ">
                            {{ $task->dead_line }}
                        </th>

                    </tr>
                </tbody>


            </table>

        </div>

    </div>




    <div class="container  text-center w-3/6 h-auto mb-9 mx-auto px-64 ">
        <div class=" mx-18 w-96 justify-items-center border ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-4 py-3  border border-gray-300 ">
                            editar
                        </th>
                        <th scope="col" class="px-6 py-3   ">
                            eliminar
                        </th>


                    </tr>
                </thead>


                <tbody>
                    <tr class=" bg-white even:bg-slate-50 text-base  border mt-4 border-gray-300 ">
                        <td class=" py-3 border  border-gray-300">

                            <button type="submit">

                                <a href="{{ route('tasks.edit', $task) }}">

                                    <img class="w-16 h-16 mt-1 mx-6  " title="Editar" src="{{ asset('images/pencil.png') }}"
                                        </a>
                            </button>

                        </td>

                        <td class="px-2 py-4 text-md border border-gray-300">
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf

                                @method('delete')

                                <button type="submit">
                                    <img class="w-14 h-12 mt-1 mx-5 " title="Eliminar"
                                        src="{{ asset('images/trash.jpg') }}">
                                </button>
                            </form>
                        </td>

                    </tr>
                </tbody>


            </table>

        </div>










    @endsection
