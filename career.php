<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/career.css">


</head>
<body>


<?php
// include header
include "header.php";
?>


<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
            <h2>Career</h2>
        </div>
    </div>
</div>



<!-- why-->
<div class="careerslider ">
    <div class="container">
        <div class="row">
            <h4>We're looking for people who have</h4>
        </div>

        <div class="row">
            <ul >
                <li data-target="#myCarousel" data-slide-to="0" class="active">L</li>
                <li data-target="#myCarousel" data-slide-to="1">O</li>
                <li data-target="#myCarousel" data-slide-to="2">V</li>
                <li data-target="#myCarousel" data-slide-to="3">E</li>
            </ul>
        </div>
    </div>
</div>


<!-- CS -->
<div class="intro">
<!--slider-->
<div id="myCarousel" class="carousel slide">


    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background:url('image/white1.jpeg') top center no-repeat;"></div>
            <div class="carousel-caption">
            </div>
            <div class="container">

            </div>
        </div>



        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background:url('image/whiteb.png') top center no-repeat;"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 2</h2>-->
            </div>
        </div>

        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background:url('image/white3.png') top center no-repeat;"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 3</h2>-->
            </div>
        </div>

        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background:url('image/gun.png') top center no-repeat;"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 3</h2>-->
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</div>



</div>


<!--DPT-->
<div class="dpt">
    <div class="container">
        <div class="row">
            <h3>Our Departments</h3>
        </div>
        <div class="row"">
            <div class="col-md-3">
                <i class="fa fa-bullseye" aria-hidden="true"></i>

                <h3>MARKETING</h3>
                  <h5>Digital Marketing Specialist</h5>
                  <h5>SEO Specialist</h5>
                  <h5>Marketing Analyst</h5>
                   <a>Read More</a>

            </div>
            <div class="col-md-3">
                <h3>BD</h3>
                <h5>Digital Marketing Specialist</h5>
                <h5>SEO Specialist</h5>
                <h5>Marketing Analyst</h5>
                <a>Read More</a>
            </div>
            <div class="col-md-3">
                <h3>FINANCE</h3>
                <h5>Digital Marketing Specialist</h5>
                <h5>SEO Specialist</h5>
                <h5>Marketing Analyst</h5>
                <a>Read More</a>
            </div>

            <div class="col-md-3">
                <h3>PAID INTERNS</h3>
                <h5>Digital Marketing Specialist</h5>
                <h5>SEO Specialist</h5>
                <h5>Marketing Analyst</h5>
                <a>Read More</a>
            </div>

        </div>
    </div>
</div>


<div class="arrow-down">

</div>

<!--PHONE SEC -->
<div class="footer-contact jumbotron">
    <div class="container">
        <div class="row">
            <h3>Did not find your answer?</h3>
            <h3>Just call at <span> (617)-577-7770 </span> for emergency service</h3>
        </div>
    </div>
</div>




<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>


<script>
    /*  $(document).ready(function(){


     $(".panel.panel-default a").click(function(){
     //alert("TEt");
     $(this).css("text-decoration","none");
     $(".panel-heading").css({"background":"white","color":"black"});
     $(".panel-heading i").removeClass("fa-minus-circle").addClass("fa-plus-circle").css("color","#ff3e68");

     $(this).parent().parent().css({"background":"#ff3e68","color":"white"});
     $(this).prev().addClass("fa-minus-circle").removeClass("fa-plus-circle").css("color","white");


     })


     })*/
</script>


<script>
    <!-- Script to activate the carousel -->
    $('.carousel').carousel({
        interval: false; //changes the speed
    })





</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/accordian.js"></script>



</body>
</html>