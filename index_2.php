<?php

function authenticate() {
    if($_SERVER['PHP_AUTH_USER'] !=='admin' && $_SERVER['PHP_AUTH_PW'] !=='22233150' ) {

        header('WWW-Authenticate: Basic realm="Only for internal use"');
        header('HTTP/1.0 401 Unauthorized');
        echo "error";
        exit;
    }

}

authenticate();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Home</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/index_new.css">



</head>
<body >


<?php
include "header.php";


?>


<!-- top slider -->
<div id="myCarousel" class="carousel slide home-slider" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>
-->
    <!-- Wrapper for slides -->
    <div class="carousel-inner home-slider" role="listbox">

        <div class="item active" style='
        background: url("image/skyatlas2.jpg") center center no-repeat;
        min-height: 110vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:32px;text-shadow: 5px 5px 10px rgba(0,0,0,0.68);text-transform: uppercase;line-height: 40px">Connect to The World,<br>Connect to Your Future.</h1>
                <a href="programs.php">DISCOVER OUR PROGRAMS</a>
            </div>

        </div>

        <!--<div class="item" style='
        background: url("image/home/home_brand4.jpg") center center no-repeat;
        min-height: 100vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:50px;">Connect to the World, Connect to Your Future</h1>
            </div>

        </div>

        <div class="item" style='
        background: url("image/home/home_brand3.jpg") center center no-repeat;
        min-height: 100vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:50px;">Connect to the World, Connect to Your Future</h1>
            </div>

        </div>-->


    </div>

    <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->

</div>



<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h5 style="opacity: 0">ALL   ABOUT</h5>
              <h2>Discover the Possibilities with Knovva Academy</h2>
<!--                <h4>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>-->
                <p>Knovva Academy is moved by the possibility of readying the next generation of
                    young people to be engaged learners pursuant of their own passions. Knovva
                    Academy believes that by crossing boundaries of nation, culture and discipline, young people will increase their capacities to engage with real-world challenges and ready themselves to be proactive thinkers and doers in the twenty-first century.

                </p>
                <a href="about.php">DISCOVER MORE</a>
            </div>


            <div class="col-md-6" align="center">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/tkA69Yh5j2M"  allowfullscreen ></iframe>
            </div>
        </div>
    </div>

</div>


<!--Program , hiden now-->
<div class="program jumbotron" style="display: none">

    <div class="container">

       <div class="row">
           <h2>OUR <span>PROGRAMS</span></h2>
       </div>


       <div id="myCarousel" class="carousel slide">

           <!-- Wrapper for Slides -->
           <div class="carousel-inner">

               <div class="item active">
                   <!-- Set the first background image using inline CSS below. -->

                   <div class="container">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="card">
                               <img class="img-responsive" src="http://placehold.it/350x200">
                               <p><a href="program-sie.php">Social Impact and Entrepreneurship</a></p>
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="card">
                                   <img class="img-responsive" src="http://placehold.it/350x200">
                                   <p><a href="program-gai.php">Global Affairs Institute</a></p>
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="card">
                                   <img class="img-responsive" src="http://placehold.it/350x200">
                                   <p><a href="program-aer.php">Applied Engineering & Robotics</a></p>
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="card">
                                   <img class="img-responsive" src="http://placehold.it/350x200">
                                   <p><a href="program_template.php">Understanding the Landscape of Study</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="item">
                   <!-- Set the second background image using inline CSS below. -->
                   <div class="container">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-3">
                                   <div class="card">
                                       <img class="img-responsive" src="http://placehold.it/350x200">
                                       <p><a href="program_sie.php">U.S. Social Media Use and Electronic Correspondence</a></p>
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="card">
                                       <img class="img-responsive" src="http://placehold.it/350x200">
                                       <p><a href="program-harrypotter.php">The Harry Potter Reading Group</a></p>
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="card">
                                       <img class="img-responsive" src="http://placehold.it/350x200">
                                       <p><a href="program-irg.php">The Innovation Reading Group: Creativity and Change in the New Millennium (Fall 2017)</a></p>
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="card">
                                       <img class="img-responsive" src="http://placehold.it/350x200">
                                       <p><a href="">Webniar</a></p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>



           </div>

           <!-- Left and right controls -->
           <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
           </a>

           <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>

       </div>
   </div>




</div>

