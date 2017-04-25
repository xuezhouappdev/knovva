<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Blog | Knovva</title>




    <!-- Google KeyWord -->

    <meta name="keywords" content="keyword1, keyword2, keyword3" />

</head>

<body>

<?php
// include header
include "header.php";
?>



<!-- Banner-->
<div class="banner" style="background: #D874BD; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(#D874BD,  #6E539E ); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#D874BD,  #6E539E ); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#D874BD,  #6E539E ); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#D874BD,  #6E539E ); /* Standard syntax */


  min-height: 200px;
  width: 100%;
  opacity: 0.8;
  background-size: cover;
  color: white;">
    <div class="container">
        <div class="row">
            <h1 style="position: relative;
    margin-top: 110px;
    color: #fdfdfd;
    border-left: 3px solid #f3f3f3;
    padding-left: 7px;">Blog</h1>
        </div>
    </div>
</div>




<div class="blogwrapper">

        <iframe src="knovvablog"  onload="this.style.height=this.contentDocument.body.scrollHeight +'px';" width="100%" scrolling="no" style="padding: 16px 64px 32px;margin-bottom: 48px;border: none" >

        </iframe>

    <hr>

</div>







<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>






<!--<script>
    swal({
        title: "Error!",
        text: "Here's my error message!",
        type: "error",
        confirmButtonText: "Cool"
    });
</script>-->



</body>
</html>