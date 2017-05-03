

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teen Programs - Education | Knovva </title>


    <!-- cutome CS -->
    <link rel="stylesheet" href="css/index_new.css">

    <!-- Google KeyWord -->
    <meta name="keywords" content="teen programs, blended learning boston, online learning site, pre college programs, pre-college programs, global education" />



</head>
<?php
include "header.php";
?>

<body>




<!-- top slider -->
<div id="myCarousel" class="carousel slide home-slider" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner home-slider" role="listbox">


        <div class="item active" style='
        background: url("image/skyatlas2.jpeg") center center no-repeat;
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
                    color: white;'>
                <h1 style="font-size:30px;text-shadow: 5px 5px 10px rgba(0,0,0,0.68);text-transform: uppercase;line-height: 40px">Modern Global Education Programs</h1>
                <h4>Together, we can reinvent education for the 21st century</h4>
                <a href="programs">DISCOVER MORE</a>
            </div>
        </div>



         <script>
             $(document).ready(function(){
                 $("#downbutton").on('click', function(event) {

                     if(this.hash !=="") {
                         event.preventDefault();

                         var hash = this.hash;

                         $('html, body').animate({
                             scrollTop: $(hash).offset().top - 80
                         }, 800, function(){

                             // Add hash (#) to URL when done scrolling (default click behavior)
                             window.location.hash = hash;
                         });
                     } //end if
                 });


             })

         </script>

    </div>

    <div class="row textwrapper" style="">

            <h4 >Scroll For More</h4>
            <h5 style=""><a href="#programs" id="downbutton"><i class="fa fa-chevron-down animated infinite fadeInUp" aria-hidden="true"></i></a></h5>

    </div>




</div>



<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h5 style="opacity: 0">ALL   ABOUT</h5>
              <h2>Discover the Possibilities with Knovva Academy</h2>
<!--                <h4>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>-->
                <p>Knovva Academy is inspired by the opportunity to prepare the next generation of young people to become engaged learners who pursue their own passions. Knovva Academy believes that by crossing national, cultural, and disciplinary boundaries, young people will increase their capacities to engage with real-world challenges, and ready themselves to be proactive thinkers and doers in the twenty-first century.

                </p>
                <a href="about">DISCOVER PROGRAMS</a>
            </div>


            <div class="col-md-6" align="center">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/wQxpjRl6gvA?autoplay=0&showinfo=0"  ></iframe>
            </div>
        </div>
    </div>

</div>



<!--  program -->
<div class="programnew jumbotron" id="programs">
    <div class="container">

        <div class="row">
            <h2>OUR <span>PROGRAMS</span></h2>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">

                <div class="card" style='background: url("image/home/home-program1.jpg") center center no-repeat ;background-size: cover; '>

                    <h3>Summer Programs</h3>
                    <p>Knovva Academy provides a variety of two-week long programs in the summer, where you will be able to master new skills, make new friends, create lasting memories, and explore the beautiful city of Boston.
                    </p>

                    <div class="btnwrapper" >
                        <br>
                        <br>
                        <a href="programs">Read More</a>
                    </div>
                </div>
            </div>


            <div class="col-md-5 ">
                <div class="card" style='background: url("image/home/home-program2.jpg") center center no-repeat;background-size: cover; '>

                    <h3>Online Programs</h3>
                    <p>Knovva Academy provides a blend of interactive online and in-person courses that introduce topics outside of the school curriculum and connects you with other students around the world.
                    </p>
                    <div class="btnwrapper">
                        <br><br>
                        <a href="programs.php#onlineprogram" id="onlinebutton">Read More</a>
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
                    <img class="img img-responsive " src="image/home/home-benefit.png">
                    <h4><b>Innovative and Interactive Courses</b></h4>
                    <p>Pursue what you love and choose from a variety of fun and engaging courses or blended learning experiences. Learn beyond the school curriculum and discover new ideas and concepts and develop skills for the twenty-first century.

                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benefit2.png" >
                        <h4><b>International Student Base</b></h4>
                        <p>You will be able to meet many students coming from all over the world, including many parts of North America, South America, and Asia. This is your chance to become a global citizen and build friendships that will last a lifetime.

                        </p>
                </div>
            </div>



            <div class="col-sm-4" >
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benifit3.png" >
                    <h4><b>Student Care</b></h4>
                    <p>We ensure a safe space for your ideas and always provide attentive assistance with students and parents, before, throughout, and after our programs.
                    </p>
                </div>
            </div>




        </div>

    </div>
</div>



<div class="testimonial section">

    <div id="myCarousel2" class="carousel slide home-slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel2" data-slide-to="1"></li>
            <li data-target="#myCarousel2" data-slide-to="2"></li>
            <li data-target="#myCarousel2" data-slide-to="3"></li>
        </ol>

        <h4 style="">- WHAT OUR STUDENTS SAY - </h4>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">



            <div class="item active">
                <div class="container">


                    <div class="row">

                        <h4>"Seeing how much I liked this program, I predict other Knovva Academy programs would be just as good or even better." <br><br>
                            <h5>- Participant from Boston Latin School</h5>
                        <br>

                    </div>
                </div>

            </div>

            <div class="item">
                <div class="container">

                    <div class="row">



                        <h4>"They made learning fun and exciting! Knovva Academy showed something different, a different style of learning and discovering new concepts." </h4>
                        <h5>- Participant from Fenway High School</h5><br>


                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">

                    <div class="row">
                        <h4>"I had an awesome experience and got the chance to improve myself. I will take any opportunities to enrich my life with Knovva Academy." </h4>
                        <h5>- Participant from Liuzhou High School</h5><br>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">

                    <div class="row">


                        <h4>"I’m always trying to find programs to improve myself because I want to make an impact to the world or the people around me. At Knovva Academy, I got to develop new practical skills, build connection with different cultures, and understand the responsibility of being a global citizen. Thank you everyone." </h4>
                        <h5>- Participant from Dalian No. 24 High School</h5>


                    </div>
                </div>
            </div>


        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev" style="background: transparent">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next" style="background: transparent">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



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
                                <img class="img-responsive img img-thumbnail" src="image/post/cambridge.jpg">
                                <p><a href="http://finance.yahoo.com/news/cambridge-education-foundation-attracts-big-120100747.html">Cambridge Education Foundation Attracts Big Names and International Students</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/fenway.jpg">
                                <p><a href="http://www.fenwayhs.org/2017/02/28/fenway-students-at-2017-model-g20-summit/">Fenway Students at 2017 Model G20 Summit</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/5g20.jpg">
                                <p><a href="http://www.bls.org/apps/news/show_news.jsp?REC_ID=442233&id=10">Five Students Participate in Model G20 Summit</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/triptochina.jpg">
                                <p><a href="http://www.modelg20.org/single-post/2016/12/12/Our-Inspiration-Trip-to-China">Our Inspirational Trip to China</a></p>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="item">-->
<!--                    <!-- Set the second background image using inline CSS below. -->
<!--                    <div class="container">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <!-- Set the third background image using inline CSS below. -->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

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
            <a href="applicationform">ENROLL NOW</a>
        </div>
    </div>
</div>



<!-- Footer -->
<?php
include ("footer.php");
?>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 8790441;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<!-- End of LiveChat code -->



</body>
</html>