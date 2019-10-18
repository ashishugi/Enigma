<html>
    <head>
        <style>
        #d1
            {
                margin-left: 450px;
            }
        </style>
        <div style="text-align:center;">
        <h1 >VIEW RECORDS</h1>
        <title>view.php</title>
        </div>
    </head>
</html>

<?php
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="select * from registration";
$res=mysqli_query($con,$q);      
$num=mysqli_num_rows($res);
mysqli_close($con);
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

<?php
        echo "<a href='adminhomepage.html' id='d1' >home</a>";
?>           
            
        
        
        
