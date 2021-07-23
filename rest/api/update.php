<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Access-Control-Allow-Method,Access-Control-Allow-Origin,Content-Type');

$input= json_decode(file_get_contents("php://input"),true);
$id=$input['sid'];
$name =$input['sname'];
$age =$input['sage'];
$city =$input['scity'];

include './config.php';

$q="UPDATE student SET name='{$name}', age='{$age}' ,city='{$city}' WHERE id ='{$id}';";

if (mysqli_query($con, $q)) {
    # code...
    echo json_encode(["massage"=>"recode updated !!", "status"=>true ]);
}else{
    echo json_encode(["massage"=>"recode not updated !!", "status"=>false ]);

}

?>