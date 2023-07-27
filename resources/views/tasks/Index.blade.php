@extends('layouts.plantilla')

@section('title', 'index')

@section('contect')



    <div class="container w-auto  p-9 mx-auto mt-16   ">

        <div class="border w-28 mb-5 rounded-lg bg-green-600 text-white p-2">
            <a href="{{ route('tasks.create') }}">Nueva tarea</a>
        </div>



        <div class=" mx-18  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr class="">
                        <th scope="col" class="px-6 py-3 rounded-lg  ">
                            Tarea
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-lg  border border-white ">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-lg  border border-white">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-lg  ">
                            fecha limite
                        </th>
                        <th scope="col" class="px-6 py-3 ">

                        </th>
                        <th scope="col" class="px-6 py-3 rounded-lg  ">

                        </th>
                    </tr>
                </thead>

                @foreach ($task as $task)
                    <tbody>
                        <tr class="bg-white border mt-4 border-gray-300 ">
                            <th scope="row" class="px-6 py-4 font-medium rounded-lg text-gray-900 whitespace-nowrap ">
                                {{ $task->task }}
                            </th>
                            <td class="px-6 py-4   ">
                                {{ $task->summary }}
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $task->state }}
                            </td>
                            <td class="px-6 py-4 rounded-lg">
                                {{ $task->dead_line }}
                            </td>


                            <td class="px-4 py-6 text-md border border-gray-300"><a
                                    class=" mx-1 px-6 py-1  rounded-xl bg-green-200  mb-1  "
                                    href="{{ route('tasks.show', $task) }}">ver</a> <br><br></td>

                            <td class="px-6 py-4 text-md border border-gray-300">
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                    @csrf

                                    @method('delete')

                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>

        </div>


    </div>





@endsection()
