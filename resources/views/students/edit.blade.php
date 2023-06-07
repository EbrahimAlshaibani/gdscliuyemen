<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4">
        <form action="{{route('students.update',$student)}}" method="POST">
            @csrf
            @method("POST")
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{$student->name}}">
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Major</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Major" name="major" value="{{$student->majoir}}">
                <span class='text-danger'>@error('major')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="University ID" name='uni_id' value="{{$student->uni_id}}">
                <span class='text-danger'>@error('uni_id')
                    {{$message}}
                @enderror</span>
              </div>
              <button type="submit" class="btn btn-success">Save</button>
        </form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>