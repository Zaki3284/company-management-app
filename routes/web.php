<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Company;
use App\Models\Task;
use App\Http\Controllers\UserController;
use App\Models\Project;

Route::get('/', function () {
    return view('home');
});

Route::get('/Company', function () {
    $companies = Company::withCount('projects')->with('projects')->paginate(5);
    return view('Company.Company', ['companies' => $companies]);
});




Route::get('/Project', function () {
    $projects = Project::withCount('tasks')->with('company')->paginate(5);
    return view('Company.Project.Project', ['projects' => $projects]);
});


Route::get('/Task', function () {
    $tasks = Task::with('project', 'employer')->paginate(10);
    return view('Company.Task.Task',['tasks'=>$tasks]);
});


Route::get('/Employee', function () {
    return view('Company.Employee.Employee');
});

Route::get('/Users', function () {
    return view('users.users', [
        'users' => User::latest()->paginate(5)
    ]);
})->name('users.index');


Route::resource('users', UserController::class);
// Route::resource('companies', CompanyController::class);
// Route::resource('projects', ProjectController::class);
// Route::resource('tasks', TaskController::class);
