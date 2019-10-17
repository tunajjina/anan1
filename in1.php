<?php
session_start();

$id=$_POST['a1'];
$name=$_POST['a2'];
$cs=$_POST['a3'];
$it=$_POST['a4'];
$ee=$_POST['a5'];
$ece=$_POST['a6'];
$me=$_POST['a7'];


//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into collage values('$id','$name','$cs','$it','$ee','$ece','$me')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:institue.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
