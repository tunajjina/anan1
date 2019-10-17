<?php
include'header.php';
?>
<html>
<head>
       <title>Title here!</title>
      <center> <h3 class="suck">Student Registratio Form</h3></center>
</head>
<body>
<link rel="stylesheet" href="st4.css">
<center><form name="f1" action="reg.php"  method="POST" >
<table class="reg">
<tr>
<td class="reg1">
<p>Name:</p>
</td>
<td><input type="text" name="f1" value="" placeholder="Student name" required>
</td>
</tr>
<tr>
<td class="reg1">
<p>GurdaintName:</p>
</td>
<td><input type="text" name="f2" value="" placeholder="Gurdaint name" required>
</td>
</tr>
<tr>
<td class="reg1"><p>Adress:</p></td>
<td><textarea width="50px" height="50px" name="f3" value="" placeholder="parmanent Adress" required>
</textarea>
</td>
</tr>
<tr>
<td class="reg1"><p>D.O.B:</td>
<td>
<select name="f4">
<option value="">DD</option>
<?php for($i=1;$i<=31;$i++)
{?>
   <option value="<?php echo $i; ?>">
    <?php echo$i;
   ?></option>
   <?php
}
?>
</select>
</td>
<td>
<select name="s4">
<option value="">MM</option>
<option >
<?php $b=array('janu','feb','march','april','may','june','july','august','sep');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
 </td>
<td>
<select name="s5">
<option value="">YYYY</option>
<option select>
<?php for($y=1980;$y<=2014;$y++)
{ ?>

 <option value="<?php echo$y;?>">
 <?php echo$y;?> </option>
 <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1"><p>Sex:</p></td>
<td><select name="dropdowlist">
<option >
<?php $b=array('male','female');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1">
<p>Catagore:</p>
</td>
<td>
<select name="f5">
<option value="">MM</option>
<option >
<?php $e=array('Gen','Sc','St','OBC');

foreach($e as $z)
{ ?>
   <option value="<?php echo$z;?>">
   <?php echo $z;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1"><p>Age:</p></td>
<td>
<select name="f6">
<option value="">00</option>
<?php for($i=18;$i<=31;$i++)
{?>
   <option value="<?php echo $i; ?>">
    <?php echo$i;
   ?></option>
   <?php
}
?>
</select>
</td>
</tr>
<tr><td class="reg1"><p>emailid:</p></td>
<td><input type="text" name="f7" value="" placeholder=" email id" required></td></tr>
<tr><td class="reg1"><p>ContactNo:</p></td>
<td><input type="text" name="f8" value="" placeholder=" contact no" required></td></tr>
<tr><td class="reg1"><p>State:</p></td>
<td>
<select name="f9">
<option value="">MM</option>
<option >
<?php $o=array('Gen','Sc','St','OBC');

foreach($o as $z1)
{ ?>
   <option value="<?php echo$z1;?>">
   <?php echo $z1;?> </option>
   <?php
}
?>
</select></td></tr>
<tr><td class="reg1"><p>password:</p></td>
<td><input type="password" name="f10" value="" placeholder="pleace give password(10digit)" required></td></tr>
<tr><td><input type="submit" name="ee" size="4"  value="submit">
</td>
<td><input type="reset" name="ee" size="4"  value="reset">
</td></tr>
</table>
</form>
</center>
</body>
</html>
<?php include'footer.php'
?>
