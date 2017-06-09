<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model G20 Application|Knovva </title>

    <!-- Program -->
    <link rel="stylesheet" href="css/model-g20-video.css">
</head>

<style>

    #itinarey li {
        display: inline-block;
        float: none;
    }


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
            <h1 style="text-align: center;">Model G20 Summer Program Application</h1>
            <a style="text-align: center; " href="program-g20summer.php">More Details</a>
        </div>
    </div>
</div>

<!-- body part -->
<div class="main">
    <div class="container">
        <h1>Be a 21st Century Global Citizen</h1>
        <div class="row">
            <div class="col-md-6">
                <p>Join like-minded high-school students from around the world for the Model G20 Summer Program in Qingdao, China. Together you'll discover modern China and see how your ideas can change the face of buinesses and sustanability in the area through feild studies and hands-on projects. <br><br>Expanding your horizons to China means that you will not only learn about buisness and sustanability from a different vantage point, but you'll also build your cultural repertoire, boosting cross-cultural communication skills - a must-have for employers today. </p>
                <p><b>Build 21st Century Skills through Hands-On Learning in China</b></p>
                <ul>
                    <li>Language Development and Cross-Cultural Communication Skills</li>
                    <li>International Networking</li>
                    <li>Learn about Global Sustainability and Policy </li>
                    <li>Boost Research & Analytical Skills</li>
                </ul>
            </div>


            <div class="col-md-6"> <!--HB FORM EMBED-->
                <!--[if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: '3274947',
                        formId: 'dac6027a-36c7-42e0-b0b5-a5f9d7cfa4f5'
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