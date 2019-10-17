<html>
    <head >
        <h1>RECORD OF STUDENT</h1>
    </head>


<?php
$e1=$_POST['event'];
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="select * from registration where event1='$e1' or event2='$e1'or event3='$e1' or event4='$e1' ";
$res=mysqli_query($con,$q);
mysqli_close($con);
$num=mysqli_num_rows($res);
if($num==0){
    echo "<script>";
    echo "alert('not anybody participated in this event');location.href='event.html'";
    echo "</script>";
}
        
else
{
?>    
    <table  border="1" rules="all" style="background-color:pink;"> 
                 <tr >
                     <th>COLAGEID</th>
                     <th>FIRSTNAME</th>
                     <th>LASTNAME</th>
                     <th>COLLAGENAME</th>
                      <th>EMAIL</th>
                      <th>CONTACTNUMBER</th>
                      <th>EVENT1</th>
                     <th>EVENT2</th>
                     <th>EVENT3</th>
                     <th>EVENT4</th>
                 </tr>
                 
<?php    
  for($i=1;$i<=$num;$i++)
        {
         $r=mysqli_fetch_array($res);
         ?>
          <tr>
              <td><?php echo $r['collageid']; ?></td>
             <td> <?php echo $r['firstname'];?></td>
             <td><?php echo $r['lastname'];?></td>
             <td><?php echo $r['collagename'];?></td>
              <td><?php echo $r['email'];?></td>
              <td><?php echo $r['contactnumber'];?></td>
              <td><?php echo $r['event1'];?></td>
              <td><?php echo $r['event2'];?></td>
              <td><?php echo $r['event3'];?></td>
              <td><?php echo $r['event4'];?></td>
        </tr>  
       <?php 
       }            
      ?>
         </table>
<?php
}
?>
       <?php echo "<br>";?>
      <?php echo "<br>";?>
    <?php echo "number of student in this event = ".$num ;?>  
    <?php echo "<br>";?>
    <?php echo "<br>";?>
    <?php echo "<br>";?>
   <div style="margin-left:400px;" width="100%">
<?php
        echo "<a href='adminhomepage.html' id='d1' >home</a>";
?> 
    </div>
   