<?php
session_start();
$user1=$_POST['f11'];
$user2=$_POST['f12'];
$user3=$_POST['f13'];
$user4=$_POST['f14'];
//$user=$_POST['f05'];
if($user1=="")
{
require'try1.php';
}
elseif($user2=="")
{
    require'try1.php';
}
elseif($user3=="")
{
    require'try1.php';
}
elseif($user4=="")
{
     include'try2.php';?>
    
   <html><head></head></html>
<?php
}
else
{
    session_start();

$rollno=$_POST['f01'];
$rank=$_POST['f02'];
$hs=$_POST['f03'];
$hsy=$_POST['f04'];
$f1collage=$_POST['f05'];
$f1s1=$_POST['f06'];
$f1s2=$_POST['f07'];
$f2collage=$_POST['f08'];
$f2s1=$_POST['f09'];
$f2s2=$_POST['f10'];
$f3collage=$_POST['f11'];
$f3s1=$_POST['f12'];
$f3s2=$_POST['f13'];
$password=$_POST['f14'];

//$_SESSION['role']=$role;


try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into student values('$rollno','$rank','$hs','$hsy','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2','$password')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       // header('location:H.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student,student1 where student.password=student1.password");
            $stm->execute();
            $result1=$stm->fetchAll();
             foreach($result1 as $row)
                  {
                  $name1=$row['name'];
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
                   $img=$row['img'];
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
    $stm=$dbh->prepare("insert into student2 values('$name1','$rollno','$rank','$gurdaintname','$address','$dob','$sex','$catagore','$age','$email','$cno','$state','$hs','$hsy','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2','$password','$img')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       $_SESSION['name']=$name1;
        header('location:H1.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
?>
