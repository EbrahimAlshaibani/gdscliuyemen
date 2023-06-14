@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <a href="{{route('majors.create')}}" class="getstarted">Create New</a>
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
         @foreach ($majors as $major)
         <tr>
            <th>{{$major->id}}</th>
            <th>{{$major->name}}</th>
            <th>{{$major->created_at}}</th>
            <th>
                <a href="{{route('create.major.courses',$major)}}" class="btn btn-outline-success btn-sm">
                    Add Courses
                    <i class="bi bi-plus"></i>
                  </a>
              <a href="{{route('majors.edit',$major)}}" class="btn btn-outline-success btn-sm">
                Edit
                <i class="bi bi-pen"></i>
              </a>
              <a href="{{route('majors.show',$major->id)}}" class="btn btn-outline-primary btn-sm">
                Show
                <i class="bi bi-eye"></i>
              </a>
              <a href="{{route('majors.destroy',$major->id)}}" class="btn btn-outline-danger btn-sm">
                Delete
                <i class="bi bi-trash"></i>
              </a>
            </th>
          </tr>
         @endforeach
         <p>majors Count is : {{$majors->count()}}</p>
        </tbody>
      </table>
      {{$majors->links()}}
   </div>
@endsection