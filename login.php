<?php
session_start();
require_once 'connection.php';
if(isset($_SESSION['email']))
{
    header("location:index.php");
}
?>
<?php   
$error=''; 
if(isset($_POST['login']))  {
        include('connection.php');  
       
        $email = $_POST['emailid'];  
        $password = $_POST['password'];  
        
                
            // $email = stripcslashes($email);  
            // $password = stripcslashes($password);  
            // $username = mysqli_real_escape_string($conn, $email);  
            // $password = mysqli_real_escape_string($conn, $password);  
          
            $sql = "select * from login where emailid = '$email' ";  
            $result = mysqli_query($conn, $sql);   
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
			print_r($row) ;
			// echo $row['password'];
			$hashedpass=password_verify($password,$row['password']);
			if($hashedpass)
			{
				header("location:index.php");
					$firstname=$row['first_name'];
					$lastname=$row['last_name'];
					$id=$row['id'];
					$_SESSION['email']=$email;
					$_SESSION['first_name']=$firstname;
					$_SESSION['last_name']=$lastname;
					$_SESSION['id']=$id;
			}
			else
			{
				header('location:login.php');
				$error='please enter correct password';
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
			<div class="erro-msg">

			</div>	

				<form class="login100-form validate-form" action="#" method="POST">
					<span class="login100-form-title">
						Member Login
					</span>
					<div class="danger">
						<p><?php
						if(strlen($error)>0){
						 echo $error; 
						}
						?></p>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="emailid" placeholder="Email">
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
					
					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="registration.php">
							Create your Account
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