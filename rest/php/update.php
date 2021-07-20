<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Methods:PUT");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods
,Content-Type,Authorization,X-Requested-With");
$data= json_decode(file_get_contents("php://input"),true);
$sid= $data['sid'];
$sname=$data['sname'];
include './config.php';
$q="UPDATE student SET name='{$sname}' WHERE id ='{$sid}';";
if (mysqli_query($con,$q)) {
    # code...
    echo json_encode(["massage"=>"record inserted successful","status"=>"true"]);
}else{
    echo json_encode(["massage"=>"record not inserted","status"=>"false"]);
}

?>
