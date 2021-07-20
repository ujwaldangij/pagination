<!doctype html>
<html lang="en">

<head>
    <title>Storing</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #head{
            width: 100vw;
            height: 100vh;
            background: #fc00ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .col-md-7{
            border: 4px groove red;
            border-radius: 10px;
            box-shadow: 8px 8px 6px black;
        }
    </style>
</head>

<body>
    <div id="head">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
                    <h1 class="text-center text-capitalize p-md-3 bg-success text-white">Storing data in json from form
                    </h1>
                    <form id="f" >
                        <div class="form-group">
                          <label for="Name">Name</label>
                          <input type="text"
                            class="form-control" name="name" id="n" aria-describedby="helpId" placeholder="Please enter your name">
                          <small id="helpId" class="form-text ">Help text</small>
                        </div>
                        <div class="form-group">
                          <label for="Age">Age</label>
                          <input type="number"
                            class="form-control" name="age" id="a" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text ">Help text</small>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="g" id="" value="male"> Male
                            </label>
                            &nbsp;&nbsp;
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="g" id="" value="female"> Female
                            </label>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg mt-3" id="save">Submit</button>
                        </div>
                    </form>
                    <div id="table"></div>
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
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $("#save").click(function (e) { 
                e.preventDefault();
                validate();
            });
            function error(params) {
                $("small").addClass("text-danger").html(params).fadeIn().addClass("text-capitalize");
            }
            function validate() {
               var nameval = $("#n").val();
               var ageval =  $("#a").val();
               var genderval =  $("input:radio[name=g]").is(":checked");
            //    console.log(nameval);
                if (nameval == "" && ageval =="" && genderval =="") {
                    console.log('yes');
                    error("filed are empty");
                    
                }else{
                    alert(1);
                    $.ajax({
                        type: "POST",
                        url: "./using-php.php",
                        data:{name :nameval,age:ageval,g:genderval},
                        success: function (response) {
                            $("#table").append(response);
                        }
                    });

                }
            }
        });
    </script>
</body>

</html>