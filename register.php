<?php
  include("header.php");
  require_once("./auth/backend/auth.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple and Clean Registration Form</title>
  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    .card {
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      max-width: 400px;
      padding: 20px;
      border-radius: 10px;
    }

    .card-title {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px;
    }

    .btn-primary {
      width: 100%;
      border-radius: 10px;
      padding: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

  </style>
</head>

<body>

  <div class="card shadow-sm">
    <h5 class="card-title">Register</h5>
    <form id="registrationForm" method="POST">
    <div class="form-group mb-3">
        <label for="user_name">User Name</label>
        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your user name" required>
      </div>
      <div class="form-group mb-3">
        <label for="full_name">Full Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group mb-3">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
      </div>
      <div class="form-group mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
    <div style="margin-top : 10px">Already have a account?<a href="./login.php">Login</a></div>
  </div>

</body>

</html>


<?php
  include("footer.php");
  require_once("./utils/checkEmpty.php");
        if(isset($_POST['submit'])){
            if(CheckEmpty::checkEmpty(['user_name','full_name','email','phone_number','address','password'])){
                Auth::register($_POST['user_name'],$_POST['full_name'],$_POST['email'],
                $_POST['phone_number'],$_POST['address'],$_POST['password']);
            }
        }
?>
