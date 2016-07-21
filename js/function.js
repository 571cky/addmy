$(document).ready(function() {    
$("#w2").hide( "fast" );
$("#w3").hide( "fast" );
$("#w5").hide( "fast" );

	$("#btn_comenzar").click(function(event) {
		event.preventDefault();
		$("#w2").show( "slow" );
		$('html, body').animate({
			scrollTop: $("#paso1").offset().top
		}, 500);
	});


	$("#btn_login").click(function(event) {
		event.preventDefault();
		if( !isValidEmailAddress( $("#email").val() ) ) { 
			$("#email").css({
				border: '1px solid red'
			});
		}else{
			$('html, body').animate({
				scrollTop: $("#paso2").offset().top
			}, 500);
			$("#w3").show( "slow" );
			$("#email").css({
				border: '0px solid black'
			});
		}
		
	});

	

	$("#btn-continuar1").click(function(event) {
		event.preventDefault();
		$("#w5").show( "slow" );
		$('html, body').animate({
			scrollTop: $("#paso4").offset().top
		}, 500);
	});

	$("#siteName").on("input propertychange",function(){
		if($("#siteName").val() == ""){
			$("#emailSite").html("tusitio@addmy.site");
		}else{
			$("#emailSite").html($("#siteName").val() + "@addmy.site");
		}
	
	});

	function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
	}

});