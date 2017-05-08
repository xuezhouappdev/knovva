<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog | Knovva</title>


    <!-- Google KeyWord -->

    <meta name="keywords" content="keyword1, keyword2, keyword3" />

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <meta name="google-signin-client_id" content="1044866541477-gh93le45p53el79g9g7dhkclunj3cdgk.apps.googleusercontent.com">

</head>
<?php
// include header
include "header.php";
?>


<style>
    .g-signin2 {
        margin-top: 320px;
    }

</style>

<body>


<div class="g-signin2" data-onsuccess="onSignIn" ></div>


<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        alert('Email: ' + profile.getEmail());
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
</script>



<div>
    <a href="#" onclick="signOut();" class="btn btn-default">Sign out</a>

    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    </script>
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