<?php
session_start();
require_once 'connection.php';
if(isset($_POST['save']))
{
    $name=trim($_POST['name']);
    $math=$_POST['math'];
    $biology=$_POST['biology'];
    $history=$_POST['history'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $english=$_POST['english'];
    $total=$_POST['total'];
    $perc=$_POST['perc'];
    $marks_assign_by=$_SESSION['id'];
  

    if(!empty($name) || !empty($math) || !empty($biology) || !empty($history) || !empty($physics) || !empty($chemistry) || !empty($english) || !empty($total) || !empty($perc))
    {
        $sql="INSERT INTO `result` (`name`, `math`, `biology`, `history`, `physics`, `chemistry`, `english`, `total`, `perc`,`assign_marks_by`) VALUES ('$name','$math','$biology','$history','$physics','$chemistry','$english','$total','$perc','$marks_assign_by')";
        if(mysqli_query($conn, $sql)){
            header("location:index.php");
        } else{
            // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            echo "someting wrong";
        }
       
    }
}
?>