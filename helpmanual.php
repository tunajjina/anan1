<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Title here!</title>
       <link rel="stylesheet" href="st10.css">
        <?php
            $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from systemlog");
            $stm->execute();
            $result1=$stm->fetchAll();
         ?>

</head>
<body  style="background: fixed; background-color: #99CC33;">
<center><h1 size="50px" font-style="bold" color="red">ADMIN SYSTEM ACESS INFORMATION</h1></center>
<div id="dv01" class="vw" style="position: absolute; overflow: inherit; width: 1095px; height: 100%; left: 140px; top: 60px; backface-visibility: visible;">
<table class="form1" align="center" width="400" height="100%" cellpadding="2px" cellspacing="2px" border="1" class="vw">
 <tr><td><b>ADMIN_ID</b></td><td><b>DATE</b></td> <td><b>LOGINTIME</b></td><td><b>STUDENTLIST</b></td><td><b>REPORTING-CENTER</b></td><td><b>ADD-INSTITUE</b></td><td><b>UPDATE SEAT STATUS</b></td><td><b>SEAT-ALOCATION</b></td><td><b>ENTER MARITE LIST</b></td><td><b>VIEW SEAT STATUS</b></td>
        </tr>
        <tr><?php foreach($result1 as $row)
                  { ?>
                  <td id="1" bgcolor="red"><b><?php echo $row['adminid']; ?></b></td>
                  <td id="2"><b><?php echo $row['date']; ?></b></td>
                  <td id="3"><b><?php echo $row['logouttime']; ?></b></td>
                  <td id="4"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['studenlist']; ?>"></b></td>
                   <td id="5"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['reporting-centers']; ?>"></b></td>
                   <td id="6"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['Addinstituename']; ?>"></b></td>
                  <td id="7"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['updateavailabelsheat']; ?>"></b></td>
                  <td id="8"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['Allocatesheat']; ?>"></b></td>
                   <td id="9"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['enterrank']; ?>"></b></td>
                   <td id="10"><b><img src="http://localhost/sss/counseling/uploaded_files/<?php echo $row['seatstatues']; ?>"></b></td>
 </tr>

                  <?php
              }
              ?>

       </table>
       <center><IMG style="CURSOR: hand" title="print"
onclick=javascript:window.print() border=0
src="SSC%20-%20Candidate's%20Application%20Details%20(Registration-Id%2051161384394)_files/printicon.gif"
width=30 height=30></center>
</div>
</body>
</html>

