<?php
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
$dd=$date->format( 'H:i:s A ');
$_SESSION['time']=$dd;
echo $dd;
?>



