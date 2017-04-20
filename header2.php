<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <!-- css -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/header_2.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">

    <!-- FA -->
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>




</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<?php include_once("analyticstracking.php") ?>


<nav class="navbar navbar-inverse" id="collapseheader" style="margin-bottom: 0">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- hidden menu-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img id="logo" src="image/logo-trim.png" class="img-responsive img" ></a>
        </div>



        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li ><a href="about.php">About</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="programs.php">Programs <span class="caret"></span></a>
                    <ul class="dropdown-menu">



                        <li><a href="program-entrepreneurship.php">Social Innovation and Entrepreneurship </a></li>
                        <li><a href="program-globalaffairs.php">Global Affairs Institute </a></li>
                        <li><a href="program-appliedengineering.php">Applied Engineering & Robotics</a></li>
                        <li><a href="program-landscapeofstudy.php">Understanding the Landscape of Study</a></li>
                        <li><a href="program-socialmedia.php">U.S. Social Media Use and Electronic Correspondence</a></li>
                        <li><a href="program-harrypotter.php">The Harry Potter Reading Group</a></li>
                        <li><a href="program-innotativereading.php">The Innovation Reading Group: Creativity and Change in the New Millennium </a></li>



                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="applicationform.php"><i class="fa fa-hand-o-up" aria-hidden="true"></i>&nbsp;Apply</a></li>

            </ul>
        </div>
    </div>
</nav>








</body>
</html>