<?php
$name=$_POST['name'];
$j=0;
for($i=0;$i<count($_FILES['file']['name']);$i++)
   {
    $filetemp=$_FILES['file']['tmp_name'][$i];
    $filename=$_FILES['file']['name'][$i];
    $filetype=$_FILES['file']['type'][$i];
    $filepath="photos/".$filename;
    move_uploaded_file($filetemp,$filepath);
    $j++;
   }
if($j==count(($_FILES['file']['name'])))
 {
    echo "<script>";
    echo "alert('file uploaded successfully');window.location.href='upload.html'";
    echo "</script>";
}

?>