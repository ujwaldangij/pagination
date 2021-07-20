<?php
      include './config.php';
      $q="select * from student ";
      $r= mysqli_query($con,$q) or die("Error in query");
    //   mera($r);
    $row= mysqli_fetch_all($r,true);
    $encode = json_encode($row,JSON_PRETTY_PRINT);
    // mera($encode);
    echo $encode;
      ?>