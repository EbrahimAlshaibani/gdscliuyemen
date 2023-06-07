@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
    <a href="{{route('students.create')}}" class="btn btn-primary">Create New</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Major</th>
            <th scope="col">Uni ID</th>
            <th scope="col">Created At</th>
            <th scope="col" style="width: 250px">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($students as $student)
         <tr>
            <th>{{$student->id}}</th>
            <th>{{$student->name}}</th>
            <th>{{$student->majoir}}</th>
            <th>{{$student->uni_id}}</th>
            <th>{{$student->created_at}}</th>
            <th>
              <a href="{{route('students.edit',$student)}}" class="btn btn-outline-success btn-sm">
                Edit
                <i class="bi bi-pen"></i>
              </a>
              <a href="{{route('students.show',$student->id)}}" class="btn btn-outline-primary btn-sm">
                Show
                <i class="bi bi-eye"></i>
              </a>
              <a href="{{route('students.delete',$student->id)}}" class="btn btn-outline-danger btn-sm">
                Delete
                <i class="bi bi-trash"></i>
              </a>
            </th>
          </tr>
         @endforeach
         <p>Students Count is : {{$students->count()}}</p>
        </tbody>
      </table>
      {{$students->links()}}
   </div>
   @endsection