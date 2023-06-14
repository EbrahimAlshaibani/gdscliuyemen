@extends('layouts.master')

@php
    $selected = [];
    foreach ($course->majors as $major) {
        $selected[] = $major->id;
    }
@endphp
@section('content')
<div class="container mt-4">
  
    <h3>{{$course->name}}</h3>
    @if ($message = Session::get('success'))
    <div class="alert alert-light text-center mt-4 alert-dismissible fade show" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
          </svg>
        {{$message}}
        {{-- <hr>
        Great Job --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <form action="{{route('store.course.majors',$course)}}" class="row g-3" method="POST" id="majorsForm">
    @csrf
    @method("POST")
    <div class="col-4">
        <button class="btn btn-success btn-sm" type="button" id="checkAll">Check All</button>
        <button class="btn btn-success btn-sm" type="button" id="uncheckAll">Uncheck All</button>
    </div>
    @foreach ($majors as $major)
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="{{$major->id}}" id="flexCheck{{$major->id}}" name=majors[] {{ in_array($major->id,$selected)? 'checked' : '' }}>
      <label class="form-check-label" for="flexCheck{{$major->id}}">
        {{$major->name}}
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
          $('#majorsForm input[type="checkbox"]').prop('checked', true);
          $('#checkAll').hide()
          $('#uncheckAll').show()
        });
        $('#uncheckAll').click(function() {
          $('#majorsForm input[type="checkbox"]').prop('checked', false);
          $('#uncheckAll').hide()
          $('#checkAll').show()
        });
      });
    </script>
@endsection