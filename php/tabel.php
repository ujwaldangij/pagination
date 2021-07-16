<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>

</body>

</html>
<?php
include '../ajax/ajax/config.php';

if (isset($_POST['page_no'])) {
    # code...
    $page_no=$_POST['page_no'];
}else{
    $page_no=1;
}
$limit=4;
$offset=($page_no-1)*$limit;
$q="SELECT * FROM student LIMIT $offset,$limit ;";
$r= mysqli_query($con,$q) or die("error in query");
$out="";
if (mysqli_num_rows($r)>0) {
    # code...
    $out.="<table class='table table-bordered table-striped text-center'>

    
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    </thead>
    <tbody>";
    // $out.="";
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
        $out.="<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        </tr>";
    }
    
    $out.="</tbody></table>";
    

$out;
$q1="SELECT * FROM student";
$r1=mysqli_query($con,$q1) or die("error");
$tr= mysqli_num_rows($r1);
$tp=ceil($tr/$limit);
$out.="<nav aria-label='Page navigation'>
<ul class='pagination justify-content-center'>";
if ($page_no>1) {
    # code...

$out.="
  <li class='page-item'>
    <a class='page-link' id='1'  aria-label='Previous'>
      <span aria-hidden='true'>&laquo;</span>
      <span class='sr-only'>Previous</span>
    </a>
  </li>
";
}else{
    $out.="";
}
for ($i=1; $i <=$tp ; $i++) { 
    # code...
    if ($page_no==$i) {
        # code...
        $act="active";
    }else{
        $act="";
    }
    $out.="<li class='page-item {$act} '><a class='page-link' id='{$i}'>{$i}</a></li>";
}
$out.="<li class='page-item'>
<a class='page-link' aria-label='Next'>
  <span aria-hidden='true'>&raquo;</span>
  <span class='sr-only'>Next</span>
</a>
</li>
</ul>
</nav>";

}
echo $out;

?>