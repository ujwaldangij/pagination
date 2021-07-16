<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>model pagination</title>
    <?php include './pl.php';?>
</head>

<body>
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 bg-success">
                    <h1 class="text-center text-capitalize text-white p-3">pagination</h1>
                </div>
                <div class="col-md-8">
                    <div id="table1">
                        <table class="table table-hover table-inverse table-responsive text-center table-bordered">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
    function sendq(params) {
        $.ajax({
            type: "POST",
            url: "./p2.php",
            data: {data1 : params},
            success: function (response) {
                $("#table1 table").append(response);

            }
        });
    }
    sendq();
    $(document).on("click",".go", function () {
        var params = $(this).data("id");
        $(this).val("loading..");
        sendq(params);
    });
});
</script>

</html>