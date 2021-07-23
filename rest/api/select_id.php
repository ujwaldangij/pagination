<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Access-Control-Allow-Method,Access-Control-Allow-Origin,Content-Type');

$input= json_decode(file_get_contents("php://input"),true);

$id =$input['sid'];

include './config.php';

$q="SELECT * FROM student where id='{$id}';";
$r= mysqli_query($con,$q);
$row= mysqli_fetch_all($r,true);
if (mysqli_num_rows($r)>0) {
    # code...
    echo json_encode($row);
}else{
    echo json_encode(["massage"=>"recode not  found !!", "status"=>false ]);

}

?>