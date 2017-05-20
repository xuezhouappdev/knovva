<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1">
    <title>Knovva Header</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="vendor/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <!-- custom css-->
    <link rel="stylesheet" href="css/header.css">


    <!--Google font-->

    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">



    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="http://www.knovva.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://www.knovva.com/favicon.ico" type="image/x-icon">





    
</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<?php include_once("analyticstracking.php") ?>



<div class="header" style="z-index: 999">
    <div class="container">
        <div class="navbar-fixed-top homepage" id="mynav">
            <div class="row">
                <a href="index.php"><img id="logo" src="image/logo-trim.png" class="img-responsive img" ></a>
                <ul id="menuitem" >
                    <li><a href="index"> Home </a></li>
                    <li><a href="about"> About </a></li>
                    <li > <!--programdropdown -->
                        <a href="programs">Programs</a>

<!--                        <div class="dropdown-content"><!--programdropdown content -->
<!--                            <a href="program-entrepreneurship"> Social Impact and Entrepreneurship </a>-->
<!--                            <a href="program-globalaffairs"> Global Affairs Institute </a>-->
<!--                            <a href="program-appliedengineering">Applied Engineering & Robotics</a>-->
<!--                            <a href="program-landscapeofstudy">Understanding the Landscape of Study</a>-->
<!--                            <a href="program-socialmedia">U.S. Social Media Use and Electronic Correspondence</a>-->
<!--                            <a href="program-harrypotter">The Harry Potter Reading Group</a>-->
<!--                            <a href="program-innotativereading">The Innovation Reading Group: Creativity and Change in the New Millennium </a>-->
<!--                            <a href="program-digitalcrossroads.php">Model G20 Summer Program</a>-->
<!--                        </div>-->
                    </li>
<!--                    <li><a href="webinar"> Webinar </a></li>-->
                    <li><a href="http://blog.knovva.com/"> Blog</a></li>
<!--                    <li><a href="career"> Career </a></li>-->
                    <li><a href="http://info.knovva.com/contact-us"> Contact </a></li>
                    <li id="dropdown"><a class="cta" style="color: white" href="http://info.knovva.com/general-application"><i class="fa fa-caret-down" aria-hidden="true"></i>&nbsp;
                                I'm interested </a>
<!--                        <div class="dropdown-content">-->
<!--                            <a href="applicationform.php">Model G20 Summer Program</a>-->
<!--                            <a href="applicationform-aer.php">Applied Engineering & Robotics</a>-->
<!--                        </div>-->
                    </li>

                    <li class="icon"><a href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                </ul>





            </div>
        </div>
    </div>


    <!--side nav-->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index">Home</a>
        <a href="about">About</a>
        <a href="programs">Programs</a>
        <a href="blog.php">Blog</a>
        <a href="contact">Contact</a>
        <a href="applicationform"><p>Enroll - Model G20 Summer Program</p></a>
        <a href="applicationform-aer"><p>Enroll - Applied Engineering & Robotics Program</p></a>

    </div>
</div>



<script>
    $(function(){
        // this will get the full URL at the address bar
        var url = window.location.href;
        // passes on every "a" tag
        $(".header ul >li:not(:nth-last-child(2)) >a").each(function() {
            // checks if its the same on the address bar
            if(url === (this.href)) {
                $(this).css({"color":"#6E539E","font-weight":"400"});
            }
        });
    });

    function openNav () {
        document.getElementById("mySidenav").style.width ="100%";
    }

    function closeNav () {
        document.getElementById("mySidenav").style.width ="0%";

    }


    //scroll to control the navigation
    $(window).scroll(function(){
        if($(document).scrollTop() > 30) {

           $('#mynav').addClass("add");
        }
        else {
            $('#mynav').removeClass("add");
        }

    });






</script>

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

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3274947.js"></script>
<!-- End of HubSpot Embed Code -->


</body>
</html>