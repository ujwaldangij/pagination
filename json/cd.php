<?php
include '../../ajax/ajax/config.php';
$q="select * from student  ";
$r= mysqli_query($con,$q) or die('errror in query');
$row= mysqli_fetch_all($r,MYSQLI_ASSOC);
// $row;
// mera($row);
 echo json_encode($row,JSON_PRETTY_PRINT);
// $out= "";
// if (mysqli_num_rows($r)>0) {
//     # code...
//     while ($row= mysqli_fetch_assoc($r)) {
//         # code...
//         $out.="<td>{$row['id']}</td>";
//         $out.="<td>{$row['name']}</td>";
//     }
// }else{
//     $out.="empty";
// }
// echo $out;



?>