<html>
    <head >
        <h1>RECORD OF STUDENT</h1>
    </head>


<?php
$name=$_POST['n11'];
$id=$_POST['n22'];
$id=intval($id);
$con=mysqli_connect('localhost','root','vertrigo');
mysqli_select_db($con,'enigma11');
$q="select * from registration where collageid=$id ";
$res=mysqli_query($con,$q);
mysqli_close($con);
$num=mysqli_num_rows($res);
$rs=mysqli_fetch_array($res);    
if($num==0){
    echo "<script>";
    echo "alert('record not found');location.href='viewspecificupdate.html'";
    echo "</script>";
}
        
else
{
?>
    <form action="updation.php" method="post">
    <table border="1" rules="all">
        <tr>
            <td> COLLAGEID</td>
            <td><?php echo $rs['collageid'];?></td>
             <input type="hidden" name="colgidd" value="<?php echo $rs['collageid'];?>">
        </tr> 
        <tr>
            <td> FIRSTNAME</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['firstname'];?>" name="fsname"></td>
        </tr> 
        <tr>
            <td>LASTNAME</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['lastname'];?>" name="lsname"></td>
        </tr> 
        <tr>
            <td>COLLAGENAME</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['collagename'];?>" name="clgname"></td>
        </tr> 
        <tr>
            <td>EMAIL</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['email'];?>" name="mail"></td>
        </tr> 
        <tr>
            <td>CONTACTNUMBER</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['contactnumber'];?>" name="contn"></td>
        </tr> 
        <tr>
            <td>EVENT1</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['event1'];?>" name="e1"></td>
        </tr> 
        <tr>
            <td>EVENT2</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['event2'];?>" name="e2"></td>
        </tr> 
          <tr>
            <td>EVENT3</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['event3'];?>" name="e3"></td>
        </tr> 
            <tr>
            <td>EVENT4</td>
            <td><input type="text" contenteditable="true" value="<?php echo $rs['event4'];?>" name="e4"></td>
        </tr> 
         <tr>
        <td colspan="2" style="padding-left:263px;"><input type="submit" value="update" ></td>
        </tr>
        </table>
    </form>
<?php
    }
?>       