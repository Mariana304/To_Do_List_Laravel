@extends('layouts.plantilla')

@section('title', 'index')

@section('contect')



    <div class="container w-auto  p-9 mx-auto ">

        <div class="grid justify-items-end py-2  ">
            <div class=" mb-4 rounded-lg bg-lime-600 h-10  text-xl text-white  ">

                <a href="{{ route('tasks.create') }}">

                    <p class=" flex flex-col italic  h-9 py-1 rounded-lg text-center mx-2 w-28 ">Nueva tarea</p>

                </a>

            </div>
            
        </div>
        


        <div class=" mx-18  ">
            <table class="text-sm w-full table-auto  text-center text-gray-500 ">
                <thead class="text-xs w-10 text-gray-300 uppercase   bg-gray-800  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            Tarea
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white ">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white ">
                            fecha limite
                        </th>
                        <th scope="col" class="px-6 py-3 ">

                        </th>
                        <th scope="col" class="px-6 py-3   ">

                        </th>
                    </tr>
                </thead>

                @foreach ($task as $task)
                    <tbody>
                        <tr class=" bg-white even:bg-slate-50 text-base  border mt-4 border-gray-300 ">
                            <th scope="row" class="px-6 py-4 font-medium  italic text-gray-900 whitespace-nowrap ">
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


                            <td class="px-4 py-6 border  border-gray-300">

                                <button type="submit">

                                    <a href="{{ route('tasks.show', $task) }}">
                                        <img class="w-12 h-12 mt-1 mx-6  " title="Ver"
                                            src="{{ asset('images/eyes.jpg') }}"></a>
                                </button>


                            </td>

                            <td class="px-6 py-4 text-md border border-gray-300">
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
                @endforeach

            </table>

        </div>


    </div>


@endsection()
