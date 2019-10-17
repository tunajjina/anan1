<?php
session_start();
session_destroy();
//$_SESSION['report']=array();
$_POST['s1']=array();
header('location:home.php');
?>