<!--  program new -->
<div class="programnew jumbotron">
    <div class="container">

        <div class="row">
            <h2>OUR <span>PROGRAMS</span></h2>
        </div>

        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="card" style='background: url("image/home/home_brand1.jpg") '>

                    <h3>Summer Programs</h3>
                    <p>Knovva Academy provides a variety of two-week long programs in the summer, where you will be able to master new skills, make new friends, create memorable memories, and explore the beautiful city of Boston.
                    </p>

                    <div class="btnwrapper" >
                        <br>
                        <br>
                        <a href="programs.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 ">
                <div class="card" style='background: url("image/home/home_brand3.jpg") center center no-repeat '>

                    <h3>Online Programs</h3>
                    <p>Knovva Academy provides a variety of interactive online courses that introduce topics outside of the school curriculum and connects you with other students around the world.
                    </p>
                    <div class="btnwrapper">
                        <br><br>
                        <a href="programs.php#onlineprogram">Read More</a>
                    </div>
                </div>
            </div>
<!--            -->
<!--            <div class="col-sm-4">-->
<!--                <div class="card" style='background: url("image/home/home_brand6.jpg") center right no-repeat'>-->
<!---->
<!--                    <h3>Blended Learning</h3>-->
<!--                    <p>Knovva Academy provides a variety of interactive online and blended year-long courses and programs to maximize your learning, motivation and direction in your fields of interest.</p>-->
<!--                    <div class="btnwrapper">-->
<!--                        <br><br>-->
<!--                        <a href="programs.php#yearlongprogram">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>
</div>


<!--Benifit -->
<div class="benefit">
    <div class="container">
        <div class="row">
            <h2>OUR <span>BENEFITS</span></h2>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive img-circle" src="http://placehold.it/200x200" >
                        <h4><b>International Student Base</b></h4>
                        <p>You will be able to meet many students coming from all over the world, including many parts of North America, South America, and Asia. This is your chance to become a global citizen and build friendships that will last a lifetime.
                        </p>
                </div>
            </div>

            <div class="col-sm-4" >
                <div class="card">
                    <img class="img img-responsive img-circle" src="http://placehold.it/200x200" >
                    <h4><b>Customer Care</b></h4>
                    <p>We ensure a safespace for your ideas and always provide attentive assistance with students and parents, before, throughout, and after our programs.
                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive img-circle" src="http://placehold.it/200x200">
                    <h4><b>Innovative and Interactive Courses</b></h4>
                    <p>Pursue what you love and choose from a variety of fun and engaging courses. Learn beyond the school curriculum and discover new ideas and concepts and develop skills for the twenty-first century. (all developed by Harvard alumni(?))
                    </p>
                </div>
            </div>


        </div>

    </div>
</div>

<!--Testimony-->
<!--<div class="tesimony">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <h5>Happy Students</h5>-->
<!--            <h2>CUSTOMER STORIES</h2>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-3">-->
<!--               <a href="#"><img class="img img-responsive" src="http://placehold.it/350x500"></a>-->
<!--                <h5><span>Title</span>&nbsp; Lorem ipsum dolor sit amet, elit Lorem ipsum dolor sit amet, elit</h5>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-3">-->
<!--                <a href="#"><img class="img img-responsive" src="http://placehold.it/350x500"></a>-->
<!--                <h5><span>Title</span> &nbsp; Lorem ipsum dolor sit amet, elit Lorem ipsum dolor sit amet, elit</h5>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-3">-->
<!--                <a href="#"><img class="img img-responsive" src="http://placehold.it/350x500"></a>-->
<!--                <h5><span>Title</span> &nbsp; Lorem ipsum dolor sit amet, elit Lorem ipsum dolor sit amet, elit</h5>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-md-3">-->
<!--                <a href="#"><img class="img img-responsive" src="http://placehold.it/350x500"></a>-->
<!--                <h5><span>Title</span> &nbsp; Lorem ipsum dolor sit amet,  elit Lorem ipsum dolor sit amet, elit</h5>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->






<!-- POST -->
<div class="post ">
    <div class="container">
        <div class="row">
            <h2>RECENT <span>NEWS</span></h2>
        </div>

        <!--slider-->
        <div id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">1</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x200">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x200">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x200">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x200">
                                    <p><a href="#">2</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x200">
                                <p><a href="#">3</a></p>
                            </div>
                        </div>
                    </div>
                </div>

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


<!-- Partner -->
<!--<div class="partner">
  <div class="container">
      <div class="row">
         <div class="col-md-2">
             <img src="image/p1.png" class="img-responsive img-circle">

         </div>
          <div class="col-md-2">
              <img src="image/p2.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p3.png" class="img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p4.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p5.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p6.png" class=" img-responsive img-circle">

          </div>
      </div>
  </div>
</div>
-->

<!-- Footer -->
<?php
include ("footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!--This is for old version-->
<script src="js/index.js"></script>
<script src="js/index-subscription.js"></script>



</body>
</html>