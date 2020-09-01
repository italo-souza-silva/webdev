function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$("#button").click(function() {
    
    var error = "";
    var fieldsMissing = "";
    
    if ($("#email").val() == "") {      
        fieldsMissing += "<br />Email";        
    }
    
    if ($("#phone").val() == "") {        
        fieldsMissing += "<br />Telephone";        
    }
    
    if ($("#password").val() == "") {       
        fieldsMissing += "<br />Password";       
    }
	
    if ($("#cPassword").val() == "") {        
        fieldsMissing += "<br>Confirm Password";        
    }
    
    if (fieldsMissing != "") {      
        error += "<h1>The following field(s) are missing:</h1>" + fieldsMissing;     
    }
    
    if ((isEmail($("#email").val()) == false) && ($("#email").val() != "")) {       
        error += "<p>*Your email address isn't valid.</p>";      
    }
    
    if (($.isNumeric($("#phone").val()) == false) && ($("#phone").val() != "")) {        
        error += "<p>*Your phone number isn't numeric.</p>"        
    }
    
    if ($("#password").val() != $("#cPassword").val()) {        
        error += "<p>*Your passwords don't match.</p>";        
    }
    
    if (error != "") {        
        $("#error").html(error);        
    } else {        
        $("#accepted").show();
        $("#error").hide();        
    }
    
});


