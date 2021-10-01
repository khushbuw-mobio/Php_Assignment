<?php
session_start();
require_once 'connection.php';
if(isset($_SESSION['email']))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
        <div class="text">
          <!-- <span class="text-1">Every new friend is a <br> new adventure</span> -->
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <!-- <span class="text-1">Complete miles of journey <br> with one step</span> -->
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="login_check.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="emailid" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="signin" value="SignIn">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="register.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" placeholder="Enter your First name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" placeholder="Enter your Last name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirm_password" placeholder="Confirm your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="signup" value="SignUp">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
