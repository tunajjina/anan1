<?php
session_start();
include'header.php';
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'reg1.php';

// set a max file size for the html upload form
$max_file_size = 50000; // size in bytes

// now echo the html page
?>
<html>
<head>
       <title>Title here!</title>

<link rel="stylesheet" href="jquery-ui.css">
<link href="jquery-ui.css" rel="stylesheet">
	<script src="jquery.min.js"></script>
	<script src="jquery-ui.min.js"></script>

<script>
$(document).ready(function(){
    $(function() {


          $('#datepicker').datepicker({


 dateFormat: 'dd-mm-yy'

});
    });
});
</script>
</head>
<body  behavior="fixed">
<center> <h3 class="suck">Student Registration Form</h3></center>
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<center>
<?php echo"GIVEN PASSWORD ALREADY EXIST PLEASE TRY AGAIN";?>
<form name="p1" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data"  method="POST" onSubmit="return validate1()">
<table class="reg">
<tr>
<td class="reg1">
<p>Name:<span style="color :red;">*</span></p>
</td>
<td><input type="text" name="f1" id="j1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$_SESSION['name'];?>" placeholder="Student name" required>
</td>
</tr>
<tr>
<td class="reg1">
<p>GurdaintName:<span style="color :red;">*</span></p>
</td>
<td><input type="text" name="f2" id="j2" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$_SESSION['gname'];?>" placeholder="Gurdaint name" required><td class="wo"><?php echo"* field are compulseary"?></td>
</td>
</tr>
<tr>
<td class="reg1"><p>Adress:<span style="color :red;">*</span></p></td>
<td><textarea width="50px" height="50px" name="f3" id="j3" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$_SESSION['adress'];?>" placeholder="parmanent Address" required>
</textarea>
</td>
</tr>
<tr>
<td class="reg1"><p>D.O.B:<span style="color :red;">*</span></td>
<td>
<p><input type="text" id="datepicker" name="f4" value="<?php echo$_SESSION['dob'];?>" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)"></p>
</td>
</tr>
<tr>
<td class="reg1"><p>Sex:</p></td>
<td><select name="dropdowlist" id="sex"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="<?php echo$_SESSION['sex'];?>"><?php echo$_SESSION['sex'];?></option>
<option>
<?php $b=array('male','female');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1">
<p>Catagore:<span style="color :red;">*</span></p>
</td>
<td>
<select name="f5" id="catagori"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="<?php echo$_SESSION['catagori'];?>"><?php echo$_SESSION['catagori'];?></option>
<option >
<?php $e=array('Gen','Sc','St','OBC');

foreach($e as $z)
{ ?>
   <option value="<?php echo$z;?>">
   <?php echo $z;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1"><p>Age:<span style="color :red;">*</span></p></td>
<td>
<select name="f6" id="age"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="<?php echo$_SESSION['age'];?>"><?php echo$_SESSION['age'];?></option>
<?php for($i=18;$i<=31;$i++)
{?>
   <option value="<?php echo $i; ?>">
    <?php echo$i;
   ?></option>
   <?php
}
?>
</select>
</td>
</tr>
<tr><td class="reg1"><p>uploadimage:<span style="color :red;">*</span></p></td>
<td><input  type="file" name="file" id="j8" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" placeholder="imag required" required></td><td class="wo"><?php echo"**Image size max 11 K.B"?></td></tr>
<tr><td class="reg1"><p>emailid:<span style="color :red;">*</span></p></td>
<td><input type="text" id="emailid"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" name="f7" value="<?php echo$_SESSION['email'];?>" placeholder=" email id" required></td></tr>
<tr><td class="reg1"><p>ContactNo:<span style="color :red;">*</span></p></td>
<td><input type="number" name="cno1" id="cno1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$_SESSION['cno'];?>" placeholder=" contact no" requireds></td></tr>
<tr><td class="reg1"><p>State:<span style="color :red;">*</span></p></td>
<td>
<select name="f9" id="state"  onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="<?php echo$_SESSION['state'];?>"><?php echo$_SESSION['state'];?></option>
<option >
<?php $o=array('westbengal','bihar','orissa','up');

foreach($o as $z1)
{ ?>
   <option value="<?php echo$z1;?>">
   <?php echo $z1;?> </option>
   <?php
}
?>
</select></td></tr>
<tr><td class="reg1"><p>password:<span style="color :red;">*</span></p></td>
<td><input type="password" name="f10" id="j7" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="" placeholder="pleace give password" required></td></tr>
<tr><td><p>
            <label for="submit"></label></p></td>
            <td><p><input id="submit" class="rc-button-red" type="submit" name="submit" size="4" value="Next">
        </p></td>
        <td><input type="reset" class="rc-button-red" size="4" value="Reset"></td></tr>
<script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#33FF33";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
function validate1()
{

	var e,e1,db,sex,cata,age,name,gname,add,state,cno,ph;
	db=document.getElementById('datepicker');
    sex=document.getElementById('sex');
    cata=document.getElementById('catagori');
    age=document.getElementById('age');
    state=document.getElementById('state');
	e=document.getElementById('emailid')
	e1=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     var letters =/^[0-9a-zA-Z]+$/;
     var nm = /^[A-Za-z]+$/;
     name=document.getElementById('j1');
     gname=document.getElementById('j2');
     add=document.getElementById('j3');
     cno=document.getElementById('cno1');
     ph=/^\d{10}$/;

	if( db=='' || db.value=="")
	{
		alert("DATE OF BIRTH CANNOT BE BLANK....");
         db.focus();
		return false;
	}

    else if(sex=='' || sex.value=="")
	{
		alert("SEX FILD IS BLANK....");
          sex.focus();
		return false;
	}
    else if(cata=='' || cata.value=="")
	{
		alert("PLEASE PROVIDE CATEGORY...");
           cata.focus();
		return false;
	}
    else if(age=='' || age.value=="")
	{
		alert("PLEASE PROVIDE AGE...");
           age.focus();
		return false;
	}
    else if(state=='' || state.value=="")
	{
		alert("PLEASE PROVIDE STATE...");
           state.focus();
		return false;
	}
	else if(!e1.test(e.value))
	{
		alert("Please provide a valid email address");
         e.focus();
		return false;
	}
   else if(!nm.test(name.value))
	{
		alert("Please provide a valid name no Space between names");
         name.focus();
		return false;
	}
   else if(!nm.test(gname.value))
	{
		alert("Please provide a valid name no Space between names");
         gname.focus();
		return false;
	}
    else if(!letters.test(add.value))
	{
		alert("Please provide a valid Address");
         add.focus();
		return false;
	}
      else if(!ph.test(cno.value))
 {
   alert(" Your Mobile Number must be 1 to 10 Integers");
    cno.focus();
    return false;
 }
	else
		return true;


}
</script>
</table>

    </form></center>
   </body>

</html>
<?php
include'footer.php'?>


