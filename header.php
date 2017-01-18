<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">



</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<!--Header-->
<div class="header ">
    <div class="container">

        <div class="row navbar-fixed-top">
            <div class="col-md-1">
                <h2>LOGO</h2>
            </div>

            <div class="col-md-7">
                <ul>
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="#"> Program </a></li>
                    <li><a href="#"> Teacher </a></li>
                    <li><a href="#"> About </a></li>
                    <li><a href="#"> Blog </a></li>
                    <li><a href="#"> Career </a></li>
                    <li><a href="#"> Contact </a></li>

                </ul>
            </div>

            <div class="col-md-4">
                <ul>
                    <li><a href="#"> APPLY </a></li>
                    <li><a href="#" id="header-sb"> SUBSCRIBE </a></li>
                    <li><a href="#"> FAQ </a></li>

                </ul>


            </div>
        </div>

    </div>

</div>

<!-- overlay -->

<div class="subscribe-overlay" id="myNav">
    <div class="container">
        <div class="row">
            <a><i class="fa fa-times" id="crosssign" aria-hidden="true"></i></a>
        </div>

        <div class="row">
            <div class="sb-input">



                <div class="overlay-content">
                    <div class="input-group middle">
                        <input type="text" class="form-control" placeholder="Your Email">
                       <span class="input-group-btn">
                           <button class="btn btn-default" type="button">Subscribe</button>
                       </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
<script src="js/index-subscription.js"></script>

</body>
</html>