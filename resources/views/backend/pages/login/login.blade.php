
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{url('/backend/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('/backend/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/backend/login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{url('/backend/login/css/style.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <title>Login</title>
  </head>
  <body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{url('/backend/login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
            </div>


            <form action="{{route('do.login')}}" method="post">
                @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>

             <input type="submit" value="Log In" class="btn btn-block btn-primary">
              <a href="{{route('registration')}}" vlaue="Sign Up" class="btn btn-block btn-primary">Sign Up</a>
            </form>


            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{url('/backend/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('/backend/login/js/popper.min.js')}}"></script>
    <script src="{{url('/backend/login/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/backend/login/js/main.js')}}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
  </body>
</html>
