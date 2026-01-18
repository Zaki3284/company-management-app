<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Company', function () {
    return view('Company.Company');
});


Route::get('/Project', function () {
    return view('Company.Project.Project');
});


Route::get('/Employee', function () {
    return view('Company.Employee.Employee');
});

Route::get('/Users', function () {
    return view('users.users');
});