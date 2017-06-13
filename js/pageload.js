/**
 * Created by xuezhou on 6/13/17.
 */

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
    else if(userinput == "MG20WEBINAR") {
        $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
        $("#paypalid").val("JHAVWD7A6N2TG");  //3000
    }//TEST $1

    else if(userinput == "FIFTYCENTS") {
        $(".msg").html("<span style='color:green'>Promotion code successfully applied</span>");
        $("#paypalid").val("FBSG3V5CU5JQ4");  //testing $1
    }//TEST $1

    else {
        $(".msg").html("<span style='color:red'>Not valid</span>");
        $('#promotion_code').val('');
    }
});

