<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    
    <div class= "container">
      <div class="row d-flex justify-content-center mt-5">
            <form enctype="multipart/form-data" action="{{ URL::route('app.registration.verify') }}" method="post" class = "col-4">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                   </div>
                <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
               </div>
                <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"name="password">
            </div>
            <a href="{{ URL::route('app.login') }}">Log in to your Acoount</a>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
             </form>
      </div>
    </div>





    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>