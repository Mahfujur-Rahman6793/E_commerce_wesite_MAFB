<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-white">
    <div class="container w-lg-50 w-md-100 border border-4 p-5 signup">
        <h1 class="text-center my-5 fw-bolder">Sign Up</h1>
        <!-- <div class="row mb-4">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname">
              </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname">
              </div>
              
          </div> -->
    
          <form class="row g-4" action="{{route('signup')}}" method="post">
            @csrf
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname">
              </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" value="" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" name="state" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" name="zip" class="form-control" id="inputZip">
            </div>
            <div class="col-md-12">
              <label for="role" class="form-label">Add User Role</label>
              <select id="role" name="role" class="form-select">
                <option selected>Choose...</option>
                <option value="Delivery">Delivery</option>
                <option value="Admin">Admin</option>
                <option value="Admin">Customer</option>
              </select>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>

            <div class="col-12 d-flex justify-content-center mt-5">
              <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
          </form>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>