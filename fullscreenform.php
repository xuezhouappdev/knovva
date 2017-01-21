
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Home</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/fullscreenform.css">

</head>
<body>

<?php

$tabnum =1;
$errormsg = "default error";



?>

<script>
    var tabnum ="test";
</script>


<div class="form-wrapper">

    <div class="row">
        <div class="col-md-12">
            <h5 class="cross" align="right"><i class="fa fa-times" aria-hidden="true" ></i></h5>
            <hr>
        </div>
    </div>


        <div class="container">



            <!--row for form header-->
            <div class="row">
                <div class="col-md-11">
                    <h1>Welcome to GiantBug Foundation</h1>
                </div>
                <div class="col-md-1">
                    <h2 id="counter">?/6</h2>
                </div>

            </div><!--row for form header ends-->


            <!--row for form body and pills-->
            <div class="row">
                <!--This is for tab content-->
                <div class="col-md-11">
                    <div class="tab-content">

                        <!--Home Tab-->

                        <div id="home" class="tab-pane fade in active container" role="tabpanel">
                            <div class="row form-body">
                                    <div class="col-md-10">
                                        <div class="error">

                                            <h5><?php echo $errormsg; ?></h5>
                                        </div>
                                    <form>
                                            <div class="form-group">
                                                <label for="pc_name">What's your name?</label><!-- PC stands for potential client-->
                                                <input class="form-control" name="pc_name" >
                                            </div>
                                        <div class="button-block">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-10 btn-div">
                                                        <button  class="prev btn-default btn" type="button" >PREV</button>
                                                        <button  class="next btn-default btn" type="button" >NEXT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    </div>
                            </div>
                        </div>

                        <!--Step1-->
                        <div id="menu1" class="tab-pane fade container" role="tabpanel">
                            <div class="row form-body">

                                <div class="col-md-10">
                                    <div class="error">
                                        <h5>ERROR OUTPUT HERE</h5>
                                    </div>

                                    <form>
                                        <div class="form-group">
                                            <label for="pc_email">What's your email address?</label><!-- PC stands for potential client-->
                                            <input class="form-control" type="email" name="pc_email" >
                                        </div>
                                        <div class="button-block">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-10 btn-div">
                                                        <button  class="prev btn-default btn" type="button" >PREV</button>
                                                        <button  class="next btn-default btn" type="button" >NEXT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>                        </div>

                        <!--Step2-->
                        <div id="menu2" class="tab-pane fade container" role="tabpanel">
                            <div class="row form-body">

                                <div class="col-md-10">
                                    <div class="error">
                                        <h5>ERROR OUTPUT HERE</h5>
                                    </div>

                                    <form>
                                        <div class="form-group">
                                            <label for="pc_location">What's your location?</label><!-- PC stands for potential client-->
                                            <input class="form-control" name="pc_location" >
                                        </div>

                                        <div class="button-block">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-10 btn-div">
                                                        <button  class="prev btn-default btn" type="button"  >PREV</button>
                                                        <button  class="next btn-default btn" type="button">NEXT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--Step3-->
                        <div id="menu3" class="tab-pane fade container" role="tabpanel">
                            <div class="row form-body">

                                <div class="col-md-10">
                                    <div class="error">
                                        <h5>ERROR OUTPUT HERE</h5>
                                    </div>

                                    <form>
                                        <div class="form-group">
                                            <label for="pc_email">How much is your budget?</label><!-- PC stands for potential client-->
                                            <input class="form-control" name="pc_budget" >
                                        </div>

                                        <div class="button-block">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-10 btn-div">
                                                        <button  class="prev btn-default btn" type="button">PREV</button>
                                                        <button  class="next btn-default btn" type="button">NEXT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>




                <!--This is for tab-->
                <div class="col-md-1">
                    <ul class="nav nav-tabs point" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home"><i class="fa fa-circle" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1"><i class="fa fa-circle" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2"><i class="fa fa-circle" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3"><i class="fa fa-circle" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>

<script>

</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<script>

    // alert("Handler for .click() called.");


    $(document).ready(function(){

        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');


            $(".prev").click(function () {
                    $('.nav-tabs').find('.active').prev('li').find('a').tab('show');

            });


            //next

            $(".next").click(function () {
                $('.nav-tabs>.active').next('li').find('a').tab('show');
            });

    });

</script>

</body>
</html>


