<?php
session_start();
$_SESSION['reportingcenters']='cross.jpg';

if( !isset($_SESSION['key1']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['reportingcenters']='right.jpg';
?>
<html>
<center>
<head>
 <SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("reportinghelp.php","mywindow","menubar=1,resizable=1,width=730,height=550");
}
</script>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<h2 class="ad">
<?php
echo"Welcome Admin!!!";
?>
<h4 class="suck">Reporting Center details</h4>

</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="st12.css">
<a href="javascript: openwindow()" ><img src="image/chat.jpg" width="25" height="24" align="absmiddle"/><span  class="span">Help</span></a>
<center><form name="f1" action="res12.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Rollno:</p>
</td>
<td>
<input type="text" name="a1r" value=""  placeholder="enter student roll" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Center_name:</p>
</td>
<td>
<input type="text" name="a2r" value="" placeholder="Center name " required>
</td>
</tr>
<tr>
<td>
<p class="mn">ReportingTime:</p>
</td>
<td>
<input type="text" name="a3r" value="" placeholder="Reporting Time " required >
</td>
</tr>
<tr>
<td>
<p class="mn">RepotingDate:</p>
</td>
<td>
<input type="text" name="a4r" value=""placeholder="Reporting Date " required >
</td>
</tr>
<tr height="10px">
<td>
<input type="submit" name="ee" size="1" class="rc-button-red"  value="submit">
</td>
<td class="ad1"><input type="Reset" name="ee" size="4" class="rc-button-submit" value="Reset"></td>
</tr>
</table>
</form>
</center>
</body>
</center>
</html>


