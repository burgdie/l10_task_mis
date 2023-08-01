<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('management.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('management.departments.create');
    }

    public function store(Request $request)
    {
        Department::create([
            'name' => $request->name,
            'director_id' => $request->director_id,
            'user_id' => 1,
        ]);
        return redirect()->route('departmentsIndex');
    }
}
