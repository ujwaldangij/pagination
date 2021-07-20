<?php
header('Content-Type:application/json');
include './config.php';
// $data = json_decode(file_get_contents("php://input"),true);
// $id = $data['sid'];
$q="select * from student   ";
$r= mysqli_query($con,$q) or die("Error in query");
$row = mysqli_fetch_all($r,MYSQLI_ASSOC);

if ($r) {
    # code...
    echo json_encode($row,JSON_PRETTY_PRINT);
}else{
    echo json_encode(["massage"=>"no recode found","status"=>"true"]);
}
?>
