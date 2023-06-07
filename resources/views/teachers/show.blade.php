@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
      <ul class="list-group">
          <li class="list-group-item active" aria-current="true">{{$teacher->id}}</li>
          <li class="list-group-item">{{$teacher->name}}</li>
          <li class="list-group-item">{{$teacher->salary}}</li>
          <li class="list-group-item">{{$teacher->emp_id}}</li>
          <li class="list-group-item">{{$teacher->created_at}}</li>
        </ul>
     </div>
   @endsection

