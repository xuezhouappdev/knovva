<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Programs
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program -->
    <link rel="stylesheet" href="css/programs.css">
    <link rel="stylesheet" href="dist/sweetalert.css">

    <!-- sweet alert-->
    <script src="dist/sweetalert.min.js"></script>

    <!-- Google KeyWord -->

    <meta name="keywords" content="keyword1, keyword2, keyword3" />

</head>

<body data-spy="scroll" data-target=".header" data-offset="300">

<?php
// include header
include "header.php";
?>




<div class="blogwrapper">

        <iframe src="blog"  onload="this.style.height=this.contentDocument.body.scrollHeight +'px';" width="100%" scrolling="no" >

        </iframe>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>