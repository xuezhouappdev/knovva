<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<!--Header-->
<div class="header ">
    <div class="container">

        <div class="row navbar-fixed-top">
            <div class="col-md-1">
                <img src="image/logo-trim.png" class="img-responsive" style="margin-top: 16px;margin-left: 16px">
            </div>

            <div class="col-md-7">
                <ul>
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="about.php"> About </a></li>
                    <li class="dropdown">

                        <a href="#" class="dropbtn">Program</a>
                        <div class="dropdown-content">
                            <a href="program_sie.php">Social Innovation and Entrepreneurship </a>
                            <a href="program_tech.php">Tech-Lab Youth Bootcamp</a>
                            <a href="program_startup.php">Start-up Youth Bootcamp</a>
                        </div>

                    </li>
<!--                    <li><a href="#"> Teacher </a></li>-->

                    <li><a href="gallery.php" class="disabled"> Gallery </a></li>
                    <li><a href="career.php"> Career </a></li>
                    <li><a href="contact.php"> Contact </a></li>

                </ul>
            </div>

            <div class="col-md-4">
                <ul>
<!--                    <li><a href="#"> APPLY </a></li>-->
                    <li><a href="#" id="header-sb"> SUBSCRIBE </a></li>
                    <li><a href="faq.php"> FAQ </a></li>

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

                    <form  method="post" id="header_subscribeform">

                           <div class="input-group middle">
                               <div class="row" style="text-align: left">
                                   <h5 id="noti" style="color: white"></h5>
                               </div>

                               <div class="row" style="display: inherit">
                                   <input type="email" class="form-control" placeholder="Your Email" name="header_email">
                                   <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" id="subscribbtn" name="submit" >Subscribe</button>
                                   </span>
                               </div>

                               <script src="js/header-subscribe.js"></script>
                           </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!--<script src="js/index.js"></script>-->
<script src="js/index-subscription.js"></script>

</body>
</html>