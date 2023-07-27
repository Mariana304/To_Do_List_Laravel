<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {

        $task = Task::orderBy('id', 'desc')->paginate();

        return view('tasks.index', compact('task'));
    }



    public function create()
    {
        return view('tasks.create');
    }


    public function show(Task $task)
    {

        return view('tasks.show', compact('task'));
    }




    public function store(Request $request)
    {
        $tasks = Task::create($request->all());


        return redirect()->route('tasks.show', $tasks->id);
    }


    public function edit(Task $task)
    {

        return view('tasks.edit', compact('task'));
    }


    public function update(SaveTaskRequest $request, Task $task)
    {

        $task->update($request->validated());

        return redirect()->route('tasks.show', compact('task'));
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index', compact('task'));
    }
}
