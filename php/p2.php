<?php
include '../ajax/ajax/config.php';
if (isset($_POST['data1'])) {
    # code...
    $data1=$_POST['data1'];
}else {
    
    $data1=1;
}
$limit=4;
$offset=($data1 - 1)*$limit;
$q="SELECT * FROM student LIMIT $offset,$limit;";
$r=mysqli_query($con,$q) or die("Error in quer");
$out="";
if (mysqli_num_rows($r)>0) {
    # code...
    $out.="<tbody id='tb1'>
    
    </tbody>";
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
        $lastid=$row['id'];
        $out.="<tr>
        <td scope='row'>{$row['id']}</td>
        <td>{$row['name']}</td>
        </tr>";
    }
    $out.="</tbody>";
    $out.="<tbody id='tb2'>
    <tr>
        <td scope='row'><input type='button' data-id='{$lastid}' class='btn btn-lg btn-success go' value='Lode More'></td>
    </tr>
</tbody>";
}
echo $out;
?>