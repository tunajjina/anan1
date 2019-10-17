<?php
session_start();
$_SESSION['key6']=$_SESSION['key5']=$_SESSION['key4']=$_SESSION['key']=$_POST['ee1'];
if( !isset($_POST['ee1']))
{
    header('location:H.php');
}
include'header1.php';
$_SESSION['studentlist']='cross.jpg';
$_SESSION['reportingcenters']='cross.jpg';
$_SESSION['addinstituename']='cross.jpg';
$_SESSION['updateavailabelsheat']='cross.jpg';
$_SESSION['allocatesheat']='cross.jpg';
$_SESSION['enterrank']='cross.jpg';
$_SESSION['seatstatues']='cross.jpg';
?>
<html>
<body>
<link rel="stylesheet" href="st3.css">
<center>
<table class="adcontrol">
<tr>
<td>
<?php
//
$type='back';
$_SESSION['k']=$type = $_POST['ee1'];
include('system.php');
$_SESSION['adminid']=$_SESSION['k'];
?>

<html>
<head>
 <script language="javascript">
function setstyle(x)
{
document.getElementById(x).style.background="#FF0000";
}
function setstyle1(z)
{
document.getElementById(z).style.background="#357ae8";
}
function setstyle2(i)
{
document.getElementById(i).style.background="#99CC33";
}
function setstyle3(k)
{
document.getElementById(k).style.background="#FFFFcc";
}
</script>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<link rel="stylesheet" href="st3.css">
<h2 class="ad">
<?php
echo"Welcome Admin!!!". $_SESSION['k'];
?>
</h2>
</head>
<body>
<center>
<table class="adcontrol"  border-color="black"  id="table" onMouseover="setstyle2(this.id)" onMouseout="setstyle3(this.id)">
<tr><td class="ad1"><a href="studentlist.php" target="_Blank"><input type="button" id="01" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  value="Student-list" title="All the Information About Registerd Student Click Here"></a></td>
<td class="ad1"><a href="reporting.php"target="_Blank"><input type="button" id="02" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"   value="Reporting-centers" title=" Upload Reporting Center Details Click Here"></a></td>
<td class="ad1"><a href="institue.php"target="_Blank"><input type="button" id="03" class="rc-button-submit"  onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)" value="Addinstitue-name" title=" To Include any Insititue name Click Here"></a></td>
<td class="ad1"><a href="helpmanual.php" target="_Blank"><input type="button" id="08" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  value="System-log" title=" TO knowAlltheInformation About Administrater system acess Click Here"></a></td>
</tr>
<tr>
<td class="ad1"><a href="institute.php" target="_Blank"><input type="button" id="06" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  value="Update-avilable-sheat" title="For Updating Seat Status of Collages Click Here"></a></td>
<td class="ad1"><a href="allot.php" target="_Blank"><input type="button"  id="04"class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  value="Allocate-sheat" title=" To Start Seat Allotment process  Click Here"></a></td>
<td class="ad1"><a href="rank.php" target="_Blank"><input type="button" id="05" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  value="Enter-Rank" title=" For Uploading Roll no and it Associated Rank Click Here"></a></td>
<td class="ad1"><a href="currentstatious.php" target="_Blank"><input type="button" id="07" class="rc-button-submit" onMouseover="setstyle(this.id)" onMouseout="setstyle1(this.id)"  title="All the Information About  Availavel Seat in Respective Collage Click Here" value="Seat-statues"></a></td>

</tr>
</table>
</center>
</html>
<?php include'footer.php'
?>
