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
                        <!-- <table class="table">
                            <thead>
                                <tr>
                                    <th>he</th>
                                    <th>he</th>
                                    <th>he</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">h</td>
                                    <td>h</td>
                                    <td>h</td>
                                </tr>
                                <tr>
                                    <td scope="row">h</td>
                                    <td>h</td>
                                    <td>h</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn bg-secondary btn-lg btn-block ">click</button> -->
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
                url: "./udated-pagination.php",
                data: {send : data},
                success: function (response) {
                    $("#tc").html(response);
                    // $(".btn").remove();
                }
            });
        }
        load();
        $(document).on("click",".btn", function () {
            data = $(this).attr("id");
            load(data);
        });
        
    });
</script>

</html>