<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model G20 Webinar Application| Knovva </title>

    <!-- Program -->
    <link rel="stylesheet" href="css/model-g20-webinar2.css">
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



<!-- body part -->
<div class="main" >
    <div class="container">
        <h1>Model G20 Summer Program Onboarding Webinar </h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li><b>Subject: </b>Political Science & Sustainability</li>
                    <li><b>Program Date: </b>Aug 1 – Aug 13, 2017</li>
                    <li><b>Location: </b>Beijing, China  |  Qingdao, China </li>
                    <li><b>Time: </b> 9:00 AM - 9:45 AM (EST) Jul 14th </li>
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


            </div>


            <div class="col-md-5 col-md-offset-1"> <!--HB FORM EMBED-->

                <!--[if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: '3274947',
                        formId: '92042836-beee-4c70-99c5-cfd235c06057'
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