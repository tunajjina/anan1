<?php
session_start();
$session=session_id();
include('system.php');
//$timezone = new DateTimeZone("Asia/Kolkata" );
//$date = new DateTime();
//$date->setTimezone($timezone );
//=$_SESSION['loguttime']= $date->format( 'H:i:s A ');
$logouttime=$_SESSION['time'];
$sessionid=$_SESSION['id']=$session;
$date=date("d/m/y");
$studenlist=$_SESSION['studentlist'];
$reportingcenters=$_SESSION['reportingcenters'];
$Addinstituename=$_SESSION['addinstituename'];
$updateavailabelsheat=$_SESSION['updateavailabelsheat'];
$Allocatesheat=$_SESSION['allocatesheat'];
$enterrank=$_SESSION['enterrank'];
$seatstatues=$_SESSION['seatstatues'];
$adminid=$_SESSION['adminid'];
try{
    $dbh=new PDO("mysql:host=localhost;dbname=c","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("INSERT INTO `systemlog`(`adminid`) values('1') ");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:user_reg.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
session_destroy();
$_SESSION['key4']=array();      //allotment key
$_SESSION['key5']=array();      // add rollno  key
$_SESSION['key6']=array();      // collage seat report key
$_SESSION['report']=array();
$_SESSION['key']=array();     //studentlist key
$_SESSION['key1']=array();    //reporting center key
$_SESSION['key2']=array();
$_SESSION['key3']=array();   //institute key
$_SESSION['loguttime']=array();
//$logintime=$_SESSION['time']= $date->format( 'H:i:s A ');;
$_SESSION['id']=array();
$_SESSION['studentlist']=array();
$_SESSION['reportingcenters']=array();
$_SESSION['addinstituename']=array();
$_SESSION['updateavailabelsheat']=array();
$_SESSION['allocatesheat']=array();
$_SESSION['enterrank']=array();
$_SESSION['seatstatues']=array();
$_SESSION['adminid']=array();
header('location:home.php');
?>
