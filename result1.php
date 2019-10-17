
<?php
session_start();
include'header.php';?>
<html>
<link rel="stylesheet" href="st10.css">

<?php
$rol=$_POST['s1'];
$ps=$_POST['s2'];
if(!isset($_POST['s1']))
{
    header('location: H.php');
}
else
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from final where final.rollno1='$rol'");
            $stm->execute();
            $result1=$stm->fetchAll();

                  ?>
                  <?php foreach($result1 as $row)
                  {
                     ?>

                 <center> <p class="vw1">CONFARMATION BOUCHER</p></center>
                 <p align="right"><b><a href="logout1.php">logout</a></b></p>

                 <frame><img border="2" src="http://localhost/sss/c/uploaded_files/<?php echo$row['img1'];?>"
                 title="<?php echo $row['name1'];?>"
                  width=100 height=120></frame>
                 <center> <table align= center border=1 class="vw">
        <tr><td><b>NAME</b></td>
        <td><b><?php echo $row['name1']; ?></b></td></tr>
        <tr><td><b>ROLLNO</b></td><td><b><?php echo $row['rollno1']; ?></b></td></tr>
        <tr><td><b>RANK</b></td><td><b><?php echo $row['rank1']; ?></b></td></tr>
        <tr><td><b>ADRESS</b></td><td><b><?php echo $row['address1']; ?></b></td></tr>
        <tr><td><b>D.O.B</b></td><td><b><?php echo $row['dob1']; ?></b></td></tr>
        <tr><td><b>SEX</b></td><td><b><?php echo $row['sex1']; ?></b></td></tr>
        <tr><td><b>CATEGORI</b></td><td><b><?php echo $row['catagore1']; ?></b></td></tr>
        <tr><td><b>AGE</b></td><td><b><?php echo $row['age1']; ?></b></td></tr>
        <tr><td><b>EMAILID</b></td><td><b><?php echo $row['email1']; ?></b></td></tr>
        <tr><td><b>CONTACTNO</b></td><td><b><?php echo $row['cno1']; ?></b></td></tr>
        <tr><td><b>STATE</b></td><td><b><?php echo $row['state1']; ?></b></td></tr>
        <tr><td><b>H.S%</b></td><td><b><?php echo $row['hs1']; ?></b></td></tr>
        <tr><td><b>YEAROFPASSING</b></td><td><b><?php echo $row['hsy1']; ?></b></td></tr>
        <tr><td><b>COLLAGE NAME</b></td><td><b><?php echo $row['collage'];?></b></td></tr>
        <tr><td><b>STREAM</b></td><td><b><?php echo $row['subject']; ?></b></td></tr>




                  <?php
                  }?>

        </table></center>
          <footer><center><IMG style="CURSOR: hand" title=print
onclick=javascript:window.print() border=0
src="SSC%20-%20Candidate's%20Application%20Details%20(Registration-Id%2051161384394)_files/printicon.gif"
width=30 height=30></center></footer>

         </html>
<?php include'footer.php';?>


