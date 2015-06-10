$(document).on("ready", function(){

	$("#btn_tw").click(presentaTimeline);

	$("#btn-env-comentario").click(setComent);

});
function presentaTimeline(){
	$('#dlg_twitter').foundation('reveal', 'open');
}





function setComent(){


	url = now + "index.php/api/comentarioprincipal/setComent/format/json/";

	$.post(url , $("#form-comentario").serialize()).done(function(data){

		
		llenaelementoHTML("#cliente-response" , "Gracias comentario recibido.!");

	}).fail(function(){
		/*Error*/
		llenaelementoHTML("#cliente-response" , genericresponse[0]);


	});


	return false;
}