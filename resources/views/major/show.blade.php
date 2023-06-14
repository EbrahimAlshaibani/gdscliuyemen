@extends('layouts.master')

@section('content')
<div class="container mt-4">
    {{-- @dd($major->courses) --}}
    @foreach ($major->courses as $course)
    <li>{{$course->name}}</li>
    @endforeach
     
</div>
@endsection