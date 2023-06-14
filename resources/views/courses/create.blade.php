@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('courses.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Course Name" name="name" value="{{old('name')}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Image</label>
              <input type="file" accept="png,jpg" class="form-control @error('image') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Image" name="image" value="{{old('image')}}" required>
              <span class='text-danger'>@error('image')
                  {{$message}}
              @enderror</span>
          </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
   </div>
@endsection