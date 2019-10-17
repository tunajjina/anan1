<?php
session_start();

$id=$_POST['a1'];
$name=$_POST['a2'];
$cs=$_POST['a3'];

if($cs!='')
{
try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.id='$id'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
      // header('location:institute.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
}
}
else
{
   // include'update1.php';
}

  ?>
  <html>
<center>
<head><h4 class="suck">Update collage details</h4>
<p><?php
//session_start();
//$type = $_POST['ee1'];
?>
<html>
<head>
<h2 class="ad">
<?php
echo"Welcome Admin!!!";
?>
</p>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<form name="f1" action="update1.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Id:</p>
</td>
<td>
<input type="text" name="a1" value="<?php echo$id;?>" >
</td>
</tr>
<tr>
<td>
<p class="mn">Collage_name:</p>
</td>
<td>
<input type="text" name="a2" value="<? echo$name;?>">
</td>
</tr>
<tr>
<td>
<p class="mn">ITdeptseat:</p>
</td>
<td>
<input type="text" name="a3" value="" >
</td>
</tr>
<tr><td></td><td><input type="submit" size="2" value="NEXT" class="rc-button-red"></td></tr>
</table>
</form>
</html>
