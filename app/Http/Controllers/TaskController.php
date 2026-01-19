<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::with('project','employer')->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        $projects = Project::all();
        $employees = User::where('role','employer')->get();
        return view('tasks.create', compact('projects','employees'));
    }

    public function store(Request $request) {
        $request->validate([
            'title'=>'required',
            'project_id'=>'required|exists:projects,id',
            'employer_id'=>'required|exists:users,id',
            'Start_Date'=>'required|date',
            'End_Date'=>'required|date|after_or_equal:Start_Date',
            'status'=>'required|in:pending,done',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task) {
        $projects = Project::all();
        $employees = User::where('role','employer')->get();
        return view('tasks.edit', compact('task','projects','employees'));
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'title'=>'required',
            'project_id'=>'required|exists:projects,id',
            'employer_id'=>'required|exists:users,id',
            'Start_Date'=>'required|date',
            'End_Date'=>'required|date|after_or_equal:Start_Date',
            'status'=>'required|in:pending,done',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
