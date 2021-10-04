<?php
$err_empty='';
$err_invalid_email='';
$err_exists='';
$err_sort_pwd='';
$err_pwd_match='';
$err_not_fire_query='';
    require_once 'connection.php';
if (isset($_POST['signup'])) {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirm_password'];
		// $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        if(empty($firstname && $lastname && $email && $password)){
              $err_empty="empty fields.<br>";
        }
		$sq="SELECT * FROM `login` WHERE emailid='$email' LIMIT 1";
		$sqry=mysqli_query($conn,$sq);
		if(mysqli_num_rows($sqry)>0)
		{
			$err_exists="email already exists";
		}
        function checkemail($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
        }
        if(!checkemail($email)){
            $err_invalid_email="Invalid email address.<br>";
        }
        if(strlen($password)<5 && strlen($confirmpassword)<5)
        {
            $err_sort_pwd="enter atleast 5 character for password.<br>";
        }
        if($password === $confirmpassword)
        {
            $query="INSERT INTO `login` (`first_name`, `last_name`, `emailid`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";
                $result   = mysqli_query($conn, $query);
                if ($result) {
                    header("location:login.php");
                } else {
                    header("location:register.php");
					$err_not_fire_query="Something went Wrong";
                }
            }else{
         $err_pwd_match= "password should be match";
        }
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				

				<form class="login100-form validate-form" action="#" method="POST">
					<span class="login100-form-title">
						Member SignUp
					</span>
					<div class="danger">
						<p><?php
						if(strlen($err_empty)>0){
						 ?><p>
							 <?php  echo $err_empty;  ?>
						 </p>
						<?php
						}
						if(strlen($err_invalid_email)>0){ ?>
							<p><?php echo $err_invalid_email; ?>  </p>
						   }
						   if(strlen($err_sort_pwd)>0){ ?>
							<p><?php echo $err_sort_pwd; ?> </p>
							<?php  }
						   if(strlen($err_pwd_match)>0){ ?>
							<p> <?php echo $err_pwd_match;?>  </p>
							<?php  }
						   if(strlen($err_not_fire_query)>0){ ?>
							<p> <?php echo $err_not_fire_query; ?> </p>
							<?php  } 
						   if(strlen($err_exists)>0){ ?>
							<p><?php echo $err_exists; ?> </p>
							<?php  }
						   
						?></p>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: Name">
						<input class="input100" type="text" name="firstname" placeholder="FirstName">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: Name">
						<input class="input100" type="text" name="lastname" placeholder="LastName">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa fa-user" area-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confirm_password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="signup" class="login100-form-btn">
							SignUp
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Already have an account SignIn
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>