<?php

$clgid=$_POST['n2'];
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="delete from registration where collageid=$clgid";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($q)
   {
    if($r>0)
    {
      echo "<script>";
        echo "alert('record deleted successfully');location.href='delete.html'";
       echo "</script>"; 
    }
     else
       {
         echo "<script>";
        echo "alert('record not found');location.href='delete.html'";
       echo "</script>";
        }
}
mysqli_close($con);
?>