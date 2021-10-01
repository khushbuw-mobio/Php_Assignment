<?php      
        include('connection.php');  
        session_start();
        $email = $_POST['emailid'];  
        $password = $_POST['password'];  
          
            
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($conn, $email);  
            $password = mysqli_real_escape_string($conn, $password);  
          
            $sql = "select *from login where emailid = '$email' and password = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
               header("location:index.php");
               $_SESSION['email']=$email;
            
            }  
            else{  
                echo "<h1> Login failed. Invalid email or password.</h1>";  
            }     
    ?>  