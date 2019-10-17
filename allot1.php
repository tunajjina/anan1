
<html>
<link rel="stylesheet" href="st7.css">
<?php
$color = $_POST['txtColor'];
for ($color=1000; $color<=1060; $color++)
{
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$color'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
                  {
                       $check=$row['catagore'];
                       if($check=='Gen')
                       {
                           $name=$row['name'];
                           $rollno=$row['rollno'];
                           $rank=$row['rank'];

                             $f1collage=$row['f1collage'];
                              $f1s1=$row['f1s1'];
                               $f1s2=$row['f1s2'];
                                $f2collage=$row['f2collage'];
                                $f2s1=$row['f2s1'];
                                $f2s2=$row['f2s2'];
                                $f3collage=$row['f3collage'];
                                 $f3s1=$row['f3s1'];
                                  $f3s2=$row['f3s2'];

                                   try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into gen values('$name','$rollno','$rank','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       header('location:allo.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
 elseif($check=='Sc')
                       {
                           $name=$row['name'];
                           $rollno=$row['rollno'];
                           $rank=$row['rank'];

                             $f1collage=$row['f1collage'];
                              $f1s1=$row['f1s1'];
                               $f1s2=$row['f1s2'];
                                $f2collage=$row['f2collage'];
                                $f2s1=$row['f2s1'];
                                $f2s2=$row['f2s2'];
                                $f3collage=$row['f3collage'];
                                 $f3s1=$row['f3s1'];
                                  $f3s2=$row['f3s2'];

                                   try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into ngen values('$name','$rollno','$rank','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       header('location:allo.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
 elseif($check=='St')
                       {
                           $name=$row['name'];
                           $rollno=$row['rollno'];
                           $rank=$row['rank'];

                             $f1collage=$row['f1collage'];
                              $f1s1=$row['f1s1'];
                               $f1s2=$row['f1s2'];
                                $f2collage=$row['f2collage'];
                                $f2s1=$row['f2s1'];
                                $f2s2=$row['f2s2'];
                                $f3collage=$row['f3collage'];
                                 $f3s1=$row['f3s1'];
                                  $f3s2=$row['f3s2'];

                                   try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into ngen values('$name','$rollno','$rank','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       header('location:allo.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
 elseif($check=='OBC')
                       {
                           $name=$row['name'];
                           $rollno=$row['rollno'];
                           $rank=$row['rank'];

                             $f1collage=$row['f1collage'];
                              $f1s1=$row['f1s1'];
                               $f1s2=$row['f1s2'];
                                $f2collage=$row['f2collage'];
                                $f2s1=$row['f2s1'];
                                $f2s2=$row['f2s2'];
                                $f3collage=$row['f3collage'];
                                 $f3s1=$row['f3s1'];
                                  $f3s2=$row['f3s2'];

                                   try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into ngen values('$name','$rollno','$rank','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
       header('location:allo.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
else
{

                            $name=$row['name'];
                           $rollno=$row['rollno'];
                           $rank=$row['rank'];

                             $f1collage=$row['f1collage'];
                              $f1s1=$row['f1s1'];
                               $f1s2=$row['f1s2'];
                                $f2collage=$row['f2collage'];
                                $f2s1=$row['f2s1'];
                                $f2s2=$row['f2s2'];
                                $f3collage=$row['f3collage'];
                                 $f3s1=$row['f3s1'];
                                  $f3s2=$row['f3s2'];
                               }
                                   try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$dbh->prepare("insert into N values('$name','$rollno','$rank','$f1collage','$f1s1','$f1s2','$f2collage','$f2s1','$f2s2','$f3collage','$f3s1','$f3s2')");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:allo.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}}
 ?>
 </html>

