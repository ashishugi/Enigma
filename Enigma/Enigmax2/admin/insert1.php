<?php
$clgid=$_POST['colgid'];
$fssname=$_POST['fsname'];
$lssname=$_POST['lsname'];
$colgname=$_POST['clgname'];
$email=$_POST['mail'];
$contnn=$_POST['contn'];
$e1=$_POST['e1'];
$e2=$_POST['e2'];
$e3=$_POST['e3'];
$e4=$_POST['e4'];
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,"enigma11");
   
$querry="insert into registration(collageid,firstname,lastname,collagename,email,contactnumber,event1,event2,event3,event4) values ($clgid,'$fssname','$lssname','$colgname','$email',$contnn,'$e1','$e2','$e3','$e4')";
$res=mysqli_query($con,$querry);
if($res)
{
    echo "<script>";
    echo "alert('registration submited successfully');location.href='insert.html'";
    echo "</script>";
}
else
{
   echo "<script>";
    echo "alert('record not inserted due to duplicate id');location.href='insert.html'";
    echo "</script>";
}
mysqli_close($con);
?>

