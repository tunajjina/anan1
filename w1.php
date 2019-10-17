<?php
session_start();
 include'header.php';?>
<html>
<link rel="stylesheet" href="st7.css">
<?php
$rol=$_POST['s1'];
$ps=$_POST['s2'];
if( !isset($_POST['s1']))
{
    header('location: H.php');
}
else
$sql=new PDO('mysql:host=localhost;dbname=c','root','');
$stm=$sql->prepare("select * from student2 where student2.rollno='$rol' and student2.password='$ps'");
            $stm->execute();
            $result1=$stm->fetchAll();

                  ?>
                  <?php foreach($result1 as $row)
                  { ?>
                 <center> <p class="vw1">TOTAL DETAILS SUBMITIED</p>
                  <table align= center border=1 class="vw">
        <tr><td><b>NAME</b></td>
        <td><b><?php echo $row['name']; ?></b></td></tr>
        <tr><td><b>ROLLNO</b></td><td><b><?php echo $row['rollno']; ?></b></td></tr>
        
        <tr><td><b>ADRESS</b></td><td><b><?php echo $row['address']; ?></b></td></tr>
        
        
        
        <tr><td><b>AGE</b></td><td><b><?php echo $row['age']; ?></b></td></tr>
        <tr><td><b>EMAILID</b></td><td><b><?php echo $row['email']; ?></b></td></tr>
        <tr><td><b>CONTACTNO</b></td><td><b><?php echo $row['cno']; ?></b></td></tr>
        
        
        <tr><td><b>CURRENTSEMESTER</b></td><td><b><?php echo $row['hsy']; ?></b></td></tr>
        <tr><td><b>DEPARTMENT NAME</b></td><td><b><?php echo $row['f1collage'];?></b></td></tr>
        
        <tr><td><b>PASSWORD</b></td><td><b><?php echo $row['password']; ?></b></td></tr>
        <tr><td></td>
        <td>
        <input type="button" value="logout" onclick="document.location='logout.php';"></td></tr>
                  <?php } ?>

        </table></center></html>
<?php include'footer.php'?>


