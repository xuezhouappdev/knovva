<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> About
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program base CSS-->
    <link rel="stylesheet" href="css/about.css">

    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>


    <!--<!-- Counter-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script>
        $(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>


</head>


<?php
// include header
include "header.php";
?>

<body>




<!--Header-about-->
<div class="header-about">
    <div class="container">
        <div class="row">
            <h1>About</h1>
        </div>
    </div>

</div>


<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Who We Are</h3>
            </div>
            <div class="col-md-8">
                <p>
                    Knovva Academy is a cross-cultural education company located in Cambridge, Massachusetts that specializes in providing top-quality project-based immersive learning experiences in STEAM (science, technology, engineering, arts, mathematics) subjects to aspiring students all around the world.

                    Academia – Face-to-face with the best professors to prepare for higher education.

                    Diversity – Cross-cultural interaction with international peers to nurture global vision.

                    Experience – Hands-on project development to cultivate problem-solving skills.

                    Community – Life-long friends and mentors to pave future career paths.</p>
            </div>

            <div class="col-md-4">
                <h3>What We Value</h3>
            </div>
            <div class="col-md-8">
                <ul>
                    <li><span>Academia - </span>Face-to-face with the best professors to prepare for higher education.</li>
                    <li><span>Diversity – </span>Cross-cultural interaction with international peers to nurture global vision.</li>
                    <li><span>Experience –</span>Hands-on project development to cultivate problem-solving skills.</li>
                    <li><span>Community</span>Life-long friends and mentors to pave future career paths.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<!--Counter-->
<div class="counter-div">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            </div>
            <div class="col-md-3">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            </div>
            <div class="col-md-3">
                <i class="fa fa-book" aria-hidden="true"></i>

            </div>
            <div class="col-md-3">
                <i class="fa fa-trophy" aria-hidden="true"></i>

            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <span class="counter">5248</span>
            </div>
            <div class="col-md-3">
                <span class="counter">675</span>
            </div>
            <div class="col-md-3">
                <span class="counter">248</span>

            </div>
            <div class="col-md-3">
                <span class="counter">24</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h5>HAPPY STUDENTS</h5>
            </div>
            <div class="col-md-3">
                <h5>OUR COURSES</h5>
            </div>
            <div class="col-md-3">
                <h5>OUR TEACHERS</h5>
            </div>
            <div class="col-md-3">
                <h5>AWARDS WON</h5>
            </div>
        </div>
    </div>
</div>


<!-- Features-->
<div class="feature">
    <div class="container">
        <h2>What We Provide</h2>

        <div class="row">
            <div class="col-md-6">
                <h4>Featured Program</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Social Innovation and Entrepreneurship</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tech-Lab Youth Bootcamp</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Start-up Youth Bootcamp</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="image/about/global.png" class="img img-responsive">

                    </div>
                    <div class="col-md-8">
                        <h4>GET GLOBAL</h4>
                        <ul>
                            <li>Build networks with international students and teachers</li>
                            <li>Learn how to communicate on a global level</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="image/about/college.png" class="img img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>GET READY FOR COLLEGE</h4>
                        <ul>
                            <li>Customized based on interests </li>
                            <li>Strengthen the creative thinking process</li>
                            <li>Hands-on development</li>
                            <li>Student to teacher ratio at 6:1</li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <img src="image/tech/wear.png" class="img img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>AND BEYOND</h4>
                        <ul>
                            <li>Discover true passion and drive before college </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>






    </div>
</div>



<!--Teacher-->
<div class="teacher jumbotron">
    <div class="container">
        <div class="row">
            <h2>OUR <span>TEACHERS</span></h2>
        </div>


        <div class="row teacher-pic ">
            <div class="col-md-3">
                <img src="image/profile-img1.jpg" class="img-responsive">
                <h5>Frist Name Last Name<span> -Teacher</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>

                <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <a>VIEW DETAILS</a>
            </div>

            <div class="col-md-3">
                <img src="image/profile-img1.jpg" class="img-responsive">
                <h5>Frist Name Last Name<span> -Teacher</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit</p>
                <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <a>VIEW DETAILS</a>
            </div>

            <div class="col-md-3">
                <img src="image/profile-img1.jpg" class="img-responsive">
                <h5>Frist Name Last Name<span> -Teacher</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <a>VIEW DETAILS</a>
            </div>

            <div class="col-md-3">
                <img src="image/profile-img1.jpg" class="img-responsive">
                <h5>Frist Name Last Name<span> -Teacher</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <a>VIEW DETAILS</a>
            </div>
        </div>
    </div>




</div>


<!--Benifits -->
<div class="benefit">
    <div class="container">
       <div class="row" >
      <h2 >Additional Benefits</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="image/start-up/fun.png" class="img img-responsive">
                <p><i>Fun</i></p>
                <h5>All Activities and Meals Included</h5>
            </div>

            <div class="col-md-3">
                <img src="image/start-up/philan.png" class="img img-responsive">
                <p><i>Philanthropy</i></p>
                <h5>Community Service-give back and boost your resume.
                </h5>
            </div>
            <div class="col-md-3">
                <img src="image/start-up/prize.png" class="img img-responsive">
                <p><i>Prizes</i></p>
                <h5>Best start-up idea wins $1000</h5>
            </div>

            <div class="col-md-3">
                <img src="image/start-up/oppo.png" class="img img-responsive">
                <p><i>Opportunity</i></p>
                <h5>Opportunities to meet with real investors.</h5>
            </div>
        </div>
    </div>
</div>










<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>









</body>
</html>