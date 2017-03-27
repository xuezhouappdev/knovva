<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">


</head>
<body>


<?php
// include header
include "header.php";
?>


<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
       <h1>Contact</h1>
        </div>
    </div>
</div>



<!-- contact-->

<div class="contact-info">
    <div class="container">
        <div class="row">
           <div class="col-sm-4">
               <i class="fa fa-phone" aria-hidden="true"></i>
               <h3>Call US</h3>
               <h4>617-577-7770</h4>
           </div>

            <div class="col-sm-4">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h3>Address</h3>
                <h4>222 3rd Street, Suite 3150, Cambridge, MA 02142</h4>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <h3>Email</h3>
                <h4>fdf@giantbug.com</h4>
            </div>
        </div>
    </div>
</div>




<div class="map">
   <div class="container">
       <div class="row map-title">
           <div class="col-sm-6">
               <h3>Find Our Location</h3>
           </div>
           <div class="col-sm-6">
               <h3>Interested in us?</h3>
           </div>
       </div>


       <div class="row">
           <div class="col-sm-6">
               <div id="map" style="top:25px;"></div>
               <script src="js/contact-map.js"></script>
           </div>

           <div class="col-sm-6">
                <form method="POST" action=""  id="contactemailform">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="error" style="color:red;">
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name*</label>
                                <input type="text" class="form-control" name="contact_fn"  placeholder="First Name" >

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name*</label>
                                <input type="text" class="form-control" name="contact_ln"  placeholder="Last Name" >

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="contact_email" placeholder="Email" >

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="contact_phone"  placeholder="Phone" >

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" rows="11" name="contact_textarea" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">


                            <button type="submit" name="submit" id="contact-submit-btn" class="btn btn-default">SEND</button>
                        </div>
                    </div>

               </form>
           </div>
       </div>
       </div>
   </div>
</div>


<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>



<script src="js/contactemail.js">

</script>
<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQxsMEH4W7YqPRe5bi5mgNas9MVYCB8a0&callback=initMap"
       >
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>