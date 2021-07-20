<?php
// header('Content-type:application/json');
// header('Acess-Control-Allow-Origin:*');
include '../json/config.php';
$q="select * from student";
$r= mysqli_query($con,$q) or die("error in query");
$row=mysqli_fetch_all($r,true);
$encode = json_encode($row,JSON_PRETTY_PRINT);
echo $encode;
?>