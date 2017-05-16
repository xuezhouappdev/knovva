<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Programs - The Harry Potter Reading Group   | Knovva
    </title>

    <link rel="stylesheet" href="vendor/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program -->
    <link rel="stylesheet" href="css/program_template.css">
    <link rel="stylesheet" href="vendor/sweetalert/sweetalert.css">

    <!-- sweet alert-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>


    <meta name="keywords" content="harry potter fan, harry potter reading group, harry potter online, harry potter high school, harry potter class, harry potter and sorcerer's stone" />


</head>


<?php
// include header
include "header.php";
?>

<body>

<!--CS-->
<div class="intro section" id="banner" style="background:url('image/program/hary.jpg'); background-size: cover;width: 100%;
    background-position: bottom;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="intro-text">
                <h1>The Harry Potter Reading Group</h1>
                <a href="#">ENROLL NOW</a>
            </div>
        </div>

    </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="programs.php">Program</a></li>
            <li><a href="#">The Harry Potter Reading Group</a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>The Harry Potter Reading Group </h4>
                <hr>
                <p>The Harry Potter Reading Group is an online reading group for high school students and Harry Potter fans interested in engaging with the novel series together under academic and literary guidance. Students will explore relevant sources of history and literature to enhance their creative and analytical thinking along side their familiarity with the imaginative and cultural constructions that led to the creation of this series. Through reading, multimedia, and discussion participants will learn about literary analysis and delve into the themes and ideas of this well-loved series.<br><br>

                    Students will spend twelve weeks reading Harry Potter and the Sorcerer’s Stone. Designed for students of intermediate to advanced English skills, additional reading will be available for advanced students to engage in critical scholarship on Rowling’s writing and in the fantastical - Harry Potter series.</p>
            </div>
            <div class="col-md-5" >
                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">



                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;&nbsp;SUBJECT: </b>Literature, Fiction</p>
                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;LOCATION: </b>Cambridge, MA, USA&nbsp;|&nbsp;Summer 2017</P>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"> </i>&nbsp;&nbsp;GRADES: </b>9 - 12</p>



<!--                <a data-toggle="modal" data-target="#myModal" > >>VIEW AGENDA</a>-->

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
                                <li><b>Week 1: </b><br>The College Landscape: Understanding the Types of Universities Out There</li>
                                <li><b>Week 2: </b><br>Business Tracks</li>
                                <li><b>Week 3: </b><br>Social Science Tracks</li>
                                <li><b>Week 4: </b><br>Humanities & Arts Tracks</li>
                                <li><b>Week 5: </b><br>Engineering Tracks</li>
                                <li><b>Week 6: </b><br>Math & Computer Science Tracks</li>
                                <li><b>Week 7: </b><br>Science Tracks</li>
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
                <img src="image/icon/icon-experience.png" class="img img-responsive">
                <h4><Span>Expand</Span>&nbsp;your English reading abilities


                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-polish.png" class="img img-responsive">
                <h4><Span>Polish</Span>&nbsp;your analytical skills




                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-learn.png" class="img img-responsive">
                <h4><Span>Learn</Span>&nbsp;about literature, history and contemporary culture




                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-connect.png" class="img img-responsive">
                <h4><Span>Read</Span>&nbsp with a community of students, passionate about reading and Harry Potter




                </h4>
            </div>


        </div>
    </div>
</div>



<!-- CTA-->
<div class="calltoaction section">
    <div class="container">
        <div class="row">
            <h2>Start learning with Knovva Academy.
            </h2>
            <p><i>We’ll help you every step of the way.</i></p>
            <a href="#">ENROLL NOW</a>
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
<script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>