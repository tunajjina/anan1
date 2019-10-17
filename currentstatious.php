<?php
session_start();
$_SESSION['seatstatues']='cross.jpg';
if( !isset($_SESSION['key6']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['seatstatues']='right.jpg';
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Title here!</title>
       <h2 class="ad">
<CENTER><?php
echo"Welcome Admin!!!";
?></CENTER>
      <center><h1 size="50px" font-style="bold" color="red">AVAILABLE SEAT STATIOUS</h1></center>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
         <?php
            $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from collage");
            $stm->execute();
            $result1=$stm->fetchAll();
         ?>
         <table align= center border=1>
        <tr><td><b>ID</b></td><td><b>NAME</b></td> <td><b>CS</b></td><td><b>IT</b></td><td><b>EE</b></td><td><b>ECE</b></td><td><b>ME</b></td>
        </tr>
        <tr><?php foreach($result1 as $row)
                  { ?>
                  <td><b><?php echo $row['id']; ?></b></td>
                  <td><b><?php echo $row['name']; ?></b></td>
                  <td><b><?php echo $row['cs']; ?></b></td>
                  <td><b><?php echo $row['it']; ?></b></td>
                   <td><b><?php echo $row['ee']; ?></b></td>
                   <td><b><?php echo $row['ece']; ?></b></td>
                  <td><b><?php echo $row['me']; ?></b></td>

                    </tr>
                  <?php } ?>

       </table>
</body>
<footer>
<P align=center><IMG style="CURSOR: hand" title=print
onclick=javascript:window.print() border=0
src="SSC%20-%20Candidate's%20Application%20Details%20(Registration-Id%2051161384394)_files/printicon.gif"
width=30 height=30></P>
</footer>
</html>


