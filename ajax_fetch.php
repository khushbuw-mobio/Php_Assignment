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

 $sq="select first_name from login where id=$assign_marks_by";
 $q=mysqli_query($conn,$sq);
 $row1 = mysqli_fetch_array($q);
 $first_name_assigner=$row1['first_name'];

 $math = $row['math'];
 $biology = $row['biology'];
 $history = $row['history'];
 $physics = $row['physics'];
 $chemistry = $row['chemistry'];
 $english = $row['english'];
 $total = $row['total'];
 $perc = $row['perc'];

 $response.="<div class='row'>";
 $response.="<div class='col-sm-3'><span class='mdlabel'>Student Name</span></div>
 <div class='col-sm-9'>
 <div class='form-group'>
 <input type='text' id='name' name='name' value=".$name." class='form-control' readonly=''>
 </div>
 </div>";


$response.="<div class='col-sm-3'><span class='mdlabel'>Marks Assigner</span></div>
<div class='col-sm-9'>
<div class='form-group'>
<input type='text' id='assigner' name='assigner'
 value=".$first_name_assigner." class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>Maths</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark' name='math' value=".$math."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='math' value='Out Of 100' data-name='math' class='form-control' readonly=''>
</div>
</div>";


$response .="<div class='col-sm-3'><span class='mdlabel'>Biology</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark1' name='biology' value=".$biology."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='biology' value='Out Of 100' data-name='biology' class='form-control' readonly=''>
</div>
</div>";


$response .="<div class='col-sm-3'><span class='mdlabel'>History</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark2' name='history' value=".$history."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='history' value='Out Of 100' data-name='history' class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>Physics</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark3' name='physics' value=".$physics."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='physics' value='Out Of 100' data-name='physics' class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>Chemistry</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark3' name='chemistry' value=".$chemistry."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='chemistry' value='Out Of 100' data-name='chemistry' class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>English</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='mark3' name='english' value=".$english."  class='form-control' readonly=''></div></div> ";

$response.="<div class='col-sm-3'><span class='mdlabel'>Marks</span></div>
<div class='col-sm-3'>
<div class='form-group'>
<input type='text' id='english' value='Out Of 100' data-name='english' class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>Total</span></div>
<div class='col-sm-9'>
<div class='form-group'>
<input type='text' id='total' name='total' value=".$total."  class='form-control' readonly=''>
</div>
</div>";

$response .="<div class='col-sm-3'><span class='mdlabel'>Percentage</span></div>
<div class='col-sm-9'>
<div class='form-group'>
<input type='text'  id='perc' name='perc' value=".$perc." class='form-control' readonly=''>
</div>
</div>";
$response .="</div>";
echo $response;
exit;
}
?>

