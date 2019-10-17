<?php
session_start();

$name=$_POST['s1'];
$dob= $_POST["s4"]." ".$_POST["s3"]." ".$_POST["s5"];
$pass=$_POST['s2'];

//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into admin values('$name','$dob','$pass')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:26.inclu.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
