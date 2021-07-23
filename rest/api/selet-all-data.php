<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers:Access-Control-Allow-Origin,Content-Type");

include './config.php';
$q="SELECT * FROM student;";
$r=mysqli_query($con,$q) or die("error in query");


if (mysqli_num_rows($r)>0) {
    $row= mysqli_fetch_all($r,true);
    echo json_encode($row);
    # code...
}else{
    echo json_encode(["meassage"=>"no recode found","status"=>true]);
}
?>