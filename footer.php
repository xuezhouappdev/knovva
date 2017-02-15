<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KNOVVA footer</title>



    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">


</head>
<body>

<div class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="image/logo.png"  class="img-responsive">
            </div>
            <div class="col-lg-4">
                <h4>Links</h4>
            </div>
            <div class="col-lg-4">
                <h4>Operating Hours</h4>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 footer-address">


                <ul>
                    <li> <P>222 3rd Street, Suite 3150, Cambridge, MA 02142</P></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp<p>&nbsp617-577-7770</p> </li>
                    <li> <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp<p>&nbspfdf@giantbug.com</p> </li>
                    <li> <i class="fa fa-globe" aria-hidden="true"></i>&nbsp<p>&nbsphttp://knovva.com</p></li>
                </ul>


            </div>
            <div class="col-lg-4 footer-links">

                <ul>
                   <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                   <!-- <li><a href="#">Teacher</a></li>-->
                    <li><a href="career.php">Career</a></li>

                   <!-- <li><a href="#">Blog</a></li>-->
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>

            </div>
            <div class="col-lg-4 footer-hours">

                <ul>
                    <li>Mon - Fri:   6:00am - 10:00pm</li>
                    <li>Sat - Sun:   Closed</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row subscribe-bar">
            <div class="col-lg-3">
                <label>Call Us Now</label>

            </div>
            <div class="col-lg-3">
                <label>Connect With Us</label>
            </div>

            <div class="col-lg-6">
                <form method="post" action="controller/subscribe2.php" id="footer_subscribeform">
                    <h5 id="footernoti" style="margin-left: 20px;color: red"></h5>
                <div class="input-group">


                    <input type="email" class="form-control" placeholder="Your Email" name="footer_email">
                       <span class="input-group-btn">
                           <button class="btn btn-default" type="submit" id="footerbtn" name="submit">Subscribe</button>
                       </span>
               <script src="js/footersubscribe.js"></script>
                </div>
                </form>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <h6>2016 Knovva Academy </h6>
            </div>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>