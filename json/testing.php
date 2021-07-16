<?php
// function mera ($a){
//     echo "<pre>";
//     print_r($a);
//     echo "<pre>";
// }
// <?php

include '../../ajax/ajax/config.php';
$q="select * from student where id ={$_POST['q']};";
$r=mysqli_query($con,$q) or die("Error in quer");
$o=mysqli_fetch_all($r,MYSQLI_ASSOC);
echo json_encode($o);
?>