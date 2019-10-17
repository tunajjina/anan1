  <?php include'header.php';?>
<html>
<link rel="stylesheet" href="st6.css">
<head>
       <title>Title here!</title>
       <center><p class="wq"><b>EnteryourRollNoforReportingCenter</b></p>
       <h5 class="sea"></h5></center>
</head>
<body><p></p><p color="red"><img src="http://localhost/sss/primg/newicon.gif"><b>NOTICE:</b></p>
<p>Online reporting process at Reporting Centres after getting 1st time seat allotment in any rounds
   Candidates, who get their seat allotment for the first time in any of the three rounds of allotment,
   will report to any of the Reporting Centres during the respective reporting periods and not to their Allotted Institutes.
   The Allotted Institutes will not accept any 'reporting' or admissions during this period.
   Candidates will produce all the relevant certificates in original for verification including e-challan receipt when they report to the Reporting Centre.
   They are required to deposit the required Fee as per the details given below through account payee Demand Draft in the favour of WBCOUNSEL, payable at Kolkata.
   Allotted Quota
    <table class="sea1">
    <tr><td>Fee Amount in Rs.</td></tr>
   <tr><td> TFW:4,000</td></tr>
    <tr><td>University/Government Institute 5,000</td></tr>
    <tr><td>Private Self Financed Institutions 	20,000</p></td></tr></table>
<form name="f001" action="r1.php"  method="POST" >
<center>
<table class="sea1">
<tr><td class="sea12"><p class="sea">Search</p></td></tr>
<tr><td class="sea12"><p>EnterRollno:</p>
</td>
<td class="sea12"><input type="text" name="se19" value=""></td>
</tr>
<tr><td></td>
<td>
<input type="submit" name="ee" size="4"  value="SEARCH">
</td>
</tr>
</table>
</form>
</center>
</body><?php
$type01 = $_POST['se19'];
$sql=new PDO('mysql:host=localhost;dbname=test','root','');
$stm=$sql->prepare("select * from report where report.rollno='$type01'");
            $stm->execute();
            $result1=$stm->fetchAll();
            foreach($result1 as $row1)
            { ?>
            <table class="sea1" border="1" width="400px" height="400px">
            <tr><td><b>Rollno</b></td>
            <td><b>ReportingCenter</b></td>
            <td><b>ReportingTime</b></td>
            <td><b>RrportingDate</b></td></tr>
            <tr><td><b><?php echo $row1['rollno']; ?></b></td>
                 <td><b><?php echo $row1['name']; ?></b></td>
                 <td><b><?php echo $row1['time']; ?></b></td>
                 <td><b><?php echo $row1['date']; ?></b></td></tr>
                 </table>
                 <?php }
                 ?>





</html>
<?php include'footer.php';?>
