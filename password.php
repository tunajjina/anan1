<?php session_start();
?>
<html>
<head>
<link rel="stylesheet" href="jquery-ui.css">
<link href="jquery-ui.css" rel="stylesheet">
	<script src="jquery.min.js"></script>
	<script src="jquery-ui.min.js"></script>
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
<script>
$(document).ready(function(){
    $(function() {


          $('#datepicker').datepicker({


 dateFormat: 'dd-mm-yy'

});
    });
});
</script>
 <script language="javascript">
function validate()
{

	var e,e1,capache1;
         capache1=document.login.capache.value;
        e=document.getElementById('alternativemail')
	e1=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	 if(!e1.test(e.value))
	{
		alert("Please provide a valid email address");
		return false;
	}
  else if(capache1 !== '<?php echo$capache;?>' || capache1=='')
	{
		alert("please check the image enter correctly");
		return false;
	}
else
return true;
}
</script>
</head>
<?php
$now = time();
define('CAPACHE','J');
if($_SERVER['REQUEST_METHOD']=='GET')
{
   $output=$now++;
    $capache=CAPACHE.$output;
?>

<body bgcolor="#99CC33">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center><form name="login" action="password.php"  method="POST" onSubmit="return validate()">
<table width="400" height="200" bgcolor="#f8f8ff">
        <tr><td align="center"><input type="text" name="phonenumber" id="phonenumber"size="30"onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value=""placeholder="ENTER YOUR NAME"required></td>
        </tr>
        <tr><td align="center"><input type="text" id="datepicker" name="f4" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" size="30" placeholder="ENTER YOUR D.O.B"required></td></tr>
        <tr><td align="center"><input type="text" name="alternativeemail" id="alternativemail" size="40" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)"value=""placeholder="ENTER YOUR ALTER NATIVE MAIL ID"required></td></tr>
 <tr><td align="center" bgcolor="#00ffff"><input class="rc-button-red" type="submit" value="Submit" size="150">
         <input class="rc-button-submit" type="reset" value="Reset" size="150">
         </td>
         </tr><input type="hidden" name="capache1" value="<?php echo$capache;?>">
         </center>
         </table>
         </form>
         <?php
         }
else
{
    $a3=$_POST['phonenumber'];
    $a2=$_POST['f4'];
    $a1=$_POST['alternativeemail'];

    include'database.php';
    $rs=mysql_query("select * from student2 where email='$a1'");
    if ( mysql_num_rows($rs)>0)
    {       //echo$a2=$_POST['f4'];
            $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from student2 where name='$a3'and dob='$a2'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {?>
            <body bgcolor="#99CC33">
            <link rel="stylesheet" href="button.css">
            <link rel="stylesheet" href="gmail.css">
                <center><table width="400" height="200" bgcolor="#f8f8ff"><tr><td><p>Name</p></td><td><input type="text" value="<?php echo $row['name'];?>"></td></tr>
               <tr><td><p>D.O.B</p></td><td><input type="text" value="<?php echo $row['dob'];?>"></td></tr>
                <tr><td><p>Email</p></td><td><input type="text" value="<?php echo $row['email'];?>"></td></tr>
                <tr><td><p>Password</p></td><td><input type="text"value="<?php echo $row['password']; }?>"></td></tr>
                </table>
                </center>
                </body>

   <?php }
    else
    { ?>
             <body bgcolor="#99CC33">
            <link rel="stylesheet" href="button.css">
            <link rel="stylesheet" href="gmail.css">
             <center><h3 style="size:30;"><?php echo"<span class='forgot1' align=center>YOUR PROFILE DOES NOT EXIST</span>";?></h3></center>

<?php
}
}
?>
         </body>
         </html>
