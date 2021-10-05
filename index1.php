<?php
require_once 'connection.php';
session_start();
if(!isset($_SESSION["email"])) {
  header("Location: login.php");
  exit();
  $s_email=$_SESSION['email'];
  $sql="select first_name from login where email=$s_email";
  $qry=mysqli_query($conn,$sql);
  
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
      <div class="row">
      
        <div class="col-md-6">
        <div class="header-left">
       <!-- <p class="p-style"> Welcome <?php echo $_SESSION['email']; ?></p> -->
       <p class="p-style"> Welcome <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?></p>
    </div>
        </div>
        <div class="col-md-6">
        <div class="header-right">
            <a class="active" href="logout.php">LogOut</a>
            </div>
        </div>
      </div>
    
    </div>

    <div style="padding-left:20px">
<div class="row">
<h1> Students List</h1>
        <button class="button" data-toggle="modal" data-target="#myModal">Add record</button>
</div>
<div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    <form action="save_record.php" method="post">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Result</h4>
        </div>
        <div class="modal-body">
        <div class="modal-body">
<div class="row">

<div class="col-sm-3"><span class="mdlabel">Name</span></div>
<div class="col-sm-9">
<div class="form-group">
<input type="text" id="name" name="name" class="form-control">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Maths</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark" name="math" class="form-control">

</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="math" value="Out Of 100" data-name="math" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Biology</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark1" name="biology" class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="biology"  value="Out Of 100 " class="form-control" readonly="">

</div>
</div>
<div class="col-sm-3"><span class="mdlabel">History</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number"  id="mark2" name="history"  class="form-control">

</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="history"  value="Out Of 100" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Physics</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark3" name="physics" class="form-control">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="english" value="Out Of 100" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Chemistry</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark4" name="chemistry" class="form-control">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="chemistry" value="Out Of 100" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">English</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark5" name="english" class="form-control">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="english" value="Out Of 100" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Total</span></div>
<div class="col-sm-9">
<div class="form-group">
<input type="number" id="total" name="total"  class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Percentage</span></div>
<div class="col-sm-9">
<div class="form-group">
<input type="number"  id="perc" name="perc" class="form-control" readonly="">
</div>
</div>
</div>
</div>  
        </div>
        <div class="modal-footer">
          <button type="submit" name="save" class="button btn-modal-submit" >Save Record</button>
        </div>
      </div>
    </form>
      
    </div>
  </div>
    <div class="row">
    <table id="customers">
            <tr>
                <th>Students</th>
                <th>Percentage</th>
            </tr>
            <?php
            $sql="select * from result order by perc DESC";
            $result=mysqli_query($conn,$sql);
          if ($result) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {  
    
     ?>
      <tr>
      <td><a href="" class="a-link show_modal_ajax" data-toggle="modal" data-target="#mymodal_display_data" data-id="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
    <input type="hidden" name="rowid" id="rowid" value="<?php echo $row['id']; ?>">
    </a> </td>
      <td><?php echo $row['perc']; ?>
    </td>
  </tr>
        <?php } }
            ?>
            
            
        </table>
    </div>    
      
    </div>
   
    <div class="modal fade" id="mymodal_display_data" role="dialog">

<div class="modal-dialog">
<form action="save_record.php" method="post">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Profile</h4>
    </div>
    <!-- <div class="modal-body"> -->
    <div class="modal-body show_ajax_data">

</div>  
    <!-- </div> -->
    <div class="modal-footer">
      <button type="submit" name="save" class="button btn-modal-submit" data-dismiss="modal" >Close</button>
    </div>
  </div>
</form>
  
</div>
</div>

            <script>

$('.show_modal_ajax').click(function(e){
  e.preventDefault();
 var userid = $(this).data('id');
  console.log(userid);
  $.ajax({
      method:"post",
      url:"ajax_fetch.php",
      data:{userid:userid},
    //   dataType:html,
      success:function(response){
        $('.show_ajax_data').html(response);
        $('#mymodal_display_data').show();
      }
  })
});
</script>
    <script>

      $('#mark,#mark1,#mark2,#mark3,#mark4,#mark5').change(function(){
      var math= parseFloat($('#mark').val()) || 0;
      var biology =parseFloat($('#mark1').val()) || 0;
      var history = parseFloat($('#mark2').val()) || 0;
      var physics = parseFloat($('#mark3').val()) || 0;
      var chamestry = parseFloat($('#mark4').val()) || 0;
      var english = parseFloat($('#mark5').val()) || 0;
      var total= (math+biology+history+physics+chamestry+english);
      $('#total').val(total);
     
        
        var p=(total/600) *100;
        $('#perc').val(p.toFixed(2));    
});
  
      </Script>
      
      

</body>

</html>