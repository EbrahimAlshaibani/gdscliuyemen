@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
    <a href="{{route('teachers.create')}}" class="btn btn-primary mb-2">Create New</a>
   
         @if ($teachers->count() == 0)
         <div class="alert alert-light text-center" role="alert">
            No data yet!
          </div>
         @else
         <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Salary</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Created At</th>
                <th scope="col" style="width: 250px">Action</th>
              </tr>
            </thead>
            <tbody>
         @foreach ($teachers as $teacher)
         <tr>
            <th>{{$teacher->id}}</th>
            <th>{{$teacher->name}}</th>
            <th>{{$teacher->salary}}</th>
            <th>{{$teacher->emp_id}}</th>
            <th>{{$teacher->created_at}}</th>
            <th>
              <a href="{{route('teachers.edit',$teacher)}}" class="btn btn-outline-success btn-sm">
                Edit
                <i class="bi bi-pen"></i>
              </a>
              <a href="{{route('teachers.show',$teacher->id)}}" class="btn btn-outline-primary btn-sm">
                Show
                <i class="bi bi-eye"></i>
              </a>
              <a href="{{route('teachers.destroy',$teacher->id)}}" class="btn btn-outline-danger btn-sm">
                Delete
                <i class="bi bi-trash"></i>
              </a>
            </th>
          </tr>
         @endforeach
        </tbody>
    </table>
         @endif
         <p>teachers Count is : {{$teachers->count()}}</p>
      {{$teachers->links()}}
   </div>
   @endsection