<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::withCount('projects')->with('owner')->paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create() {
        $owners = User::where('role','company')->get();
        return view('companies.create', compact('owners'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'user_id'=>'required|exists:users,id',
        ]);

        Company::create($request->only('name','user_id'));
        return redirect()->route('companies.index');
    }

    public function edit(Company $company) {
        $owners = User::where('role','company')->get();
        return view('companies.edit', compact('company','owners'));
    }

    public function update(Request $request, Company $company) {
        $request->validate([
            'name'=>'required',
            'user_id'=>'required|exists:users,id',
        ]);

        $company->update($request->only('name','user_id'));
        return redirect()->route('companies.index');
    }

    public function destroy(Company $company) {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
