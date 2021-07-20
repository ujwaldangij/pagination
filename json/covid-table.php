<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" -->
        <!-- integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <style>
        #head{
            width: 100vw;
            min-height: 100vh;
            background-image: linear-gradient(#02aab0 , #00cdac);
            position: relative;
        }
        .container{
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid pink;
            margin-left: 40px;
            margin-right: 40px;
        }
        .parent{
            width: 100vw;
            height: 100vh;
            position: absolute;
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .preloader{
            width: 300px;
            height: 300px;
            background-image: url("../js/0_JVdgKzSfU4q4psf6.gif");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            border-radius: 50%;
            transition: all 1s ease-in-out;
        }
        
    </style>

    </head>

<body>
    <div class="parent">
    <div class="preloader"></div>
    </div>
    <div id="head">
        <div class="container ">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div id="content" class="table-responsive">
                        <table class="table table-bordered table-striped text-white text-center text-capitalize">
                            <thead class=" bg-secondary">
                                <tr>
                                    <th>country</th>
                                    <th>TotalConfirmCase</th>
                                    <th>TotalRecover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td scope="row">1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./daisy.min.js"></script>
    <script>
    $('#head').daisyjs();
    $('#head').daisyjs({
        dotColor: '#ff0000',
        lineColor: '#ff0000'
    });
    </script>
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $(".parent").css("display", "none");
            $.ajax({
                type: "POST",
                url: "./cd.php",
                data:{id : 5},
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (indexInArray, valueOfElement) { 
                         $("table").append("<tr><td>"+valueOfElement.id+"</td>"+"<td class='bg-danger'>"+valueOfElement.name+"</td>"+"</tr>");
                         console.log(valueOfElement.id);
                    });
                    // $("table").append(response);
                }
            });
        });
    </script>

</body>
<tr></tr>
</html>