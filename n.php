<?php
session_start();
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
$count=1;
for($co=1; $co<=1060; $co++)
{
               // creating conection with non-genarel table for data
           $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from ngen where ngen.rank='$co'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {
                $a=$row['f1collage'];
                $a1=$row['f1s1'];
                $a2=$row['f1s2'];
                $a3=$row['f2collage'];
                $a4=$row['f2s1'];
                $a5=$row['f2s2'];
                $a6=$row['f3collage'];
                $a7=$row['f3s1'];
                $a8=$row['f3s2'];
                $roll=$row['rollno'];
                // geting data about first rank and it choices and check for seats in collage
                // first choce collage data retrived and that collage no of seat in depatments
                 $stm=$sql->prepare("select * from collage where collage.name='$a'");
                 $stm->execute();
                  $result2=$stm->fetchAll();
                   foreach($result2 as $row)
            {
                 $m1=$cs1=$row['cs'];
                 $s1=$m1*40/100;
                 $m2=$it1=$row['it'];
                 $s2=$m2*40/100;
                 $m3=$ee1=$row['ee'];
                 $s3=$m3*40/100;
                 $m4=$ece1=$row['ece'];
                 $s4=$m4*40/100;
                 $m5=$me1=$row['me'];
                 $s5=$m5*40/100;
                 $s0=$row['id'];

                  $stm=$sql->prepare("select * from collage where collage.name='$a3'");
                 $stm->execute();
                  $result2=$stm->fetchAll();
                   foreach($result2 as $row)
            {
                 $m11=$cs2=$row['cs'];
                 $s11=$m11*40/100;
                 $m22=$it2=$row['it'];
                 $s22=$m22*40/100;
                 $m33=$ee2=$row['ee'];
                 $s33=$m33*40/100;
                 $m44=$ece2=$row['ece'];
                 $s44=$m44*40/100;
                 $m55=$me2=$row['me'];
                 $s55=$m55*40/100;
                 $s00=$row['id'];

                 $stm=$sql->prepare("select * from collage where collage.name='$a6'");
                 $stm->execute();
                  $result2=$stm->fetchAll();
                   foreach($result2 as $row)
            {
                 $m111=$cs3=$row['cs'];
                 $s111=$m111*40/100;
                 $m222=$it3=$row['it'];
                 $s222=$m222*40/100;
                 $m333=$ee3=$row['ee'];
                 $s333=$m333*40/100;
                 $m444=$ece3=$row['ece'];
                 $s444=$m444*40/100;
                 $m555=$me3=$row['me'];
                 $s555=$m555*40/100;
                 $s000=$row['id'];
      //this process for selecting first chocie of collage and  first stream under the collage selected

              if($a1=='CSE' && $count<=$s1)
{
                      $cs=$cs1-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a1;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();


  }
  catch(Exception $e){
      print "Error !".$e->getMessage();

  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a1=='IT' && $count<=$s2)
     {
         $it=$it1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a1;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a1=='EE' && $count<=$s3)
            {
                 $ee=$ee1-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a1;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a1=='ECE' && $count<=$s4)
            {
                 $ece=$ece1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a1;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a1=='ME' && $count<=$s5)
            {
                 $me=$me1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a1;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($a2=='CSE' && $count<=$s1)
{
                      $cs=$cs1-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a2;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a2=='IT' && $count<=$s2)
     {
         $it=$it1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a2;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a2=='EE' && $count<=$s3)
            {
                 $ee=$ee1-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a2;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a2=='ECE' && $count<=$s4)
            {
                 $ece=$ece1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a2;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a2=='ME' && $count<=$s5)
            {
                 $me=$me1-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a;
                 $subject=$a2;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($a4=='CSE' && $count<=$s11)
{
                      $cs=$cs2-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a3'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a4;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a4=='IT' && $count<=$s22)
     {
         $it=$it2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a3'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a4=='EE' && $count<=$s33)
            {
                 $ee=$ee2-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a3'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a4=='ECE' && $count<=$s44)
            {
                 $ece=$ece2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a3'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a4=='ME' && $count<=$s55)
            {
                 $me=$me2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a3'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a4;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($a5=='CSE' && $count<=$s11)
{
                      $cs=$cs2-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a3'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a5;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a5=='IT' && $count<=$s22)
     {
         $it=$it2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a3'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a5;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a5=='EE' && $count<=$s33)
            {
                 $ee=$ee2-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a3'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a5;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a5=='ECE' && $count<=$s44)
            {
                 $ece=$ece2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a3'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a5;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a5=='ME' && $count<=$s55)
            {
                 $me=$me2-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a3'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a3;
                 $subject=$a5;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($a7=='CSE' && $count<=$s111)
{
                      $cs=$cs3-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a6'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a7;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a7=='IT' && $count<=$s222)
     {
         $it=$it3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a6'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a7;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a7=='EE' && $count<=$s333)
            {
                 $ee=$ee3-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a6'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a7;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a7=='ECE' && $count<=$s444)
            {
                 $ece=$ece3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a6'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a7;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a7=='ME' && $count<=$s555)
            {
                 $me=$me3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a6'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a7;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
elseif($a8=='CSE' && $count<=$s111)
{
                      $cs=$cs3-$count;
 try{

     $stm=$sql->prepare("update collage set collage.cs='$cs' where collage.name='$a6'");
     $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  $stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();

            foreach($result1 as $row)
            {    $name1=$row['name'];
                 $rollno1=$row['rollno'];
                 $rank1=$row['rank'];
                 $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                 $email1=$row['email'];
                 $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                  $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a8;
                 try{
    //  inserting total data requierd into final table for result
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{


    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
    } // end of the first process(1.st coll and 1.st subject'cse')
  elseif($a8=='IT' && $count<=$s222)
     {
         $it=$it3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.it='$it' where collage.name='$a6'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a8;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
// THIS IS THE END OF THE PROCESS 2 1.COLLG 1.SUB'IT'
elseif($a8=='EE' && $count<=$s333)
            {
                 $ee=$ee3-$count;
               try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$sql->prepare("update collage set collage.ee='$ee' where collage.name='$a6'");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a8;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THIRD PROCESS F1COLLG 1.SUB'EE'
elseif($a8=='ECE' && $count<=$s444)
            {
                 $ece=$ece3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.ece='$ece' where collage.name='$a6'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a8;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
    $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{

    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
} //END OF THE FOURTH PROCESS 1.COLL1.SUB'ECE'
elseif($a8=='ME' && $count<=$s555)
            {
                 $me=$me3-$count;
               try{
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.name='$a6'");
    $rset=$stm->execute();

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
$stm=$sql->prepare("select * from student2 where student2.rollno='$roll'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {   $name1=$row['name'];
                $rollno1=$row['rollno'];
                $rank1=$row['rank'];
                $address1=$row['address'];
                 $dob1=$row['dob'];
                 $sex1=$row['sex'];
                 $catagore1=$row['catagore'];
                 $age1=$row['age'];
                $email1=$row['email'];
                $cno1=$row['cno'];
                 $state1=$row['state'];
                 $hs1=$row['hs'];
                 $hsy1=$row['hsy'];
                  $img1=$row['img'];
             }
                 $collage=$a6;
                 $subject=$a8;
                 try{
    $dbh=new PDO("mysql:host=localhost;dbname=test","root","");
    $stm=$dbh->prepare("insert into final values('$name1','$rollno1','$rank1','$address1','$dob1','$sex1','$catagore1','$age1','$email1','$cno1','$state1','$hs1','$hsy1','$collage','$subject','$img1')");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
  try{
    $stm=$sql->prepare("delete from ngen where ngen.rank='$co'");
     $rset=$stm->execute();
  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
  }
}
else
{
    header('location:H.php');
}




} //for first for each
}//for secend for each
}// FOR THIRD FOR EACH
}// FOR FOURTH FOR EACH

  header('location:allot11.php');
}// for for loop
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
$_SESSION['process']=$total_time;

