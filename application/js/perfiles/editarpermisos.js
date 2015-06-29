function editaaccesomodulo(e){

	completa = e.target.id;

	b=0;
	
	idperfil = ""; 
	idrecurso ="";

		/*Sacamos los id de las cadenas*/
				for (var a = 0; a < completa.length; a++){

					if (completa[a]!="-") {

						if (b == 0) {

							idrecurso += completa[a];

						}else{
							idperfil += completa[a];
						}

					}else{
						b++;
					}
				}/*Termina el ciclo*/
				

	updatepermiso(idperfil , idrecurso );

}/*Termina la función */









/*Actualiza en la base de datos*/
function updatepermiso(idperfil , idrecurso ){

	/**/
	url = now + "index.php/api/perfilrecursorestcontroller/tryupdateperfilrecurso/format/json/";

	$.post(url , {"idperfil" : idperfil , "idrecurso" : idrecurso })
		.done(function(data){

			
			
			if (data == true) {
				redirect("");

			}else{
				alert("falla a actualizar ");
			}
			
		}).fail(function(){
			alert("Algo ha fallado");

		});




}/*Termina la función */




/****************************************Eliminar***************************************************************/
/*Inicia borrar mensaje*/
function borrapermiso(e){

	completa = e.target.id;
	b=0;
	idrecurso ="";
	idperfil = ""; 

	$("#deleteconformbtnpermiso").click(function(){
		
		/*Sacamos los id de las cadenas*/
				for (var a = 0; a < completa.length; a++){
					
					if (completa[a]!="-") {

						if (b == 0) {

							idrecurso += completa[a];

						}else{
							idperfil += completa[a];
						}

					}else{
						b++;
					}
				}/*Termina el ciclo*/
				
				trydelete(idrecurso ,  idperfil);

	});
	
}


function trydelete(idrecurso ,  idperfil){


	/*Intentamos eliminar el permiso*/

	url = now + "index.php/api/perfilrecursorestcontroller/trydeleteperfilrecurso/format/json/";
	$.post(url , {"idrecurso" : idrecurso , "idperfil" : idperfil} )
		.done(function(data){

			/*Eliminado correctamente */
			if (data == true) {

					redirect("");
			}else{

			}



		}).fail(function(){

			alert("Algo ocurrio mal al tratar de eliminar el recurso");
		});


}
/*Termina borrar mensaje*/


