@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
        <form action="{{route('email')}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method("POST")
            <div class="col-12">
                <label for="exampleFormControlInput1" class="form-label">Reciver</label>
                <input type="email" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{old('name')}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="col-12">
                <label for="exampleFormControlInput1" class="form-label">Message</label>
                <textarea class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Message" name="message" value="{{old('message')}}" required></textarea>
                <span class='text-danger'>@error('message')
                    {{$message}}
                @enderror</span>
            </div>
              <div class="col-12">
                <button type="submit" class="btn btn-outline-primary">Send Email</button>
              </div>
        </form>
   </div>
@endsection