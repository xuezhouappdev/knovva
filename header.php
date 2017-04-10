<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    
</head>
<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<?php include_once("analyticstracking.php") ?>

<!--Header-->
<div class="header">
    <div class="container">

        <div class="navbar-fixed-top">
          <div class="row">



              <a href="index.php"><img id="logo" src="image/logo-trim.png" class="img-responsive img" ></a>





                <ul id="menuitem" >
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="about.php"> About </a></li>


                    <li class="dropdown"> <!--programdropdown -->
                        <a class="dropbtn" href="programs.php">Programs</a>

                        <div class="dropdown-content"><!--programdropdown content -->
                            <a href="program-entrepreneurship.php">Social Innovation and Entrepreneurship </a>
                            <a href="program-globalaffairs.php">Global Affairs Institute </a>
                            <a href="program-appliedengineering.php">Applied Engineering & Robotics</a>
                            <a href="program-landscapeofstudy.php">Understanding the Landscape of Study</a>
                            <a href="program-socialmedia.php">U.S. Social Media Use and Electronic Correspondence</a>
                            <a href="program-harrypotter.php">The Harry Potter Reading Group</a>
                            <a href="program-innotativereading.php">The Innovation Reading Group: Creativity and Change in the New Millennium </a>



                        </div>

                    </li>
<!--                    <li><a href="blog.php"> Blog </a></li>-->
<!--                    <li><a href="#"> Teacher </a></li>-->

                   <!-- <li><a href="gallery.php" class="disabled"> Gallery </a></li>-->
                  <!--  <li><a href="career.php"> Career </a></li>-->
<!--                    <li><a href="blog/" target="_blank"> Blog </a></li>-->

                    <li><a href="contact.php"> Contact </a></li>
                    <li><a href="applicationform.php" style="border: solid 2px #f0f9f6;padding: 3px 12px 5px">Apply</a></li>
                 <!--   <li><a href="faq.php"> FAQ </a></li>-->
                   <!-- <li> <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>-->


                </ul>


          </div>

        </div>

    </div>

</div>

<!-- overlay -->

<div class="subscribe-overlay" id="myNav" style="display: none">
    <div class="container">
        <div class="row">
            <a><i class="fa fa-times" id="crosssign" aria-hidden="true"></i></a>
        </div>

        <div class="row">
            <div class="sb-input">



                <div class="overlay-content">

                    <form  method="post" id="header_subscribeform">

                           <div class="input-group middle">
                               <div class="row" style="text-align: left">
                                   <h5 id="noti" style="color: white"></h5>
                               </div>

                               <div class="row" style="display: inherit">
                                   <input type="email" class="form-control" placeholder="Your Email" name="header_email">
                                   <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" id="subscribbtn" name="submit" >Subscribe</button>
                                   </span>
                               </div>

                               <script src="js/header-subscribe.js"></script>
                           </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!--<script src="js/index.js"></script>-->
<script src="js/index-subscription.js"></script>

<script>
    $(function(){
        // this will get the full URL at the address bar


        var url = window.location.href;
        //alert(url)

        // passes on every "a" tag
        $(".header ul >li >a").each(function() {
            // checks if its the same on the address bar


            if(url === (this.href)) {

                $(this).css({"color":"#F2184F ","font-weight":"500"});
            }
        });
    });

</script>

</body>
</html>