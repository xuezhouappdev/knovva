<?php

/*function authenticate() {
    if($_SERVER['PHP_AUTH_USER'] !=='admin' && $_SERVER['PHP_AUTH_PW'] !=='admin' ) {

        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo "error";
        exit;
    }

}

authenticate();*/

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
<body>

<?php
include "header.php";


?>




<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <h5>ALL   ABOUT</h5>
              <h2>THE WORLD’S BEST EDUCATION IN OUR UNIVERSITY</h2>
                <h4>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
                <a href="about.php">KNOW MORE</a>
            </div>


            <div class="col-lg-6" align="center">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/tkA69Yh5j2M"  allowfullscreen ></iframe>
            </div>
        </div>
    </div>

</div>

<!--Program -->
<div class="program jumbotron">
   <div class="container">
       <div class="row">
           <h2>OUR <span>PROGRAMS</span></h2>
       </div>


       <div class="row program-pic ">
           <div class="col-md-3">
               <img src="image/home/SIE_1.jpg" class="img-responsive">
               <h3>Social Innovation and Entrepreneurship</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
               <a href="program_sie.php">VIEW DETAILS</a>
           </div>

           <div class="col-md-3">
               <img src="image/home/techlab1.jpg" class="img-responsive">
               <h3>Tech-Lab Youth Bootcamp</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
               <a href="program_tech.php">VIEW DETAILS</a>
           </div>

           <div class="col-md-3">
               <img src="image/home/start-up1.jpg" class="img-responsive">
               <h3>Start-up Youth Bootcamp</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
               <a href="program_startup.php">VIEW DETAILS</a>
           </div>

           <div class="col-md-3">
               <img src="image/cl-4.png" class="img-responsive">
               <h3>Coming <br> Soon</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
               <a>VIEW DETAILS</a>
           </div>
       </div>
   </div>




</div>



<!--Testimony-->
<div class="tesimony">
    <div class="container">
        <div class="row">
            <h5>Happy Students</h5>
            <h2>TESTIMONIALS</h2>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/profile-img1.jpg" class="img-circle">
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et </p>
                <h6><span>Jay Chou.</span><i>&nbspCEO apple Inc</i></h6>
            </div>
            <div class="col-md-2">
                <img src="image/profile-img2.jpg" class="img-circle">
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et </p>
                <h6><span>Heyden Bea.</span><i>&nbspCTO startbucks Inc</i></h6>
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

        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row teacher-pic ">
                <div class="col-md-3">
                    <img src="image/teachers/Abby.jpg" class="img-responsive">
                    <h5>Frist Name Last Name<span> -Teacher</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>

                    <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <a>VIEW DETAILS</a>
                </div>

                <div class="col-md-3">
                    <img src="image/teachers/pat.jpg" class="img-responsive">
                    <h5>Frist Name Last Name<span> -Teacher</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit</p>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <a>VIEW DETAILS</a>
                </div>

                <div class="col-md-3">
                    <img src="image/teachers/Ross.jpg" class="img-responsive">
                    <h5>Frist Name Last Name<span> -Teacher</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <a>VIEW DETAILS</a>
                </div>

                <div class="col-md-3">
                    <img src="image/teachers/Muhammet_Bas.png" class="img-responsive">
                    <h5>Frist Name Last Name<span> -Teacher</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <a>VIEW DETAILS</a>
                </div>
            </div>
                </div>

                <div class="item">
                    <div class="row teacher-pic ">
                        <div class="col-md-3">
                            <img src="image/teachers/pat.jpg" class="img-responsive">
                            <h5>Frist Name Last Name<span> -Teacher</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>

                            <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            <a>VIEW DETAILS</a>
                        </div>

                        <div class="col-md-3">
                            <img src="image/teachers/pat.jpg" class="img-responsive">
                            <h5>Frist Name Last Name<span> -Teacher</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit</p>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            <a>VIEW DETAILS</a>
                        </div>

                        <div class="col-md-3">
                            <img src="image/teachers/pat.jpg" class="img-responsive">
                            <h5>Frist Name Last Name<span> -Teacher</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            <a>VIEW DETAILS</a>
                        </div>

                        <div class="col-md-3">
                            <img src="image/teachers/pat.jpg" class="img-responsive">
                            <h5>Frist Name Last Name<span> -Teacher</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit </p>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            <a>VIEW DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>






    </div>




</div>




<!-- POST -->
<div class="post">
    <div class="container">
        <div class="row">
            <h2>Recent News</h2>
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
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">1</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
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
                                    <img class="img-responsive" src="http://placehold.it/350x150">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x150">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x150">
                                    <p><a href="#">2</a></p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="http://placehold.it/350x150">
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
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">3</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="http://placehold.it/350x150">
                                <p><a href="#">3</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<!-- Partner -->
<div class="partner">
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