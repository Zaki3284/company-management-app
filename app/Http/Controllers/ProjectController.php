<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Company;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with('company')->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create() {
        $companies = Company::all();
        return view('projects.create', compact('companies'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'company_id'=>'required|exists:companies,id',
            'description'=>'nullable',
            'deadline'=>'required|date',
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index');
    }

    public function edit(Project $project) {
        $companies = Company::all();
        return view('projects.edit', compact('project','companies'));
    }

    public function update(Request $request, Project $project) {
        $request->validate([
            'name'=>'required',
            'company_id'=>'required|exists:companies,id',
            'description'=>'nullable',
            'deadline'=>'required|date',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
