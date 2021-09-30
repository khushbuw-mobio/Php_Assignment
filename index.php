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
        <div class="header-right">
            <a class="active" href="#home">LogOut</a>
        </div>
    </div>

    <div style="padding-left:20px">
<div class="row">
<h1> Students List</h1>
        <button class="button" data-toggle="modal" data-target="#myModal">Add record</button>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
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
<input type="text" id="name" data-name="name" class="form-control">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Maths</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="math" value="100 Out Of" data-name="math" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark"  class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Biology</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="science"  value="100 Out Of" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark1" class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">History</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="history"  value="100 Out Of" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number"  id="mark2"  class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Physics</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="english" value="100 Out Of" class="form-control" readonly="">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark3" class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Chemistry</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="english" value="100 Out Of" class="form-control" readonly="">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark3" class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">English</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="text" id="english" value="100 Out Of" class="form-control" readonly="">
</div>
</div>

<div class="col-sm-3"><span class="mdlabel">Marks</span></div>
<div class="col-sm-3">
<div class="form-group">
<input type="number" id="mark3" class="form-control">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Total</span></div>
<div class="col-sm-9">
<div class="form-group">
<input type="number" data-role="number" id="total" data-name="total" class="form-control" readonly="">
</div>
</div>
<div class="col-sm-3"><span class="mdlabel">Percentage</span></div>
<div class="col-sm-9">
<div class="form-group">
<input type="number" data-role="number" id="perc" data-name="perc" class="form-control" readonly="">
</div>
</div>
</div>
</div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="button btn-modal-submit" data-dismiss="modal">Save Record</button>
        </div>
      </div>
      
    </div>
  </div>
    <div class="row">
    <table id="customers">
            <tr>
                <th>Students</th>
                <th>total marks</th>
                <th>Percentage</th>
            </tr>
            <tr>
                <td>Amit</td>
                <td>600</td>
                <td>70</td>
            </tr>
            <tr>
                <td>Nisha</td>
                <td>600</td>
                <td>60</td>
            </tr>
            <tr>
                <td>Mona</td>
                <td>600</td>
                <td>80</td>
            </tr>
            
            <tr>
                <td>Deepak</td>
                <td>600</td>
                <td>40</td>
            </tr>
          
        </table>
    </div>    
      
    </div>

</body>

</html>