<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination-style</title>
    <?php include './link.php';?>
</head>

<body>
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 px-0">
                    <div class="heading">
                        <h2 class="text-center"><b>PHP $ Ajax Pagination</b></h2>
                    </div>
                    <div class="table-responsive" id="tc">
                        
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        function load(data) {
            $.ajax({
                type: "POST",
                url: "./tabel.php",
                data: {page_no :data},
                cache: false,
                success: function (response) {
                    $("#tc").html(response);
                }
            });
        }
        load();
        $(document).on("click",".pagination li a",function (e) {
            e.preventDefault();
            var data=$(this).attr("id");
            // alert(1);
            load(data);
        });
    });
</script>

</html>