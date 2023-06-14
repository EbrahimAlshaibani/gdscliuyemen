@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <a href="{{route('courses.create')}}" class="getstarted">Create New</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col" style="width: 250px">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($courses as $course)
         <tr>
            <th>{{$course->id}}</th>
            <th>{{$course->name}}</th>
            <th>{{$course->created_at}}</th>
            <th>
              <a href="{{route('create.course.majors',$course)}}" class="btn btn-outline-success btn-sm">
                Add Majors
                <i class="bi bi-plus"></i>
              </a>
              <a href="{{route('courses.edit',$course)}}" class="btn btn-outline-success btn-sm">
                Edit
                <i class="bi bi-pen"></i>
              </a>
              <a href="{{route('courses.show',$course->id)}}" class="btn btn-outline-primary btn-sm">
                Show
                <i class="bi bi-eye"></i>
              </a>
              <a href="{{route('courses.destroy',$course->id)}}" class="btn btn-outline-danger btn-sm">
                Delete
                <i class="bi bi-trash"></i>
              </a>
            </th>
          </tr>
         @endforeach
         <p>courses Count is : {{$courses->count()}}</p>
        </tbody>
      </table>
      {{$courses->links()}}
   </div>
@endsection