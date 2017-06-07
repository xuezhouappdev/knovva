<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>  Payment | Knovva
    </title>



    <!-- Program -->
    <link rel="stylesheet" href="css/payment.css">
    <meta name="keywords" content="" />



</head>


<?php
// include header
include "header.php";
?>

<body>

<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
            <h1>Application - Payment</h1>
        </div>
    </div>
</div>



<div class="main">
    <div class="container">

        <p>Knovva Academy accepts applications on a rolling basis and enrollment is on a first-come, first-serve basis. Your spot in this program will not be reserved until payment has been made. You will receive a receipt and confirmation email upon payment.If you have any questions, please email us at: info@knovva.com</p>
        <hr>
        <h3>Payment Option</h3>


        <h4>1. Paypal (Preferred)</h4>
        <p>Promotion Code (If any)</p>
        <input type="text" class="form-control" id="promotion_code" style="width: 20%;height:80%;display: inline-block">
        <a class="btn btn-primary" id="apply-btn">Apply</a>
        <p class="msg" style="display: inline-block;margin-left: 24px;"></p>


        <!--paypal-->
        <div class="row paypal" style="margin-top: 12px">

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" id="paypalid" value="MHJDB83H5QA6N">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>



        </div>

                    <script>
                        $("#apply-btn").click(function(){

                            var userinput =  $('#promotion_code').val();
                            //alert(userinput);

                            if (userinput == "2017SUMMER") {
                                $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
                                $("#paypalid").val("QCMRK24QMB7S2");    //2500

                            }
                            else if(userinput == "G20ALUMN") {
                                $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
                                $("#paypalid").val("SMYSHJ75KDCKL");  //2800
                            }
                            else {
                                $(".msg").html("<span style='color:red'>Not valid</span>");
                                $('#promotion_code').val('');
                            }
                        })
                    </script>





        <h4>2. Wire transfers/electronic payment: </h4>
        <pre>

            KNOVVA ACADEMY INC
            Checking AccountAccount Number: 004663661206
            ACH Routing Number: 011000138
        </pre>

        <h4>3. Mail or drop off a personal check or money order made out to:</h4>

        <pre>

            KNOVVA ACADEMY INC
            222 Third St, Suite #3150
            Cambridge, MA 02142 (Please note student name)
        </pre>
         <hr>
        <h4>Refund</h4>
        <p>Refund Policy:If you decide not to attend Knovva Academy program, you must send a cancellation email to info@knovva.com with your full name and the name of the program before 30 calendar days of program’s start date. Any refund requests submitted within 30 days of the start date will not be refunded. If you have any questions, please email us at info@knovva.com or call us at 617-577-7771.
        </p>

    </div>
</div>







<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>





</body>
</html>