<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<?php include'header.php';?>
<html>
<head>
       <title>Title here!</title>
       <link rel="stylesheet" href="button.css">
       <link rel="stylesheet" href="gmail.css">
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
<center>
<link rel="stylesheet" href="st9.css">
<form method="post" action="collage.php">

<p class="t">College Name</p>
<input type="text" name="collage" id="collage"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" size="60" maxlength="64">
<input type="submit"  class="rc-button-red" value="Search">
</form>
</body>
</html>
<?php include'footer.php';?>
