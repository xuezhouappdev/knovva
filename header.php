<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <!-- css -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/header.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



    
</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<?php include_once("analyticstracking.php") ?>



<div class="header">
    <div class="container">

        <div class="navbar-fixed-top">
            <div class="row">



                <a href="index.php"><img id="logo" src="image/logo-trim.png" class="img-responsive img" ></a>





                <ul id="menuitem" >
                    <li><a href="index"> Home </a></li>
                    <li><a href="about"> About </a></li>


                    <li class="dropdown"> <!--programdropdown -->
                        <a class="dropbtn" href="programs">Programs</a>

                        <div class="dropdown-content"><!--programdropdown content -->
                            <a href="program-entrepreneurship"> Social Impact and Entrepreneurship </a>
                            <a href="program-globalaffairs"> Global Affairs Institute </a>
                            <a href="program-appliedengineering">Applied Engineering & Robotics</a>
                            <a href="program-landscapeofstudy">Understanding the Landscape of Study</a>
                            <a href="program-socialmedia">U.S. Social Media Use and Electronic Correspondence</a>
                            <a href="program-harrypotter">The Harry Potter Reading Group</a>
                            <a href="program-innotativereading">The Innovation Reading Group: Creativity and Change in the New Millennium </a>
                        </div>

                    </li>

                    <li><a href="blog.php"> Blog </a></li>
<!--                    <li><a href="webinar"> Webinar </a></li>-->

                    <li><a href="contact"> Contact </a></li>
                    <li><a href="applicationform" style="background: #7c5eb2;padding: 8px 16px;border-radius: 5%;color: white"><i class="fa fa-hand-o-up" aria-hidden="true"></i>&nbsp;APPLY</a></li>

                </ul>


            </div>


        </div>



    </div>

</div>






<script>
    $(function(){
        // this will get the full URL at the address bar


        var url = window.location.href;
        //alert(url)

        // passes on every "a" tag
        $(".header ul >li:not(:last-child) >a").each(function() {
            // checks if its the same on the address bar


            if(url === (this.href)) {

                $(this).css({"color":"#6e539e","font-weight":"500"});
            }
        });
    });

</script>



</body>
</html>