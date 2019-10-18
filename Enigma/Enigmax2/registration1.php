<?php
session_start();
$fsname=$_POST['fname'];
$lsname=$_POST['lname'];
$mail=$_POST['email'];
$contn=$_POST['cn'];
$colgname=$_POST['clgn'];
$colgid=$_POST['clgid'];
$_SESSION['fsname']=$fsname;
$_SESSION['lsname']=$lsname;
$_SESSION['mail']=$mail;
$_SESSION['contn']=$contn;
$_SESSION['colgname']=$colgname;
$_SESSION['colgid']=$colgid;
header("location:register21.html");
?>

