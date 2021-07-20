<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include '../json/config.php';
// $file_have_data = file_get_contents("./my-18.07.21.json");
// $array_new=["name"=>$_POST['name'],"age"=>$_POST['age'],"g"=>$_POST['g']];
// $decode= json_decode($file_have_data,true);
// mera($decode);
// $decode[]=$array_new;
// $encode = json_encode($decode,JSON_PRETTY_PRINT);
// $a=file_put_contents("./my-18.07.21.json",$encode);
// if ($a) {
//     # code...
//     echo "<table class='table'>
//     <thead>
//         <tr>
//             <th>name</th>
//             <th>age</th>
//             <th>Gender</th>
//         </tr>
//     </thead>
//     <tbody>";
//     foreach ($decode as list("name"=>$name,"age"=>$age,"g"=>$g)) {
//         # code...
//         echo " <tr>
//         <td scope='row'>$name</td>
//         <td>$age</td>
//         <td>$g</td>
//     </tr>";
//     }
//     echo "</tbody>
// </table>";
// }else{
//     echo "data not send";
// }
if (isset($_POST['name'])) {
    # code...
    $name= $_POST['name'];
}
if (isset($_POST['age'])) {
    # code...
    $age= $_POST['age'];
}
if (isset($_POST['g'])) {
    # code...
    $g= $_POST['g'];
}
$array_new=["name"=>$name,"age"=>$age,"g"=>$g];
$get_content= file_get_contents("./my-18.07.21.json");
$decoded= json_decode($get_content,true);
$decode[]=$array_new;
$encode = json_encode($decode,JSON_PRETTY_PRINT);
$put_content=file_put_contents("./my-18.07.21.json",$encode);

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
