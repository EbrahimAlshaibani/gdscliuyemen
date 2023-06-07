<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>