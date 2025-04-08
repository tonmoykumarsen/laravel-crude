<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Index
    public function index(){
        $tasks=Task::latest()->get();
        return view('task.index',compact('tasks'));
    }

    // Create
    public function create(){
        return view('task.create');
    }

    // Store
    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'description'=>'nullable|string',
            'due_date'=>'nullable|date',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,Completed',
        ]);
        Task::create($request->all());
        return redirect()->route('task.index')->with('success','Task Created Successfull');
    }

    // Show Data
    public function show(Task $task){
        return view('task.show',compact('task'));

    }

    // Edit
    public function edit(Task $task){
        return view('task.edit',compact('task'));
    }
    // Update
    public function update(Request $request,Task $task){
        $request->validate([
            'title'=>'required|string',
            'description'=>'nullable|string',
            'due_date'=>'nullable|date',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,Complete',
        ]);
        $task->update($request->all());
        return redirect()->route('task.index')->with('success','Task Updated Successfull');
    }
    // Delete Data
    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('task.index')->with('success', 'Task deleted successfully.');
    }
}
