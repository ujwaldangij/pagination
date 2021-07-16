<?php
include '../ajax/ajax/config.php';
$name =$_POST['name'];
$gender =$_POST['m'];
$country =$_POST['country'];
$q="INSERT INTO form (name,gender,country) VALUES('{$name}','{$gender}','{$country}');";
$r=mysqli_query($con,$q) or die("Error in quer");
$out="";
if ($r) {
        $out.="$name name inserted successfull";
}else{
    $out.="Error";
}
echo $out;
?>