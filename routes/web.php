<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('home');
});

Route::get('/Company', function () {
    return view('Company.Company');
});


Route::get('/Project', function () {
    return view('Company.Project.Project');
});

Route::get('/Task', function () {
    return view('Company.Task.Task');
});


Route::get('/Employee', function () {
    return view('Company.Employee.Employee');
});

Route::get('/Users', function () {

    return view('users.users',['users'=>User::paginate(5)]);
});