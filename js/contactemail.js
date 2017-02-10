
$(document).ready(function() {

    $("#contact-submit-btn").click(function () {

        $.post("./controller/sendemail.php", $("#contactemailform").serializeArray(), function (data) {
            $("#error").html(data);
        });



        $("#contactemailform").submit(function () {

            return false;

        });


    });
})