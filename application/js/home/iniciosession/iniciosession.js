$(document).on("ready", function(){

	
	$("#inbutton").click(trysession);

});


function trysession(){

	pw = $("#pw").val();

	if(pw.length >= 8){

			expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			mail = $('#mail').val();		
			/*Validamos el mail*/
			if (!expr.test(mail)) {

				llenaelementoHTML("#reportesession" , "Registre un email correcto");
				recorrepage("#mail");	
			}else{

				pwpost = ""+CryptoJS.SHA1(pw);
				$("#secret").val(pwpost);
				//alert($("#in").serialize());	
				url = $(".now").val()+"index.php/api/sessionrestcontroller/startsessionusergeneral/format/json";
				$.post(url , $("#in").serialize()).done(function(data){

					if (data == 1 ) {
						next  = $(".now").val() + "index.php/sessioncontroller/presentacion/";
						redirect(next);
					}else{
						/*Reporta error*/
						llenaelementoHTML("#reportesession" , data);
					}


				}).fail(function(){
					alert("Algo fallo al iniciar session");	
				});




			}
	}else{

		/*Imprimimos el error*/
		llenaelementoHTML("#reportesession" , "Contraseña muy corta");
		/*Deslizamos el navegador al error*/
		recorrepage("#pw");
	}

	
	return false;
}