
function showtextareadescription (e){

	completa  = e.target.id; 
	iddocumento = getidstringanddinamicelement(completa, "#area_", "#pdescription_" );		
	
	$("#area_"+iddocumento).blur(function(){
	
		updatedatadocumento("#area_"+iddocumento, "nota", iddocumento );

	});				



     
            

}



function showinputdescription(e){
	
	completa  = e.target.id; 
	iddocumento = getidstringanddinamicelement(completa, "#inputnombre_" , "#pnomnbre_");	

	$("#inputnombre_"+iddocumento).blur(function(){
	
		updatedatadocumento("#inputnombre_"+iddocumento, "nombre" , iddocumento);


		$("#iddocumentosolicitado").val(iddocumento);
	});				
}


function updatedatadocumento(e, campoacambiar, iddocumento ){
	
	
	cambiodata  = $(e).val();

	dinamicchange ="";
	$("#nuevonombre").val("");
	$("#nuevanota").val("");
	$("#iddocumentosolicitado").val(iddocumento);
		

	switch(campoacambiar){
		case "nombre":
				
				dinamicchange = "listdocumentactualizanombredocumento";
				$("#nuevonombre").val(cambiodata);
				
				
			break;
		case "nota" :

				dinamicchange ="updatedocumentonotabyid";	
				$("#nuevanota").val(cambiodata);
				
			break;
		default:
		break;

		}
		
		/*Efectuamos cambios en la base de datos*/
		url =  now +  "index.php/api/solicituddocumentosrest/"+dinamicchange+"/format/json"; 	
		$.post(url, $("#dinamicformupdate").serialize()).done(function(data){

			if (data ==  true) {

				llenaelementoHTML("#clientresponse" , "Movimiento efectuado.!");	

			}
			listdocumentsbyarchivo();		

		}).fail(function(){
			alert("algo ocurrio");
		});

}







/*Eliminar*/




function trydeletesolicituddocument(e){

	id =  e.target.id;

	$("#confirmardelete").click(function(){


			url =now + "index.php/api/solicituddocumentosrest/deletesolicituddocumentbyid/format/json/";

			$.post(url , { "iddocumentosolicitado" : id }).done(function(data){


				listdocumentsbyarchivo();
				$("#modaldeletedocument").close();		
			}).fail(function(){

				alert("algo salió mal ");

			});


	});



}/*Termina la función*/	



function updateprioridad(e){

	elemento = e.target.id;
	nuevovalor = $("#"+elemento).val();
	iddocumentosolicitado = getidstringcadena(elemento);

	url = now + "index.php/api/solicituddocumentosrest/updatepuntuacionbyiddocumentosolicitado/format/json/";

	$.post(url , {"iddocumentosolicitado" : iddocumentosolicitado , "nuevapuntuacion" : nuevovalor}).done(function(data){

		listdocumentsbyarchivo();
	}).fail(function(){

		alert("algo falló");
	});

}