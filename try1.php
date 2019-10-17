
<?php
session_start();
include'header.php';
?>
<?php
$hs = $_POST['f03'];
$hsyear = $_POST['f04'];
$type = $_POST['f01'];
$password = $_POST['f14'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from rank where rank.roll='$type'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            { ?>
            <html>
<head>
       <title>Title here!</title>
      <center> <h3 class="suck">Student Registratio Form</h3></center>
      <SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("refco.php","mywindow","menubar=1,resizable=1,width=450,height=750");
}
</script>

      <script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#33FF33";
}
function setstyle1(z)
{
document.getElementById(z).style.background="white";
}
</script>
</head>
<body>
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="st5.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<form name="f1" action="regf.php"  method="POST" >
<table class="reg">
<tr>
<td class="reg1">
<p>Rollno:</p>
</td>
<td><input type="text" name="f01" id="roll" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo $row['roll']; ?>" placeholder="Roll no required" required>
</td>
<td class="reg1"><p>Rank:</p>
</td>
<td><input type="number" name="f02" value="<?php echo $row['rank']; ?>">
<?php
}?></td>
</tr><tr><td></td><td></td><td></td></tr>
<tr><td class="reg1"><p>H.S%:</p></td><td><input type="number" name="f03" id="j111" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$hs;?>"></td>
<td class="reg1"><p>Year of passing</p></td><td>
<select name="f04"  id="year" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="<?php echo $hsyear;?>"><?php echo $hsyear;?></option>
<option select>
<?php for($y=1980;$y<=2014;$y++)
{ ?>

 <option value="<?php echo$y;?>">
 <?php echo$y;?> </option>
 <?php
}
?>
</select>
</td></tr>
<tr><td class="reg1"><p width="60px" font-style="bold">Choice filling</p></td></tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="t"><b>AvilableSheats</b><td>
<a href="javascript: openwindow()" ><img src="image/chat.jpg" width="25" height="24" align="absmiddle"/>click</a></td>
</td>
</td>
</tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="search"><p>EnterCollageID:</p>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px" class="serach"><input type="text" name="se1" id="j112" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value=""></td>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td width="300px">
<input type="submit" value="SEARCH">
</td>
</tr></table>

<table  class="searche"><?php
$type = $_POST['se1'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from collage where collage.id='$type'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row)
            { ?>
           <tr> <td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>ID</b></td><td class="search"><b><?php echo $row['id']; ?></b></td></tr>
        <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search" ><b>COLLAGE NAME</b></td><td class="search"><b><?php echo $row['name']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(cs)</b></td><td class="search"><b><?php echo $row['cs']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(it)</b></td><td class="search"><b><?php echo $row['it']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(ee)</b></td><td class="search"><b><?php echo $row['ee']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td></td><td class="search"><b>NOofSEAT(ece)</b></td><td class="search"><b><?php echo $row['ece']; ?></b></td></tr>
         <tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td><td class="search"><b>NOofSEAT(me)</b></td><td class="search"><?php echo $row['me']; ?></td></tr>
 <?php }
                  ?> </tr></table>

<table class="reg">
<tr><td class="reg1"><p width="30px" font-style="bold">1.First choice</p></td><td></td>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f05" id="first" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option >
<?php $b2=array('JAILPAIGURI GOVERMENT ENGINEERING COLLEGE',
'KALYANI GOVERMENT ENGINEERING COLLAGE',
'HALDIA INSTITUE OF TECHNOLOGY',
'INSTITUE OF ENGINEERING MANAGEMENT',
'BANKURA UNNAYNI INSTITUE OF ENGINEERING',
'MURSHIDABAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ASANSOL ENGINEERING COLLAGE',
'NETAJI SUBHAS ENGINEERING COLLEGE',
'GOVT.COLLEGE OF ENGG &TEXTILE TECHNOLOGY,SERAMPOER',
'GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,BERHAMPOER',
'ASANSOL ENGINEERING COLLAGE',
'GOVERNMENT COLLEGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'GOVERNMENT COLLEGE OF ENGINEERING & CERAMIC TECHNOLOGY',
'ST.THOMAS COLLEGE OF ENGINEERING',
'B.P. PODDAR INSTITUTE OF MANAGEMENT &TECHNOLOGY',
'MCKV INSTITUTE OF ENGINEERING',
'RCC INSTITUTE OF INFORMATION TECHNOLOGY',
'BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY',
'SILIGURI INSTITUTE OF TECHNOLOGY',
'DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR',
'BENGAL INSTITUE OF TECHNOLOGY');



