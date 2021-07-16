<?php
include '../ajax/ajax/config.php';
if (isset($_POST['send'])) {
    # code...
    $id=$_POST['send'];
}else{
    $id =1;
}
$limit=4;
$offset=($id-1)*$limit;
$q="SELECT * FROM student LIMIT $offset,$limit ;";
$r= mysqli_query($con, $q) or die("error in quer");
$out="";
if (mysqli_num_rows($r)>0) {
    # code...
    $out.="<table class='table'>
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>
    </thead>
    
    <tbody>";
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
        $out.="<tr>
        <td scope='row'>{$row['id']}</td>
        <td>{$row['name']}</td>
    </tr>";
    }
    $out.="</tbody>";
    $out.="</table>";
}
$q1="SELECT * FROM student ;";
$r1= mysqli_query($con, $q1) or die("error in quer");
$tr= mysqli_num_rows($r1);
$tp=ceil($tr/$limit);
for ($i=1; $i <=$tp ; $i++) { 
    # code...
    $out.="<button type='button' id='{$i}' class='btn bg-secondary btn-lg btn-block '>click</button>";
}

echo $out;
?>