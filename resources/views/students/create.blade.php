@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('students.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method("POST")
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{old('name')}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Major</label>
                <select name="major" class="form-control @error('major') is-invalid @enderror" name="major" required>
                  <option value="">---</option>
                  @foreach ($majors as $major)
                   <option value="{{$major->id}}" {{ $major->id==old('major')?"selected":"" }} >{{$major->name}}</option>
                  @endforeach
                </select>
                {{-- <input type="text" class="form-control @error('major') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Student Major" name="major" value="{{old('major')}}" required> --}}
                <span class='text-danger'>@error('major')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">University ID</label>
                <input type="text" class="form-control @error('uni_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="University ID" name='uni_id' value="{{old('uni_id')}}" required>
                <span class='text-danger'>@error('uni_id')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
   </div>
@endsection