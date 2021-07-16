<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .content-responce{
            width: 100%;
            height: 80px;
            
        }
        .content-responce-error{
            background-color: red;
            color: white;
        }
        .content-responce-success{
            background-color: green;
            color: white;
            /* font-size: 2rem; */
        }
    </style>
</head>

<body>
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="content">
                        <h1 class="text-center text-capitalize p-3 bg-primary text-white" >form for b4</h1>
                        <form id="f">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="content-responce text-center fw-bolder" style="line-height: 70px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.js"></script>
<script>
    $(document).ready(function () {
        $(".btn").click(function (e) { 
            e.preventDefault();
            if ($("input:checkbox").is(":checked")) {
                var email = $("input:text[name=email]").val();
                var password =$("input:password[name=password]").val();
                if (email == '' || password == '') {
                    $(".content-responce").html("Fild are empty!!").addClass("content-responce-error").fadeIn().css("font-size","2rem");

                }else{
                    $.post("post1.php",$("#f").serialize(),
                        function (data ) {
                            $(".content-responce").addClass("content-responce-success").fadeIn().html(data);
                            setTimeout(function () {
                                $(".content-responce").fadeOut();
                            },5000);
                            $("#f").trigger("reset");
                        }

                    );
                }
            }else{
                alert("check book must be filled");
            }
        });
    });
    
</script>
</html>