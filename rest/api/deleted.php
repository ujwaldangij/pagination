<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Access-Control-Allow-Method,Access-Control-Allow-Origin,Content-Type');

$input= json_decode(file_get_contents("php://input"),true);
$id=$input['sid'];

include './config.php';

$q="DELETE FROM student WHERE id='{$id}';";


if (mysqli_query($con, $q)) {
    # code...
    echo json_encode(["massage"=>"recode deleted !!", "status"=>true ]);
}else{
    echo json_encode(["massage"=>"recode not deleted !!", "status"=>false ]);

}

?>