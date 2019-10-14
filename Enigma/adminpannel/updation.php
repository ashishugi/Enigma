<?php

$colgidd=$_POST['colgidd'];
$fssname=$_POST['fsname'];
$lssname=$_POST['lsname'];
$mails=$_POST['mail'];
$contnn=$_POST['contn'];
$colgnamee=$_POST['clgname'];

$e1=$_POST['e1'];
$e2=$_POST['e2'];
$e3=$_POST['e3'];
$e4=$_POST['e4'];
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="update registration set
firstname='$fssname',lastname='$lssname',collagename='$colgnamee',email='mails',contactnumber=$contnn,
event1='$e1',event2='$e2',event3='$e3',event4='$e4' where collageid=$colgidd";
$res=mysqli_query($con,$q);
 if($res)
 {
     echo "<script>";
     echo "alert('record updated');location.href='viewspecificupdate.html'";
     echo "</script>";
 }
 else
 {
     echo "<script>";
     echo "alert('record updated');location.href='viewspecificupdate.html'";
     echo "</script>";

 }
mysqli_close($con);
?>