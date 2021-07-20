<?php
include './config.php';
$q="select * from student ";
$r= mysqli_query($con,$q) or die('errror in query');
$row= mysqli_fetch_all($r,true);
$json_data= json_encode($row,JSON_PRETTY_PRINT);
// echo $json_data;
$file_name="my-".date("d.m.y").".json";
// echo $file_name;
if (file_put_contents($file_name,$json_data)) {
    # code...
    ?>
    <script>
        alert("yes done")
    </script>
    <?php
}
?>