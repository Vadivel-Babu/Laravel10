<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a href="/" class="navbar-brand text-dark">Products</a>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
        @if($message=Session::get('success'))
         <div class="alert alert-success alert-dismissible fade show">
            <strong>Success </strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label='Close'></button>
         </div>
        @endif
        @yield('main')
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>