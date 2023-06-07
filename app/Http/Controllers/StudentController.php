<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);
        return view('students.index',compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:3',
            'major' => 'required',
            'uni_id' => 'required|unique:students',
        ],[
            'uni_id.required' => "please enter a unique university id"
        ]);
        Student::create([
            "name"=>$request->name,
            "majoir"=>$request->major,
            "uni_id"=>$request->uni_id
        ]);
        return redirect()->route('students');
    }
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }
    public function update(Request $request,Student $student)
    {
        $rules = [
            'name' => 'required|max:50|min:3',
            'major' => 'required',
            'uni_id' => 'required',
        ];
        $messges = [
            'name.min' => 'يجب ان يكون الاسم 3 احرف او اكثر'
        ];
        $request->validate($rules,$messges);
        $student->name = $request->name; 
        $student->majoir = $request->major; 
        $student->uni_id = $request->uni_id; 
        $student->update();
        return redirect()->route('students');
    }
    public function show($id)
    {
        $studnet = Student::find($id);
        return view('students.show')
        ->with('studnet',$studnet);
    }
    public function destroy($id)
    {
        Student::find($id)->delete();
        // $studnet = Student::find($id);
        // $studnet->delete();
        return redirect()->route('students');
    }
}
