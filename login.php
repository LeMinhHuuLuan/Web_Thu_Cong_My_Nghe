<?php
  include("header.php");
  require_once("./auth/backend/auth.php");

  // Ensure this code does not interfere with the rest of the page
  if (!isset($_SESSION['user_logged_in'])) {
    require_once("auth/backend/filterWithCookie.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Woodmart</title>
    <style>
      .container{
        margin-top: 100px;
        margin-left: auto;
        margin-right: auto;
        max-width: 400px;
        padding: 20px;
        border-radius: 10px;
      }

      h1{
        text-align: center;
        margin-bottom: 20px;
      }

      .form-control {
        border-radius: 10px;
        padding: 10px;
      }

      .btn-primary{
        width: 100%;
        border-radius: 10px;
        padding: 10px;
      }

      .txt_field{
        margin-bottom: 15px;
      }


    </style>
  </head>
  <body>
    <div class="container">
      <div class="center">
        <h1>Login</h1>
        <form method="post">
          <div class="txt_field">
            <input type="text" class="form-control" name="user_name" required />
            <span></span>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input type="password" class="form-control" name="password" required />
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" class="btn-primary" value="Login" name="submit" />
          <div class="signup_link">Not a member? <a href="./register.php">Signup</a></div>
        </form>
      </div>
    </div>
  </body>
</html>

<?php
  include("footer.php");
      
  if(isset($_POST['submit'])){
    $run = Auth::login($_POST['user_name'],$_POST['password']);
    if($run){
      if (headers_sent($file, $line)) {
        die("Lỗi: Header đã gửi ở file $file, dòng $line");
      }
      header("Location: ./index.php");
    }else
      echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác');
      window.location.href='./login.php';</script>";
  }
?>