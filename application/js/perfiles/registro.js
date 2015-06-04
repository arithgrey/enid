
/**************************************RECURSOS ************************************************************************/

function registrarrecurso(){

	

	url = now + "index.php/api/recursosrestcontroller/insertinforesource/format/json/";
	$.post(url , $("#formnewrecurso").serialize() ).done(function(data){
	 	
	 	
	 	if (data == true) {

	 		displayrecursos();
	 	}else{

	 		llenaelementoHTML("#list_repo_recurso" , data);	
	 	}
		


	}).fail(function(){
		alert("Algo falló al registrar el recurso");
	});

	return false;
}


/**************************************PERFIL ************************************************************************/
function registraperfil(){


	url = now + "index.php/api/perfilrestcontroller/insertinfoperfil/format/json/";

	$.post(url , $("#formnewperfil").serialize() ).done(function(data){
	 
		
		if (data == true) {

			displayperfiles();
	 	}else{

	 		llenaelementoHTML("#list_repo_perfiles" , data);	
	 	}



	}).fail(function(){
		alert("Algo falló al registrar el recurso");
	});

	return false;

}