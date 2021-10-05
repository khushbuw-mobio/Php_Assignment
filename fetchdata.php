<?php
require_once 'connection.php';
$userid=0;
if(isset($_POST['userid']))
{
    $userid=mysqli_real_escape_string($conn,$_POST['userid']);
}
$qry="select * from result where id=$userid";
$result=mysqli_query($conn,$qry);
$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $name = $row['name'];
 $assign_marks_by = $row['assign_marks_by'];
 $math = $row['math'];
 $biology = $row['biology'];
 $history = $row['history'];
 $physics = $row['physics'];
 $chemistry = $row['chemistry'];
 $english = $row['english'];
 $total = $row['total'];
 $perc = $row['perc'];

 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$name."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Your marks assign by : </td><td>".$assign_marks_by."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Math : </td><td>".$math."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Biology : </td><td>".$biology."</td>";
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>History : </td><td>".$history."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Physics : </td><td>".$physics."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Chemistry : </td><td>".$chemistry."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>English : </td><td>".$english."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Total : </td><td>".$total."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Percentage : </td><td>".$perc."</td>"; 
 $response .= "</tr>";
}
$response .= "</table>";

echo $response;
exit;
?>