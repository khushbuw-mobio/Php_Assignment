<?php
    require_once 'connection.php';
if (isset($_POST['signup'])) {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($firstname && $lastname && $email && $password)){
            $query="INSERT INTO `login` (`first_name`, `last_name`, `emailid`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
               header("location:index.php");
            } else {
              header("location:register.php");
            }
        }
        else
        {
            echo "empty fields";
        }
       
    }
?>