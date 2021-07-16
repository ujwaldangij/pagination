<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8  ">
                    <h2 class="text-center p-3 bg-primary text-capitalize">php with json </h2>
                    <div id="load">
                        <table class="table text-center table-danger ">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script>
        // $(document).ready(function () {
        //     $.ajax({
        //         type: "GET",
        //         url: "./testing.php",
        //         success: function (response) {
        //             // $("#load").append(response.id + ""+ response.title+""+response.body);
        //             $.each(response, function (indexInArray, valueOfElement) { 
        //             $("#load").append(valueOfElement + "<br>");

                         
        //             });
        //             console.log(response);
        //         }
        //     });
        // });
        // $.getJSON("./testing.php",
        //     function (data) {
        //         console.log(data);
        //         $.each(data, function (indexInArray, valueOfElement) { 
        //         $("#load").append(valueOfElement.id);
                     
        //         });
        //     }
        // );
    </script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "./testing.php",
                data: {q : 8},
                dataType: "JSON",
                
                success: function (response) {
                    $.each(response, function (indexInArray, valueOfElement) { 
                        //  $("#load").append  ("<h1></h1>"+valueOfElement.id);
                        // $("#m").append(valueOfElement.id+"<br>");
                        // $("#n").append(valueOfElement.name+"<br>");
                        $("table").append("<tr><td>"+valueOfElement.id+"</td>"+"<td>"+valueOfElement.id+"</td></tr>");
                    });
                }
            });
        });
    </script>
</body>
</html>
<style>
    
</style>