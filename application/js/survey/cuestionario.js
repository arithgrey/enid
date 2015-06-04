$(document).on("ready", function(){

	$("footer").ready(loadsurvey);
	$("footer").ready(loadinfodocumentosolicitado);
	$("footer").ready(getstatusdocumentocliente);
});



function loadsurvey(){

	url  = now + "index.php/api/creditorest/surveydocumentclient/format/json/";
	$.get(url, $("#generic_form").serialize()).done(function(data){

		l ="<ul class='to-do-list ui-sortable' id='sortable-todo'><table class='table'>";
		l+="<thead><tr><th>#</th><th>cuestionario</th> <th>SI</th> <th>NO</th></tr></thead><tbody>";
		b=1;
		idpregunta = 0;
		pregunta ="";
		flaresponde = 0;
		flagnumpregunta = 0;
		preguntaok =0;
		respuestano =0;
		contestadas =0;
			for(var x in data.preguntas ){
				
				flagnumpregunta ++;

				idpregunta= data.preguntas[x].idpregunta;
				pregunta= data.preguntas[x].pregunta;
				flaresponde = 0;
					for (var z in data.respuestas){
								
							idpreguntacliente =  data.respuestas[z].idpregunta;
							respuestacliente  =  data.respuestas[z].respuesta;
							e = 0;
								if(idpregunta == idpreguntacliente ){
										
										if (respuestacliente  == "yes") {

											l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            				l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' checked></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
									
				            				preguntaok ++;
										}else{
											l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            				l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked> </td></tr>";
											respuestano++;
										}
											
									contestadas++;
									flaresponde = 1;			
								}
							
					}
					/**/
						if (flaresponde == 0 ){		
								l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
		            			l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"'></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
						}
				b++;
			}

		l+="</tbody></table></ul>";
		llenaelementoHTML("#cuestionario" , l);

		llenaelementoHTML("#pregguntastotales" , flagnumpregunta);
		llenaelementoHTML("#contestadas" , contestadas);
		porcentajecontestadas = contestadas / flagnumpregunta;
		if (porcentajecontestadas == 1) {
			porcentajecontestadas = 100 +"%";
		}else{
			porcentajecontestadas = porcentajecontestadas +"%";
		}
		llenaelementoHTML("#porcentajecontestadas" , porcentajecontestadas);

		porcentajeokresponde = preguntaok / flagnumpregunta;

		if (porcentajeokresponde == 1) {
			porcentajeokresponde =100 +"%";
		}else{
			porcentajeokresponde = porcentajeokresponde +"%";
		}
		llenaelementoHTML("#porcentajeokresponde" , porcentajeokresponde);
		llenaelementoHTML("#preguntascontestadasok", preguntaok);


		porcentajenegativas = respuestano / flagnumpregunta;
		if (porcentajenegativas == 1) {
			porcentajenegativas = 100 +"%";
		}else{
			porcentajenegativas = porcentajenegativas +"%";
		}

		llenaelementoHTML("#porcentajenegativas" , porcentajenegativas);
		llenaelementoHTML("#respuestano" , respuestano);

		$(".trueresponse").click(trueresponseaction);
		$(".falseresponse").click(falseresponseaction);

	}).fail(function(){
		alert("Falló algo reportar ");

	});

}


/********************************************************************************************/
function trueresponseaction(e){

	pregunta = e.target.id;
	idcostomer  =  $("#idcostomer").val();

	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , {"pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "yes"})
	.done(function(data){

				
	}).fail(function(){
		alert("Fallo actualización");
	});
	loadsurvey();
}


/********************************************************************************************/
function falseresponseaction(e){

	pregunta = e.target.id;
	idcostomer  =  $("#idcostomer").val();


	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , {"pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "not"})
	.done(function(data){

		
	}).fail(function(){
		alert("Fallo actualización");
	});
	loadsurvey();

}


/********************************************************************************************/



function getstatusdocumentocliente(){

	documento = $("#documento").val();	
	clienteorg =  $("#idcostomer").val();
	nombredocumento ="";
	notadocumento =  ""; 
	url = now + "index.php/api/creditorest/getstatusdocumentocliente/format/json";


	$.get(url , {"documento" : documento, "clienteorg" : clienteorg})
	.done(function(data){
		respuesta =0;
		
			for(var x in data ){

				respuesta = data[x].respuesta;
			}
			if (respuesta == 0 ) {
				checkok = "<input type='checkbox' class='cambiaestadodoccliente' >";
			}else{
				checkok = "<input type='checkbox' class='cambiaestadodoccliente' checked>";
			}
			
		
		llenaelementoHTML("#checkbox_indicador", checkok);
		$(".cambiaestadodoccliente").click(updatenuevoestadodoccliente);


	}).fail(function(){
		alert("Fallo actualización");
	});		
}

function updatenuevoestadodoccliente(){


	documento = $("#documento").val();	
	clienteorg =  $("#idcostomer").val();
	url = now + "index.php/api/creditorest/updatestatusdocumentocliente/format/json";


	$.get(url , {"documento" : documento, "clienteorg" : clienteorg})
	.done(function(data){
		

		getstatusdocumentocliente();


	}).fail(function(){
		alert("Fallo update");
	});		
}




function loadinfodocumentosolicitado(){

	documento = $("#documento").val();	
	nombredocumento ="";
	notadocumento =  ""; 
	url = now + "index.php/api/creditorest/getinfodocument/format/json";


	$.get(url , {"documento" : documento})
	.done(function(data){

			
			for (var x in data) {
				
				nombredocumento   += data[x].nombredocumento;
				notadocumento = data[x].notadocumento;
			}

			llenaelementoHTML("#documentosolicitado" , nombredocumento);
			llenaelementoHTML("#especificaciones" , notadocumento);
		
	}).fail(function(){
		alert("Fallo actualización");
	});		
}


