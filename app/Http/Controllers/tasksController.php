<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
  
    public function index()
    {
        $Tasks = Task::all();
      return view ('tasks.index')->with('tasks', $Tasks);
    }

    
    public function create()
    {
        return view('tasks.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect('task')->with('flash_message', 'Task Addedd!');  
    }

    
    public function show($id)
    {
        $Task = Task::find($id);
        return view('tasks.show')->with('tasks', $Task);
    }

    
    public function edit($id)
    {
        $Task = Task::find($id);
        return view('tasks.edit')->with('tasks', $Task);
    }

  
    public function update(Request $request, $id)
    {
        $Task = Task::find($id);
        $input = $request->all();
        $Task->update($input);
        return redirect('task')->with('flash_message', 'Task Updated!');  
    }

   
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');  
    }
}   