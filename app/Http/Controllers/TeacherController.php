<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate();
        return view('teachers.index')->with("teachers",$teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:3',
            'salary' => 'required|numeric',
            'emp_id' => 'required|unique:teachers|numeric',
        ],[
            'emp_id.required' => "please enter a unique university id"
        ]);
        Teacher::create([
            "name"=>$request->name,
            "salary"=>$request->salary,
            "emp_id"=>$request->emp_id
        ]);
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit')->with("teacher",$teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|max:50|min:3',
            'salary' => 'required|numeric',
            'emp_id' => 'required|numeric',
        ],[
            'emp_id.required' => "please enter a unique university id"
        ]);
        $teacher->name = $request->name;
        $teacher->salary = $request->salary;
        $teacher->emp_id = $request->emp_id;
        $teacher->update();
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
