<?php
session_start();
 include'header.php';?>
<html>
<head><marquee scrollamount="6" direction="right to left"onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="70" height="130px"><img src="http://localhost/sss/primg/newicon.gif" alt="10"><a href="result.php">Result for Online counseling  session 2014</a></marquee>
</head>
<body>
<link rel="stylesheet" href="p.css">
<link rel="stylesheet" href="gmail.css">
<?php
if($_SERVER['REQUEST_METHOD']=='GET')
{
    echo$_SESSION['name']."<span class='forgot1' align='center'> your registration from sucessfully submited</span>";
}
?>
<table class="p">
<tr>
<td>
<img src="http://localhost/sss/primg/administrator_003.gif">
</td>
<td width="1200px">
<a href="admin.php">
<img src="http://localhost/sss/primg/index.jpeg" title="click on image for ADMINISTRATOR login">
</a>
</td>
<td width="300px">
<?php
include'h.m.php';?></td></table><body></html>
<?php
include'footer.php';?>
