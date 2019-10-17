<?php
session_start();
$_SESSION['updateavailabelsheat']='cross.jpg';
if( !isset($_SESSION['key3']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['updateavailabelsheat']='right.jpg';
?>
<html>
<center>
<head><h4 class="suck">Update collage details</h4>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<p><?php
//session_start();
//$type = $_POST['ee1'];
?>
<h2 class="ad">
<?php
echo"Welcome Admin!!!";
?>
</p>
<SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("institutehelp.php","mywindow","menubar=1,resizable=1,width=830,height=550");
}
</script>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<a href="javascript: openwindow()" ><img src="image/chat.jpg" width="25" height="24" align="absmiddle"/><span  class="span">Help</span></a>
<form name="f1" action="update.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Id:</p>
</td>
<td>
<input type="text" name="a1" value=""  placeholder="enter collage Id" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Collage_name:</p>
</td>
<td>
<input type="text" name="a2" value="" placeholder="Collage name " required>
</td>
</tr>
<tr>
<td>
<p class="mn">CSdeptseat:</p>
</td>
<td>
<input type="text" name="a3" value="" >
</td>
</tr>
<tr><td></td><td><input type="submit" size="2" value="NEXT" class="rc-button-red"></td>
<td></tr>
</table>
</form>
</body>
</center>
</html>


