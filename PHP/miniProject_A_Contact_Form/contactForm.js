$("#submit").click(function() {
    var fieldsMissing = "";
    
    if ($("#email").val() == "") {      
        fieldsMissing += "<br />Email";        
    }
    
    if ($("#subject").val() == "") {        
        fieldsMissing += "<br />Subject";        
    }
    
    if ($("#askMe").val() == "") {       
        fieldsMissing += "<br />What would you like to ask us?";       
    }
    if (fieldsMissing != "") {      
        $("#error").html("<h1>The following field(s) are missing:</h1>" + fieldsMissing); 
				$("#error").show();
				$("#accepted").hide();
		} else {
			$("#accepted").show();
			$("#error").hide();
			}
});