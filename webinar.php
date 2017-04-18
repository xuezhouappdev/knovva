
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Video| Knovva </title>


    <!-- CS -->

    <link rel="stylesheet" href="css/livestream.css">




    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>


    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">


    <!-- Google KeyWord -->
    <meta name="keywords" content="" />



    <?php
    include "header.php";
    ?>




</head>
<body >




<!-- Live-->
<div class="live section">
    <div class="container">


            <h5>JOIN OUR WEBINAR</h5>
            <h3>Ready to join the webinar? </h3>

            <p>Join a Webinar</p>

            <form method="post" class="webinarform">
                <div class="row">
                    <div class="col-md-4">
                        <input type = "text" class = "form-control" placeholder = "9-digit ID">
                    </div>
                    <div class="col-md-4">
                        <input type = "email" class = "form-control" placeholder = "Email Address">
                    </div>


                </div>

                <a class="btn btn-default" type="submit">Join</a>




            </form>




    </div>
</div>


<!-- History-->
<div class="history section">
    <div class="container">
        <h2>Past Webinars</h2>

        <div class="row">
            <div class="col-md-3 ">
                <a><img src="http://placehold.it/380x250" class="img img-responsive"></a>
                <a><p>Title Here</p></a>
            </div>

            <div class="col-md-3">
                <a><img src="http://placehold.it/380x250" class="img img-responsive"></a>
                <a><p>Title Here</p></a>
            </div>

            <div class="col-md-3">
                <a><img src="http://placehold.it/380x250" class="img img-responsive"></a>
                <a><p>Title Here</p></a>
            </div>

            <div class="col-md-3">
                <a><img src="http://placehold.it/380x250" class="img img-responsive"></a>
                <a><p>Title Here</p></a>
            </div>

        </div>
    </div>
</div>



<!-- Footer -->
<?php
include ("footer.php");
?>




</body>
</html>