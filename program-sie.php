<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> U.S. Social Media Use and Electronic Correspondence (Summer 2017)
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program -->
    <link rel="stylesheet" href="css/program_template.css">
    <link rel="stylesheet" href="dist/sweetalert.css">

    <!-- sweet alert-->
    <script src="dist/sweetalert.min.js"></script>



</head>


<?php
// include header
include "header.php";
?>

<body>

<!--CS-->
<div class="intro section" id="banner" style="background:url('image/program/sie.jpg');  background-size: cover;width: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="intro-text">
                <h1>Social Impact and Entrepreneurship</h1>
                <a href="applicationform.php">ENROLL NOW</a>
            </div>
        </div>

    </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index_2.php">Home</a></li>
            <li><a href="programs.php">Program</a></li>
            <li><a href="#">Social Impact and Entrepreneurship</a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>Social Impact and Entrepreneurship</h4>
                <hr>
                <p>Social Impact and Entrepreneurship is a year-round program designed to help 9th - 12th
                    graders from around the world develop a deeper understanding of international social issues
                    and students’ own capacities to make meaningful impact. SIE will run in three parts in the
                    summer, winter and spring.
                    <br><br>
                    In a two-week summer session, in Cambridge, MA, students will participate in a practicum to
                    learn the fundamentals of social impact and entrepreneurship that can be directed to a social or environmental challenge of their interest. Students will form teams, study a pressing
                    challenge, and begin the process of programmatic launch. During the winter session, students
                    will spend a week in Nanjing, China for a culturally immersive experience and case-study,
                    taking field trips with regional experts to learn about the social and environmental reality of
                    the region. After the trip, online courses will be offered to explore social
                    Entrepreneurship and innovation around the world. Students will collaborate through digital technologies for a final project release in the Spring of 2018. </p>
            </div>
            <div class="col-md-5" >

                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">

                        <p><b><i class="fa fa-calendar-o " aria-hidden="true"> </i>&nbsp;&nbsp;TIME: </b>2017</p>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"> </i>&nbsp;&nbsp;AGE: </b>Year 14 -18</p>

                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;&nbsp;SUBJECT: </b>Business</p>

                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;LOCATION: </b>Boston, MA</P>
<!--                        <a data-toggle="modal" data-target="#myModal" >>> VIEW AGENDA</a>-->
                    </div>


                </div>
                </div>





            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">

                    <!-- agender content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">AGENDA</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="agenda">
                                <li><b>Week 1: </b><br>Introduction to US Social Media</li>
                                <li><b>Week 2: </b><br>The Art of Informal Electronic Communications </li>
                                <li><b>Week 3: </b><br>Professionalism</li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>
</div>

<!-- FEATURES-->
<div class="features section">
    <div class="container">
        <div class="row">
            <h2>YOUR EXPERIENCE INCLUDES</h2>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <img src="image/icon/icon-understand.png" class="img img-responsive">
                <h4><Span>Understand</Span>&nbsp;social and environmental challenges around the world
                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-connect.png" class="img img-responsive">
                <h4><Span>Connect</Span>&nbsp;with a peer network passionate about making a difference

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-strength.png" class="img img-responsive">
                <h4><Span>Strengthen</Span>&nbsp;your ability to work collaboratively on a long-term project

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-experience.png" class="img img-responsive">
                <h4><Span>Experience</Span>&nbsp;formative time in the two important hubs of Cambridge, MA, USA and Nanjing, Jiangsu, China


                </h4>
            </div>


        </div>
    </div>
</div>



<!-- CTA-->
<div class="calltoaction section">
    <div class="container">
        <div class="row">
            <h2>Start learning with Knovva Academy.</h2>
            <p><i>We’ll help you every step of the way.</i></p>
            <a href="applicationform.php">ENROLL NOW</a>
        </div>
    </div>
</div>





<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>






<!--<script>
    swal({
        title: "Error!",
        text: "Here's my error message!",
        type: "error",
        confirmButtonText: "Cool"
    });
</script>-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>