@extends('layouts.master')
   @section('content')
   <div class="container mt-4">
      <ul class="list-group">
          <li class="list-group-item active" aria-current="true">{{$studnet->id}}</li>
          <li class="list-group-item">{{$studnet->name}}</li>
          <li class="list-group-item">{{$studnet->majoir}}</li>
          <li class="list-group-item">{{$studnet->uni_id}}</li>
          <li class="list-group-item">{{$studnet->created_at}}</li>
        </ul>
     </div>
   @endsection

