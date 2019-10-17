<?php
 include'header.php';?>
 <html>
 <head>
 <script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#33FF33";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
</script>
</head>
<body>
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<center>
<form name="f00001" action="result1.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Rollno:</p>
</td>
<td>
<input type="text" id="rq" name="s1" value="" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)"  placeholder="enter user Roll no" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Password:</p>
</td>
<td>
<input type="password" id="pq" name="s2" value="" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" placeholder="enter user password" required>
</td>
</tr>
<tr height="10px">
<td>
<input type="submit" name="ee" size="1" class="rc-button-submit"  value="Submit">
</td>
<td align="center">
<input type="reset" name="ee" size="1" class="rc-button-submit"  value="Refresh">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
<?php include 'footer.php' ?>

