@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
      <ul class="list-group">
          <li class="list-group-item active" aria-current="true">{{$course->id}}</li>
          <li class="list-group-item">{{$course->name}}</li>
          <li class="list-group-item">
            <img src="{{asset("uploads/$course->image")}}" width="100" alt="">
          </li>
          <li class="list-group-item">{{$course->created_at}}</li>
        </ul>
     </div>
   @endsection

