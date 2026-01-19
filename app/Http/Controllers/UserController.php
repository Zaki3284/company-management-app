<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        return view('users.users', ['users'=>User::latest()->paginate(5)]);
    }

    public function create() {
        return view('users.CRUD.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'role'=>'required|in:admin,company,employer',
            'password'=>'required|min:6',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user) {
        return view('users.CRUD.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name'=>'required',
            'email'=>"required|email|unique:users,email,{$user->id}",
            'role'=>'required|in:admin,company,employer',
        ]);

        $user->update($request->only('name','email','role'));

        return redirect()->route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
