<?php
session_start();
$_SESSION['key3']=$_SESSION['key2']=$_SESSION['key1']=$_SESSION['key'];
$_SESSION['studentlist']='cross.jpg';
if( !isset($_SESSION['key']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['studentlist']='right.jpg';
?>

<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Title here!</title>
      <center><h1 size="50px" font-style="bold" color="red">STUDENT DETAILS</h1></center>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
         <?php
            $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from student,student1 where student.password=student1.password");
            $stm->execute();
            $result1=$stm->fetchAll();
         ?>
         <table align= center border=1>
         <tr><td><b>IMAGE</b></td>
        <td><b>NAME</b></td><td><b>ROLLNO</b></td> <td><b>RANK</b></td><td><b>ADRESS</b></td><td><b>D.O.B</b></td><td><b>SEX</b></td><td><b>CATEGORI</b></td><td><b>AGE</b></td><td><b>EMAILID</b></td><td><b>CONTACTNO</b></td><td><b>STATE</b></td><td><b>H.S%</b></td><td><b>YEAROFPASSING</b></td>
        <td><b>COLLAGE NAME(first choice)</b></td>
        <td><b>STREAM1</b></td>
        <td><b>STREAM2</b></td>
        <td><b>COLLAGE NAME(second choice)</b></td>
        <td><b>Stream1</b></td>
        <td><b>Stream2</b></td>
        <td><b>COLLEGE NAME(third chice)</b></td>
        <td><b>STREAM1</b></td>
        <td><b>STREAM2</b></td>
        <td><b>PASSWOD</b></td></tr>
        <tr><?php foreach($result1 as $row)
                  {  ?>
                  <td><b><IMG border=1 src="http://localhost/sss/c/uploaded_files/<?php echo$row['img'];?>" width=100 height=120></b></td>
                  <td><b><?php echo $row['name']; ?></b></td>
                  <td><b><?php echo $row['rollno']; ?></b></td>
                  <td><b><?php echo $row['rank']; ?></b></td>
                  <td><b><?php echo $row['address']; ?></b></td>
                   <td><b><?php echo $row['dob']; ?></b></td>
                   <td><b><?php echo $row['sex']; ?></b></td>

                  <td><b><?php echo $row['catagore']; ?></b></td>
                  <td><b><?php echo $row['age']; ?></b></td>
                    <td><b><?php echo $row['email']; ?></b></td>
                     <td><b><?php echo $row['cno']; ?></b></td>
                  <td><b><?php echo $row['state']; ?></b></td>
                  <td><b><?php echo $row['hs']; ?></b></td>
                    <td><b><?php echo $row['hsy']; ?></b></td>
                    <td><b><?php echo $row['f1collage']; ?></b></td>
                    <td><b><?php echo $row['f1s1']; ?></b></td>
                    <td><b><?php echo $row['f1s2']; ?></b></td>
                    <td><b><?php echo $row['f2collage']; ?></b></td>
                    <td><b><?php echo $row['f2s1']; ?></b></td>
                    <td><b><?php echo $row['f2s2']; ?></b></td>
                    <td><b><?php echo $row['f3collage']; ?></b></td>
                    <td><b><?php echo $row['f3s1']; ?></b></td>
                    <td><b><?php echo $row['f3s2']; ?></b></td>
                    <td><b><?php echo $row['password']; ?></b></td>
                    </tr>
                  <?php } ?>

       </table>
</body>
</html>


