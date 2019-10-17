<html>
    <head >
        <h1>RECORD OF STUDENT</h1>
    </head>


<?php
$id=$_POST['n2'];
$id=intval($id);
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="select * from registration where collageid=$id ";
$res=mysqli_query($con,$q);
mysqli_close($con);
$num=mysqli_num_rows($res);
if($num==0){
    echo "<script>";
    echo "alert('record not found');location.href='viewspecific.html'";
    echo "</script>";
}
        
else
{

for($i=1;$i<=$num;$i++)
{
    $rs=mysqli_fetch_array($res);
?>        
    <table border="1" rules="all">
        <tr>
            <td> COLLAGEID</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['collageid'];?>"></td>
        </tr> 
        <tr>
            <td> FIRSTNAME</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['firstname'];?>"></td>
        </tr> 
        <tr>
            <td>LASTNAME</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['lastname'];?>"></td>
        </tr> 
        <tr>
            <td>COLLAGENAME</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['collagename'];?>"></td>
        </tr> 
        <tr>
            <td>EMAIL</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['email'];?>"></td>
        </tr> 
        <tr>
            <td>CONTACTNUMBER</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['contactnumber'];?>"></td>
        </tr> 
        <tr>
            <td>EVENT1</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['event1'];?>"></td>
        </tr> 
        <tr>
            <td>EVENT2</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['event2'];?>"></td>
        </tr> 
          <tr>
            <td>EVENT3</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['event3'];?>"></td>
        </tr> 
            <tr>
            <td>EVENT4</td>
            <td><input type="text" contenteditable="false" value="<?php echo $rs['event4'];?>"></td>
        </tr> 

     <?php
        }

?>
    </table>
        <?php
        }
?>       
        
<html>
    <body>
        <br>
        <br>
        <a href="adminhomepage.html">HOME</a>
    </body>
        </html>