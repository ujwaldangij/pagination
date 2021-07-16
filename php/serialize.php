<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serelize</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .seterror{
                width: 100%;
                height: 100px;
                background-color: rgb(255, 0, 102,0.5);
                color: white;
                font-size: xx-large;
            }
            .setsuccess{
                width: 100%;
                height: 100px;
                background-color: rgb(153, 255, 102,0.4);
                color: white;
                font-size: xx-large;
            }
        </style>
</head>

<body class="bg-secondary">
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="bg-primary">
                        <h1 class="text-center text-capitalize text-white p-3">form ajax with serialize</h1>
                    </div>
                    <div class="bg-white" style="min-height: 400px;">
                        <form action="" id="f">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                    placeholder="">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="m" id="" value="male"> male
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="m" id="" value="female"> female
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <select class="form-control" name="country" id="selected">
                                    <option value="india">ind</option>
                                    <option value="pack">pak</option>
                                    <option value="china">chi</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary c">Submit</button>
                        </form>
                    </div>
                    <div id="show"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/jquery.js"></script>
<script>
$(document).ready(function() {
    $(".c").click(function(e) {
        e.preventDefault();
        validate();
    });

    function validate() {
        var n = $("#name").val();
        var g =!$('input:radio[name=m]').is(":checked");
        console.log(g);
        if (n == "" || !$('input:radio[name=m]').is(":checked") )  {
            seterror("filed is empty");

        }else{

            setsuccess();
            $("#f").trigger("reset");
        }
        
    }
    function seterror(params) {
        $("#show").html(params);
        $("#show").removeClass("setsuccess").addClass("seterror").fadeIn();
    }
    function setsuccess(params) {
        $("#show").removeClass("seterror").addClass("setsuccess").fadeIn(2000);
        $.ajax({
            type: "POST",
            url: "./se.php",
            data: $("#f").serialize(),
            success: function (response) {
                $("#show").html(response);
            }
        });
        $.post("url", data,
            function (data, textStatus, jqXHR) {
                
            },
            "dataType"
        );
    }

});
</script>

</html>