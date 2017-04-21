
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Video| Knovva </title>






    <?php
    include "header.php";
    ?>

    <!-- CS -->
    <link rel="stylesheet" href="css/livestream.css">

    <!--ainimate -->
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <!-- lightbox -->
    <link rel="stylesheet" href="vendor/fancybox-3.0/dist/jquery.fancybox.min.css" />
    <script src="vendor/fancybox-3.0/dist/jquery.fancybox.js"></script>



    <!-- Google KeyWord -->
    <meta name="keywords" content="" />



</head>
<body >





<!-- banner -->
<div class="outmost">
    <div class="banner section" style="opacity: 1">

        <div class="herotext">
            <h1>Live Webinar</h1>
            <a id="play">PLAY NOW</a>

            <!--control the video-->
            <script>
                $("#play").click(function(){


                    $(".banner.section").animate({
                        opacity: 0},1000)
                });

            </script>

        </div>


    </div>

    <!-- Live-->
    <div class="live section" style="position: absolute;top:60px;z-index: -1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height: 100vh">
                    <h5>Now Playing: </h5>
                    <!--             <iframe class="video" width="100%" height="600" src="https://www.youtube.com/embed/9aaMnIRkK3k$showinfo=0" frameborder="1" allowfullscreen></iframe>-->
                    <embed height="75%" width="100%" quality="high" allowfullscreen="true" type="application/x-shockwave-flash" src="//static.hdslb.com/miniloader.swf" flashvars="aid=9641357&page=1" pluginspage="//www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"></embed>

                </div>

            </div>
        </div>
    </div>

</div>





<hr>
<!-- History-->
<div class="history section">
    <div class="container">
        <h3>Past Webinars</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">

                        <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">

                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/sample.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="//static.hdslb.com/miniloader.swf?aid=9641357&page=1"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                    <img class="img img-responsive" src="image/webinar/dummy.jpg">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 Delegate Orientation</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Watch Playback</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>



<!-- Footer -->
<?php
include ("footer.php");
?>




</body>
</html>