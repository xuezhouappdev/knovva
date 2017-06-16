/**
 * Created by xuezhou on 6/13/17.
 */

$( document ).ready(function() {



    $("#apply-btn").click(function(){

        var userinput =  $('#promotion_code').val();
        //alert(userinput);


        if (userinput == "2017SUMMER" &&  ($.cookie('helloworld') == null )) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("QCMRK24QMB7S2");//2500
            //reset cookie
            $.cookie("helloworld", "set",{expires: 1});

        }


        else if(userinput == "G20ALUMN" && ($.cookie('helloworld') == null ) ) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("SMYSHJ75KDCKL");  //2800
            //reset cookie
            $.cookie("helloworld", "set",{expires: 1});


        }
        else if(userinput == "MG20WEBINAR" && ($.cookie('helloworld') == null )) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("JHAVWD7A6N2TG");  //WEBINAR 3000
            //reset cookie
            $.cookie("helloworld", "set", {expires: 1});

        }

        else if(userinput == "KSA2017" && ($.cookie('helloworld') == null ) ) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("FMDRW8ZPU4KXN");  // KSA 3000
            //reset cookie
            $.cookie("helloworld", "set", {expires: 1});

        }


        else if(userinput == "FIFTYCENTS" && ($.cookie('helloworld') == null )) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("PKR35YMDSV95S");  //$1200
            //reset cookie
            $.cookie("helloworld", "set",{expires: 1});

        }// 1200

        else if(userinput == "FIFTYCENTS" && ($.cookie('helloworld') == null )) {
            $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
            $("#paypalid").val("FBSG3V5CU5JQ4");  //testing $1
            //reset cookie
            $.cookie("helloworld", "set",{expires: 1});

        }//TEST $1

        else {
            $(".msg").html("<span style='color:red'>Not valid</span>");
            $('#promotion_code').val('');
        }
    });


});



