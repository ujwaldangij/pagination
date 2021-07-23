<?php
$servername ="localhost";
$username="root";
$password="";
$databasename="api";
$con=mysqli_connect($servername,$username,$password,$databasename);
if (mysqli_connect_errno()) {
    # code...
    echo "Error in connection: "+mysqli_connect_error($con);
}
function mera($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
?>