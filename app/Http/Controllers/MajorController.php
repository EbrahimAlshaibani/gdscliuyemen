<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Major;
use App\Models\MajorCourse;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::paginate();
        return view('major.index',compact("majors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Major::create(['name'=>$request->name]);
        return redirect()->route('majors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        // $major = Major::find($major);
        // dd($major->courses);
        return view('major.show',compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        //
    }

    public function createMajorCourses(Major $major)
    {
        $courses = Course::all();
        return view('major.courses',compact('major','courses'));
    }

    public function storeMajorCourses(Request $request, Major $major)
    {
        $major->courses()->sync($request->courses);
        return redirect()->back()->with('success','courses updated successfully');
    }
}

