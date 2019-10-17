<?php
session_start();

$rollno=$_POST['a1r'];
$name=$_POST['a2r'];
$time=$_POST['a3r'];
$date=$_POST['a4r'];



//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into report values('$rollno','$name','$time','$date')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:reporting.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
