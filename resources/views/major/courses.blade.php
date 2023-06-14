@extends('layouts.master')
@php
  $selected = [];
  foreach ($major->courses as $course) {
        $selected[] = $course->id;
  }
@endphp
@section('content')

<div class="container mt-4">
  @if ($message = Session::get('success'))
  <div class="alert alert-success text-center mt-2 alert-dismissible fade show">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
    </svg>
      {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif
  
  <h3>{{$major->name}}</h3>
  <form action="{{route('store.major.courses',$major)}}" method="post" class="row g-3" id="coursesForm">
    @csrf
    @method("POST")
    {{-- <select name="courses[]" id="" multiple class="form-control">
        <option value="">---</option>
        @foreach ($courses as  $counter=>$course)

        <option value="{{$course->id}}" {{ in_array($course->id,$selected)? 'selected' : '' }}>{{$course->name}}</option>
        @endforeach
    </select> --}}
    <div class="col-4">
      <button class="btn btn-success btn-sm" type="button" id="checkAll">Check All</button>
      <button class="btn btn-success btn-sm" type="button" id="uncheckAll">Uncheck All</button>
    </div>

    @foreach ($courses as $course)
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="{{$course->id}}" id="flexCheck{{$course->id}}" name=courses[] {{ in_array($course->id,$selected)? 'checked' : '' }}>
      <label class="form-check-label" for="flexCheck{{$course->id}}">
        {{$course->name}}
      </label>
    </div>
    @endforeach

    <div class="col-4">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
  </form>     
</div>
@endsection

@section('script')
    <script>
      $("#uncheckAll").hide()
      $(document).ready(function() {
        $('#checkAll').click(function() {
          $('#coursesForm input[type="checkbox"]').prop('checked', true);
          $('#checkAll').hide()
          $('#uncheckAll').show()
        });
        $('#uncheckAll').click(function() {
          $('#coursesForm input[type="checkbox"]').prop('checked', false);
          $('#uncheckAll').hide()
          $('#checkAll').show()
        });
      });
    </script>
@endsection