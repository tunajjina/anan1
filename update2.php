<?php
session_start();
$id=$_POST['a1'];
$name=$_POST['a2'];
$ee=$_POST['a3'];

if($ee !='')
{
try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.id='$id'");

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
   // include'update3.php';
}

?>

 <html>
<head>
<h2 class="ad">
<center>
<?php
echo"Welcome Admin!!!";
?>
</center>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<center>
<form name="f1" action="update3.php"  method="POST" >
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
<p class="mn">ECEdeptseat:</p>
</td>
<td>
<input type="text" name="a3" value="" >
</td>
</tr>
<tr><td></td><td><input type="submit" size="2" value="NEXT" class="rc-button-red"></td></tr>
</table>
</form>
</center>
</html>
