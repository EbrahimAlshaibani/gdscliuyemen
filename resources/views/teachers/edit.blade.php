@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('teachers.update',$teacher)}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method("PUT")
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{$teacher->name}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Salary</label>
                <input type="text" class="form-control @error('salary') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Salary" name="salary" value="{{$teacher->salary}}" required>
                <span class='text-danger'>@error('salary')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Employee ID</label>
                <input type="text" class="form-control @error('emp_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Employee ID" name='emp_id' value="{{$teacher->emp_id}}" required>
                <span class='text-danger'>@error('emp_id')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
   </div>
@endsection