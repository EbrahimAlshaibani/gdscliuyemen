<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4">
        <form action="{{route('students.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method("POST")
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" name="name" value="{{old('name')}}" required>
                <span class='text-danger'>@error('name')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Major</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student Major" name="major" value="{{old('major')}}" required>
                <span class='text-danger'>@error('major')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">University ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="University ID" name='uni_id' value="{{old('uni_id')}}" required>
                <span class='text-danger'>@error('uni_id')
                    {{$message}}
                @enderror</span>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>