<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Major;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $major = Major::find(1);
        // // $major->courses()->attach(2);
        // // $major->courses()->detach(2);
        // $major->courses()->sync([2]);

        $course = Course::find(1);
        // $course->majors()->attach(5);
        // $course->majors()->detach();
        $course->majors()->sync([5,4,2]);

        // dd($course->majors);

        $courses = Course::paginate();
        return view('courses.index',compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'image' => 'image|max:4096'
        ]);
        if($request->hasFile('image')){
            $image_name  = Carbon::now()->timestamp.".".$request->image->extension();
            $request->image->move(public_path('uploads'),$image_name);
            Course::create([
                'name'=>$request->name,
                'image'=>$image_name
            ]);
            return redirect()->route('courses.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $Course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $Course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $Course)
    {
        //
    }
    public function createCourseMajors(Course $course){
        $majors = Major::all();
        return view('courses.majors',compact('majors','course'));
    }
    public function storeCourseMajors(Course $course,Request $request){
        $course->majors()->sync($request->majors);
        return redirect()->back()->with('success','Majors added successfully');
    }
}
