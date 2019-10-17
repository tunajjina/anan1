<?php

$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student,student1 where student.password=student1.password");
            $stm->execute();
            $result1=$stm->fetchAll();
             foreach($result1 as $row)
                  {
                  $name=$row['name'];
                  $rollno=$row['rollno'];
                  $rank=$row['rank'];
                  $gurdaintname=$row['gurdaintname'];
                  $address=$row['address'];
                  $dob=$row['dob'];
                  $sex=$row['sex'];
                  $catagore=$row['catagore'];
                  $age=$row['age'];
                  $email=$row['email'];
                   $cno=$row['cno'];
                   $state=$row['state'];
                   $hs=$row['hs'];
                   $hsy=$row['hsy'];
                   $f1collage=$row['f1collage'];
                   $f1s1=$row['f1s1'];
                   $f1s2=$row['f1s2'];
                   $f2collage=$row['f2collage'];
                   $f2s1=$row['f2s1'];
                   $f2s2=$row['f2s2'];
                   $f3collage=$row['f3collage'];
                   $f3s1=$row['f3s1'];
                   $f3s2=$row['f3s2'];
                   $password=$row['password'];
               }
//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into student2 values('$name','$rollno','$rank','$gurdaintname','$address','$dob','$sex','$catagore','$age','$email','$cno','$state','$hs','$hsy','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2','$password')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:studentlist.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
 ?>

