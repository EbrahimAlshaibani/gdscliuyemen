@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('students.update',$student)}}" method="POST">
            @csrf
            @method("POST")
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{$student->name}}">
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Major</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Major" name="major" value="{{$student->majoir}}">
                <span class='text-danger'>@error('major')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="University ID" name='uni_id' value="{{$student->uni_id}}">
                <span class='text-danger'>@error('uni_id')
                    {{$message}}
                @enderror</span>
              </div>
              <button type="submit" class="btn btn-success">Save</button>
        </form>
   </div>
@endsection