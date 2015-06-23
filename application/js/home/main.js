$(document).on("ready", function(){

	$("#login_button").click(openforminiciosession);
	$("#registrobutoon").click(registrarcuenta);
});

function openforminiciosession(){	
	

	url = $(".now").val()+"index.php/sessioncontroller/iniciosessionuser";
	redirect(url);	
}

function registrarcuenta(){
	
	url = $(".now").val()+"index.php/home/signup/";
	redirect(url);
}