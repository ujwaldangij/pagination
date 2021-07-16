<?php
include '../../ajax/ajax/config.php';
$name =$_POST['email'];
$gender =$_POST['password'];
$q="INSERT INTO student (id,name) VALUES('{$gender}','{$name}');";
$r=mysqli_query($con,$q) or die("Error in quer");
$out="";
if ($r) {
        $out.="$name name inserted successfull";
}else{
    $out.="Error";
}
echo $out;
?>