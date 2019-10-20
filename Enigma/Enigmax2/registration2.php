<?php
session_start();
if(!isset($_POST['b']))
   {
    echo"<script>";
        echo "alert('registration not submitted please choose at least one event');location.href='register.html'";
   echo "</script>";    
}
else
{
    $event=$_POST['b'];
    $as=count($event);
}

$as=(count($event));
$fssname=$_SESSION['fsname'];
$lssname=$_SESSION['lsname'];
$mails=$_SESSION['mail'];
$contnn=$_SESSION['contn'];
$colgnamee=$_SESSION['colgname'];
$colgidd=$_SESSION['colgid'];

function f1($e1,$e2,$e3,$e4)
{    
$fsname=$GLOBALS['fssname'];
$lsname=$GLOBALS['lssname'];
$mail=$GLOBALS['mails'];
$contn=$GLOBALS['contnn'];
$colgname=$GLOBALS['colgnamee'];
$colgid=$GLOBALS['colgidd'];    
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,"enigma11");
   
$querry="insert into registration(collageid,firstname,lastname,collagename,email,contactnumber,event1,event2,event3,event4) values ($colgid,'$fsname','$lsname','$colgname','$mail',$contn,'$e1','$e2','$e3','$e4')";
   $res=mysqli_query($con,$querry);
    $m=mysqli_affected_rows($con);
 if(($res>0) and ($m>0))
{      
             session_destroy();
            mysqli_close($con);
            echo "<script language='javascript'>";
           echo"alert('registration successfully submited');location.href='register.html'";
            echo "</script>";  
 }
     else
    {
        echo "<script>";
        echo "alert('id has been taken please fill another id');location.href='register.html'";
        echo "</script>";
                 
    
    }
}



if($as==1)
  {
   $e1=$event[0];
    $e2="not";
    $e3="not";
    $e4="not";
    f1($e1,$e2,$e3,$e4);
   }
if($as==2)
    {
      $e1=$event[0];
    $e2=$event[1];
    $e3="not";
    $e4="not";
    f1($e1,$e2,$e3,$e4);
    }

if($as==3)
    {
      $e1=$event[0];
    $e2=$event[1];
    $e3=$event[2];
    $e4="not";
   f1($e1,$e2,$e3,$e4); 
   }
if($as==4)
    {
    $e1=$event[0];
    $e2=$event[1];
    $e3=$event[2];
    $e4=$event[3];
    f1($e1,$e2,$e3,$e4);
    }


?>
