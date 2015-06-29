/*Configuramos los permiso que tienen los perfiles sobre las secciones*/

function  editperfilpermiso (e) {

	completa = e.target.id;
	b=0;	
	idperfil = ""; 
	idpermiso ="";

		/*Sacamos los id de las cadenas*/
				for (var a = 0; a < completa.length; a++){

					if (completa[a]!="-") {

						if (b == 0) {

							idperfil += completa[a];

						}else{
							idpermiso += completa[a];
						}

					}else{
						b++;
					}
				}
		/*Termina el ciclo*/

				

		perfilpermisoupdate(idperfil , idpermiso);

}/*Termina la función*/

function perfilpermisoupdate(perfil , permiso){
	
	url = now +"index.php/api/permisosrestcontroller/updatepermiso/format/json/"

	$.post(url , {"idperfil"  : perfil , "idpermiso" : permiso}).done(function(data){
		
		redirect("");


	}).fail(function(){

		alert("Fallo algo al actualizar el permiso ");
	});

}