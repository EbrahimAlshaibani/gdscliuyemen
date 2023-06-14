@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('majors.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method("POST")
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{old('name')}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
   </div>
@endsection