foreach($b2 as $d2)
{ ?>
   <option value="<?php echo$d2;?>">
   <?php echo $d2;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f06" id="stream1" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b1=array('CSE','IT','ME','EE','ECE');

foreach($b1 as $d1)
{ ?>
   <option value="<?php echo$d1;?>">
   <?php echo $d1;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f07" id="stream2" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b11=array('CSE','IT','ME','EE','ECE');

foreach($b11 as $d11)
{ ?>
   <option value="<?php echo$d11;?>">
   <?php echo $d11;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <tr>
 <td class="reg1"><p width="30px" font-style="bold">2.Second choice</p></td></tr>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f08" id="second" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option>
<?php $b22=array('JAILPAIGURI GOVERMENT ENGINEERING COLLEGE',
'KALYANI GOVERMENT ENGINEERING COLLAGE',
'HALDIA INSTITUE OF TECHNOLOGY',
'INSTITUE OF ENGINEERING MANAGEMENT',
'BANKURA UNNAYNI INSTITUE OF ENGINEERING',
'MURSHIDABAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ASANSOL ENGINEERING COLLAGE',
'NETAJI SUBHAS ENGINEERING COLLEGE',
'GOVT.COLLEGE OF ENGG &TEXTILE TECHNOLOGY,SERAMPOER',
'GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,BERHAMPOER',
'ASANSOL ENGINEERING COLLAGE',
'GOVERNMENT COLLEGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'GOVERNMENT COLLEGE OF ENGINEERING & CERAMIC TECHNOLOGY',
'ST.THOMAS COLLEGE OF ENGINEERING',
'B.P. PODDAR INSTITUTE OF MANAGEMENT &TECHNOLOGY',
'MCKV INSTITUTE OF ENGINEERING',
'RCC INSTITUTE OF INFORMATION TECHNOLOGY',
'BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY',
'SILIGURI INSTITUTE OF TECHNOLOGY',
'DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR',
'BENGAL INSTITUE OF TECHNOLOGY');



foreach($b22 as $d22)
{ ?>
   <option value="<?php echo$d22;?>">
   <?php echo $d22;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f09" id="stream3" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b13=array('CSE','IT','ME','EE','ECE');

foreach($b13 as $d13)
{ ?>
   <option value="<?php echo$d13;?>">
   <?php echo $d13;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f10" id="stream4" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b14=array('CSE','IT','ME','EE','ECE');

foreach($b14 as $d14)
{ ?>
   <option value="<?php echo$d14;?>">
   <?php echo $d14;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <tr>
 <tr><td class="reg1"><p width="30px" font-style="bold">3.Third choice</p></td></tr>
<tr><td class="reg1"><p>Collage name:</p></td>
<td>
<select name="f11" id="third" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT</option>
<option >
<?php $b25=array('JAILPAIGURI GOVERMENT ENGINEERING COLLEGE',
'KALYANI GOVERMENT ENGINEERING COLLAGE',
'HALDIA INSTITUE OF TECHNOLOGY',
'INSTITUE OF ENGINEERING MANAGEMENT',
'BANKURA UNNAYNI INSTITUE OF ENGINEERING',
'MURSHIDABAD COLLEGE OF ENGINEERING&TECHNOLOGY',
'COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT',
'ASANSOL ENGINEERING COLLAGE',
'NETAJI SUBHAS ENGINEERING COLLEGE',
'GOVT.COLLEGE OF ENGG &TEXTILE TECHNOLOGY,SERAMPOER',
'GOVT.COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY,BERHAMPOER',
'ASANSOL ENGINEERING COLLAGE',
'GOVERNMENT COLLEGE OF ENGINEERING AND LEATHER TECHNOLOGY',
'GOVERNMENT COLLEGE OF ENGINEERING & CERAMIC TECHNOLOGY',
'ST.THOMAS COLLEGE OF ENGINEERING',
'B.P. PODDAR INSTITUTE OF MANAGEMENT &TECHNOLOGY',
'MCKV INSTITUTE OF ENGINEERING',
'RCC INSTITUTE OF INFORMATION TECHNOLOGY',
'BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY',
'SILIGURI INSTITUTE OF TECHNOLOGY',
'DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR',
'BENGAL INSTITUE OF TECHNOLOGY');


foreach($b25 as $d25)
{ ?>
   <option value="<?php echo$d25;?>">
   <?php echo $d25;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr><tr><td class="reg1"><p>stream1:</p></td><td>
 <select name="f12" id="stream5" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b18=array('CSE','IT','ME','EE','ECE');

foreach($b18 as $d18)
{ ?>
   <option value="<?php echo$d18;?>">
   <?php echo $d18;?> </option>
   <?php
}
?>
</select>
 </td><td class="reg1"><p>stream2:</p></td>
<td>
<select name="f13" id="stream6" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)">
<option value="">stream</option>
<option >
<?php $b19=array('CSE','IT','ME','EE','ECE');

foreach($b19 as $d19)
{ ?>
   <option value="<?php echo$d19;?>">
   <?php echo $d19;?> </option>
   <?php
}
?>
</select>
 </td>
 </tr>
 <?php
 //$pass = $_POST['f10'];
 ?>
 <tr><td class="reg1"><p>password:</p></td>
<td><input type="password" name="f14" id="j115" onfocus="setstyle(this.id)" onblur="setstyle1(this.id)" value="<?php echo$password;?>"></td></tr>
 <tr><td><input type="submit" name="ee" size="4" class="rc-button-submit"  value="Submit">
</td>
<td><input type="reset" name="ee" size="4"class="rc-button-red"  value="Reset">
</td></tr>
</table>
</form>
</body>
</html>
<?php
 $_SESSION['password'] = array();
include'footer.php'
?>

