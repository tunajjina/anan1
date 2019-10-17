<?php
session_start();

$roll=$_POST['a11'];
$rank=$_POST['a22'];



//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into rank values('$roll','$rank')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:rank.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
