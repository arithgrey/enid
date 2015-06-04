$(document).on("ready", function(){
	
	$("#button_solicitud_doc").click(tryrecorddocument);
	$("#form_new_solicitud").submit(tryrecorddocument);


	
	$("#descriptionbtn").click(function(){

		$("#textareanewespecifiacion").show();
	
	});
	
	$("footer").ready(listdocumentsbyarchivo);
	$("footer").ready(loaddataarchivobyid);
	$(".puntuacion").click(updatepuntuacion);

});



function tryrecorddocument(){


	var  clientresponse = [" Registrar los campos para guardar " , "Solicitud de documento registrado.!" , "El documento ya se encuentra registrado"];

	nombredocumento = $("#documento_solicitado").val(); 		
	if (nombredocumento.length > 0 ) {

			url =  now +  "index.php/api/solicituddocumentosrest/tryrecord/format/json"; 		
			$.post(url , $("#form_new_solicitud").serialize() ).done(function(data){

			
						if (data ==  true) {

							llenaelementoHTML("#clientresponse" , clientresponse[1]);
						}else{

							llenaelementoHTML("#clientresponse" , clientresponse[data]);
	
						}
				 		
			}).fail(function(){
				alert("Error");
			});

	}else{

	 		llenaelementoHTML("#clientresponse" , clientresponse[0]);
	}

	listdocumentsbyarchivo();
	return false;
}



function listdocumentsbyarchivo(){

	url =  now +  "index.php/api/solicituddocumentosrest/listdocumentsbyarchivo/format/json"; 		
	var clienteresponse =["Requeimientos que debe cumplir el documento"];
		$.get(url , $("#form_new_solicitud").serialize() ).done(function(data){

				
			/**/
			elementos = "";
			for(var x in data){


				iddocumentosolicitado  =  data[x].iddocumentosolicitado;
				nombredocumento  = data[x].nombredocumento;
				nota = data[x].notadocumento; 
				puntuacion = data[x].puntuacion; 

				elementos += "<li class='clearfix'>"; 	
				elementos += "<span class='drag-marker' id='"+iddocumentosolicitado+"'><i></i> </span>"; 	
				elementos += "<div class='todo-check pull-left'>";	
				elementos += "<input value='None' id='todo-check' type='checkbox'> "; 	
				elementos +="</div>";

				inputnombre = "inputnombre_" +  iddocumentosolicitado;
				pnombre = "pnomnbre_"+iddocumentosolicitado;
				elementos +="<input class='nameinput' value='"+nombredocumento+"' id='"+inputnombre+"'><p class='todo-title' id='"+pnombre+"'>"+nombredocumento+"</p>";





/*inicia la descripción */

				areadescriptionid="area_" + iddocumentosolicitado;
				idpdescription = "pdescription_"+ iddocumentosolicitado;

				nnota = $.trim(nota);
				if ( nnota.length== 0 ) {

					elementos +="<textarea class='form-control areadescription' id='"+areadescriptionid+"' >";
					elementos+= clienteresponse[0];
					elementos +="</textarea><p class='descriptiondocument'  id='"+idpdescription+"'  >"+clienteresponse[0]+"</p>";	
							
					
				}else{
					


					elementos +="<textarea class='form-control areadescription' id='"+areadescriptionid+"' >";
					elementos+=nota;
					elementos +=" </textarea > <p class='descriptiondocument' id='"+idpdescription+"' >"+nota+"</p>";	
					

				}


/*Termina la descripción */
				elementos +="<div class='todo-actionlist pull-right clearfix'>";
				urlimgdelete = now  + "application/img/general/cancel19.png";
				elementos += "<img href='#modaldeletedocument'  data-toggle='modal' src='"+urlimgdelete+"'  class='col-md-6 eliminar' id='"+iddocumentosolicitado+"' > </div>";
				selectlistdinamico = "selectlist"+iddocumentosolicitado;
				
				puntuaciondinamicabutonid = "#puntuaciondinamica_" + iddocumentosolicitado; 

				elementos += "<a data-toggle='collapse' href='"+puntuaciondinamicabutonid +"'> <button id='"+puntuaciondinamicabutonid+"'  class='btn btn-info prioridaddinamic'>"+puntuacion+"</button></a> "+ options(iddocumentosolicitado)+"</li>"; 
				
			
			}




			llenaelementoHTML("#sortable-todo" , elementos);
			$(".descriptiondocument").click(showtextareadescription);
			$(".todo-title").click(showinputdescription);
			$(".eliminar").click(trydeletesolicituddocument);
			$(".upselect").change(updateprioridad);
		}).fail(function(){
				alert("Error");
	});


}




function options(iddocumentosolicitado){
	x =1;
	l="";

	selectupdatepuntuacion = "selectupdatepuntuacion_"+iddocumentosolicitado;

	puntuaciondinamica = "puntuaciondinamica_"+iddocumentosolicitado;
	l += "<div class='collapse' id='"+puntuaciondinamica+"'>";
	l +="<div class='panel blue-box twt-info'><label class='center-text'>prioridad ";
	l += "<select class='form-control upselect'  id='"+selectupdatepuntuacion+"'>";
		
		while(x<= 10){

			l+= "<option>"+x+"</option>";
			x++;
		}

	l +="</select></label>Definir la prioridad del documento</div></div>";
	return l;
}

/*********************************************************************************************************/































/******************************************************************************************************/

	function loaddataarchivobyid(){




		url =  now +  "index.php/api/archivorest/listinfoarchivobyidarchivo/format/json"; 		

		$.get(url , $("#form_new_solicitud").serialize() ).done(function(data){

				
				for(var x in data){
					
					idarchivo = data[x].idarchivo;
					nombre =  data[x].nombre;
					descripcion  = data[x].descripcion;
					fecharegistro = data[x].fecharegistro;

					
				
				}	
					llenaelementoHTML("#descriptionarchivo" , descripcion);
					llenaelementoHTML("#namearchivo" , nombre);
					llenaelementoHTML("#fecha_registro" , fecharegistro);
					llenaelementoHTML("#folioarchivo" , idarchivo);
					
							
				 		
		}).fail(function(){
				alert("Error");
	});





}