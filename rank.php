<?php
session_start();
$_SESSION['enterrank']='cross.jpg';
if( !isset($_SESSION['key5']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['enterrank']='right.jpg';
?>
 <html>
<center>
<head><h4 class="suck">Insert student Rank</h4>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<p><?php
//session_start();
//$type = $_POST['ee1'];
?>
<SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("rankhelp.php","mywindow","menubar=1,resizable=1,width=730,height=550");
}
</script>
<h2 class="ad">
<?php
echo"Welcome Admin!!!";
?>
</p>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<a href="javascript: openwindow()" ><img src="image/chat.jpg" width="25" height="24" align="absmiddle"/><span  class="span">Help</span></a>
<form name="f1" action="in2.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Roll No:</p>
</td>
<td>
<input type="text" name="a11" value=""  placeholder="enter student roll" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Rank:</p>
</td>
<td>
<input type="text" name="a22" value="" placeholder="enter rank " required>
</td>
</tr>
<tr height="10px">
<td>
<input type="submit" name="ee" size="1" class="rc-button-red"  value="submit" align="absmiddle" >
</td>
<td><input type="reset" value="Reset" size="1" name="ee" class="rc-button-submit" align="absmiddle"></td>
</tr>
</table>
</form>
</body>
</center>
</html>


