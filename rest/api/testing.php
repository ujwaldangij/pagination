<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Access-Control-Allow-Method,Access-Control-Allow-Origin,Content-Type');

$input= json_decode(file_get_contents("php://input"),true);

$name =$input['sname'];
$age =$input['sage'];
$city =$input['scity'];

include './config.php';

$q="INSERT INTO student(name,age,city) VALUES('{$name}','{$age}','{$city}');";

if (mysqli_query($con, $q)) {
    # code...
    echo json_encode(["massage"=>"srecode inserted !!", "status"=>true ]);
}else{
    echo json_encode(["massage"=>"srecode not  inserted !!", "status"=>false ]);

}

?>