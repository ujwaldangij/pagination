<?php
header('Content-Type:application/json');
include './config.php';
$data = json_decode(file_get_contents("php://input"),true);
$sname = $data['sname'];
$q="select * from student where name like '%{$sname}%' ";
$r= mysqli_query($con,$q) or die("Error in query");
$row = mysqli_fetch_all($r,true);

if ($r) {
    # code...
    echo json_encode($row,JSON_PRETTY_PRINT);
}else{
    echo json_encode(["massage"=>"no recode found","status"=>"true"]);
}
?>