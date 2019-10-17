
<html>
<head>
       <title>Title here!</title>
        <script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#F30";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
</script>
</head>
<body>
<link rel="stylesheet" href="st2.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">

<form name="f1" action="admincontrol.php"  method="POST" onSubmit="return validate()">
<center>
<table class="admin" border="2">
<tr>
<td>
<p class="admin1">Admin_id:</p>
</td>
<td ><input type="text" name="ee1" id="adminid" value=""  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" placeholder=" Admin id" required>
</td>
</tr>
<tr>
<td>
<p class="admin1">Password:</p>
</td>
<td><input type="password" name="t11" id="adminpass" value=""  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)"placeholder="Admin password "required>
</td>
</tr>
<tr>
<td><input type="submit" class="rc-button-red" value="Submit">
</td>
<td><input type="reset" class="rc-button-red" value="Reset">
</td>
</tr>
<script language="javascript">
function validate()
{

	var id,pass,pass1;
	id=document.f1.ee1.value;
        pass=document.f1.t11.value;


	if(id=='admin' && pass=='123')
	{

		return true;
	}
    else if(id=='rahul' && pass=='rahul123')
	{

		return true;
	}
   else if(id=='saikat' && pass=='saikat123')
	{

		return true;
	}

	else
	alert("please check the Id/password");
		return false;


}
</script>

</table>
</center>
</form>
</body>
</html>
