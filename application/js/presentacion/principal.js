$(document).on("ready", function(){
	

	$("#numerointegrantes").ready(loadnumintegrantes);
	$("footer").ready(getnumeroclientes);
	$("footer").ready(getsolicitudescuentaenvalidacion);
	$("footer").ready(getsolicitudesqueeenviado);
	$("footer").ready(getnumeroclientesquemeanaprobado);
	$("footer").ready( getnumeroclientesrechazados);
	$("footer").ready(getNumeroOmisionesGraves);
	$("footer").ready(getNumeroConOmisiones);
	$("footer").ready(getNumeroSinOmisiones);
});


/*Cargamos los integrantes regostrados en la cuenta */


function loadnumintegrantes(){


		var clienteresponse = ["Falla al cargar el número de integrantes"];

		URL = now + "index.php/api/cuentageneralrest/getnumintegrantescuenta/format/json/"; 


		$.get(URL).done(function(data){
			
			llenaelementoHTML("#numerointegrantes" ,  data);
		}).fail(function(){

			llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}
/*Termina la función */


/**********************************************************************************************/
function getnumeroclientes(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientes/format/json/"; 


		$.get(URL).done(function(data){
				
				llenaelementoHTML( "#numeroclientes", data );
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}



function getsolicitudescuentaenvalidacion(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesenvalidacion/format/json/"; 


		$.get(URL).done(function(data){
				
				llenaelementoHTML( "#numeroclientessolicitantes", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}




function getsolicitudesqueeenviado(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesquehesolicitado/format/json/"; 


		$.get(URL).done(function(data){
				
				
				llenaelementoHTML( "#numeroclientessolicitantesquehesolicitado", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}



function getnumeroclientesquemeanaprobado(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesquemeanaprobado/format/json/"; 


		$.get(URL).done(function(data){
				
				
				llenaelementoHTML( "#numeroclientequemeaprobaron", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}






function getnumeroclientesrechazados(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesrechazados/format/json/"; 


		$.get(URL).done(function(data){

				llenaelementoHTML( "#getnumeroclientesrechazados", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}


function getNumeroOmisionesGraves(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getNumeroOmisionesGraves/format/json/"; 

		$.get(URL).done(function(data){
		
			l="<div id=''>";

			for(var x in data ){


				numeroOmisionesGraves = data;

				l+="<input id='ocultoTA1' type='text' />"+ numeroOmisionesGraves ;

				$("#inputOmisionesGraves").val(data);
			}

			l+="</div>";

			llenaelementoHTML( "#numeroOmisionesGraves", l );

				
		}).fail(function(){

			alert("error al cargar omisiones graves");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}

function getNumeroSinOmisiones(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getNumeroSinOmisiones/format/json/"; 


		$.get(URL).done(function(data){

				h="<div id=''>"
				
				for(var x in data ){


					numeroSinO = data;

					h+="<input id='ocultoTA2' type='text' />"+ numeroSinO ;

					$("#inputSinOmisiones").val(data);

				}

				h+="</div>";
				
				llenaelementoHTML( "#numeroSinO", h );
				
		}).fail(function(){

			alert("error al cargar omisiones");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}

function getNumeroConOmisiones(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getNumeroConOmisiones/format/json/"; 


		$.get(URL).done(function(data){
				
				for(var x in data ){

					numeroConO = data;

				}
				
				llenaelementoHTML( "#numeroConO", numeroConO );
				
		}).fail(function(){

			alert("error al cargar omisiones");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}


/**********************************************************************************************/
