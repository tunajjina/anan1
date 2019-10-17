<?php
session_start();
 include'header.php';
?>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="p.css">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo$_SESSION['name']."your registration from sucessfully submited";
}
?>
<table class="p">
<tr>
<td>

</td>
<td width="50%">
<a href="admin.php">
<img src="http://localhost/c/image/pic.jpg" title="click on image for ADMINISTRATOR login">
</a>
</td>
<td width="50%">


<form name="f00001" action="w1.php"  method="POST" >

  <div class="row">
  	<div style="margin: 15px;">
<div class="col-sm-6">

 <label for="roll">Roll no:</label>
      <input type="text" name="s1" class="form-control" id="roll" placeholder="Enter Roll no" name="s1" maxlength="10" size="10" required>
</div>
<div class="col-sm-6">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="s2" maxlength="10" size="10" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
      
    <div style="margin: 15px; float: left; overflow: hidden;">
		<input type="submit" name="ee" class="btn btn-primary" size="1" value="Submit">
	</div>
	<div style="margin: 15px; float: left; overflow: hidden;">
		<input type="reset" name="ee" size="1" class="btn btn-danger" value="Refresh">
	</div>
</div>
</div>
</form>


</td></table><body></html>
<?php
include'footer.php';?>
