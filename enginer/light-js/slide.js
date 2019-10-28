/*----------------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    slide.js | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/

$(document).ready(function() {
	// Expand Panel
	$("#open").click(function(){
		$("div#panel").slideDown("slow");
	});	

	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");	
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		

});