<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model G20 Webinar Application| Knovva </title>

    <!-- Program -->
    <link rel="stylesheet" href="css/model-g20-webinar.css">
</head>

<style>



    .video-wrapper >div.text-container {
        position: absolute;
        width: 100%;
        z-index: 0;
        text-align: center;
        top: 18%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }


    @media only screen and (max-width: 769px) {
        div.video-wrapper {


            background: #d1d1d1;
        }

        body > div.video-wrapper > div.text-container > div > h1 {
            font-size: 20px;
        }

        .video-wrapper > div.text-container {
            top: -4%;

        }

        .video-container {
            width: 100%;
            height:inherit;
            top: 0%;
            left: 0%;
            overflow: hidden;
            object-fit: contain;
            margin-bottom: 48px;
            margin-top: 0.5vh;
        }
    }

</style>

<?php
// include header
include "header.php";
?>
<body>

<!--CS-->
<div class="video-wrapper">
    <div class="video-container">
        <video preload="auto" autoplay="autoplay" loop ="loop" src="video/g20-landing2.mp4"  poster="video/video-cover.png" width="100%" muted >
        </video><!-- end of video-->
    </div> <!-- end of video container-->

    <div class="text-container" id="video-text"style="">
        <div class="container intro-text">
            <h1 style="text-align: center;">Model G20 Webinar Application</h1>
            <a style="text-align: center; " href="program-g20summer.php">More Details</a>
        </div>
    </div>
</div>

<!-- body part -->
<div class="main">
    <div class="container">
        <h1>Model G20 Summer Program Webinar Registration</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li><b>Subject: </b>Political Science & Sustainability</li>
                    <li><b>Time: </b>July 31 – Aug 13, 2017</li>
                    <li><b>Location: </b>Political Science & Sustainability</li>
                    <li><b>Grades: </b>9 – 12</li>
                </ul>
                <p>Interested in attending our Model G20 Summer program? Have questions about the program and itinerary? Join us for a webinar and we will answer all of your questions about our Model G20 Program: Global Sustainability in Action. We’ll also release an exclusive discount code for webinar attendees!
                </p>
                <p><b>Learn about:</b></p>
                <ul>
                    <li>Program Curriculum & Design</li>
                    <li>Day-to-Day Schedule</li>
                    <li>Events, Highlights, and Speakers</li>
                    <li>Risk Management, Safety, and Medical Concerns</li>
                </ul>

                <p>Can’t make it? No worries! Register and we’ll send you a link to the recording.
                </p>
            </div>


            <div class="col-md-5 col-md-offset-1"> <!--HB FORM EMBED-->

                <!--[if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: '3274947',
                        formId: '6a6059e4-c1ee-4b9a-8fd5-3a0474223eda'
                    });
                </script>



            </div>
        </div>
    </div>
</div> <!--body parts end-->



<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>

</body>
</html>