<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center signin">
    
  <main class="form-signin w-25 m-auto mt-5 bg-white p-4 rounded-4 ">
  @if (Session::has('failure'))
    <div class="col-12 alert alert-danger " id="message">
        
            {!! Session::get('failure') !!}
        
    </div>
@endif
    <form action="{{route('login')}}" method='post'>
        @csrf
      <img class="mb-4" src="img/LOGO.png" alt="" >
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3">Create a new account?<a href="signup.html">Sign up</a></p>
    </form>
  </main>
    
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
var yourElement = document.getElementById(“message”);
yourElement.addEventListener(“click”, function(){
setTimeout(function(){
}, 5000);
});
  </script>
</body>
</html>