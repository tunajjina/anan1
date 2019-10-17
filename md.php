<?php
$co = $_POST['gs1'];

           $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from ngen where ngen.rank='$co'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            {

                ?>
 <html>
<head>
       <title></title>
<center><h3><b>SECEND CHOICE FILD BY STUDENT</b></h3></center></head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<form name="pp1" action="g2.php"  method="POST" >
<center><table width="200px" height="50px">
<tr>
<td><p><b>Rank:</b></p>
</td>
<td><input type="number" name="gs1" value="<?php echo $row['rank']; ?>">
</td></tr>
<tr><td><p><b>COLLAGE NAME(2schoice)</b></p></td>
            <td><select name="gs2"><option> <?php echo $row['f2collage']; ?>
           </option></select> </td></tr>
            <tr><td><p><b>stream1</b></p></td>
            <td><input type="text" name="gs3" value="<?php echo $row['f2s1']; ?>">
            </td></tr>
            <tr><td><p><b>stream2</b></p></td>
            <td><input type="text" name="gs4" value="<?php echo $row['f2s2']; ?>">
            </td></tr><tr><td><p><b>CollageID:</b></p></td><td>
            <input type="text" name="gs5" value=""placeholder=" Enter Collage id" required></td></tr>
            <tr>
<td><p><b>Rollno:</b></p>
</td>
<td><input type="number" name="gs6" value="<?php echo $row['rollno']; ?>">
</td></tr>
            <tr><td></td><td><input type="submit" value="GRANT">
            </tr>

<?php
}
?></table></center></body></html>
