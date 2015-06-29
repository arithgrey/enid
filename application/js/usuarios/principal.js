$(document).on("ready" , function(){

	$("#listausuariosempresa").ready(loaduserscuenta);
	$("#listausuariosempresa").ready(listperfilesdisponibles);
	
});





/*Cargamos info de las personas que se encuentra en la cuenta */

/*
function loaduserscuenta(){

	url = now + "index.php/api/cuentageneralrest/getintegrantesinfocuenta/format/json";

	var clientresponse = ["Error al cargar los colaboradores, reporte al administrador"]

	$.get(url ).done(function( data ){

		list="";

		for(var x in data){


			nombre = data[x].nombre;
			email = data[x].email;
			fecha_registro  = data[x].fecha_registro;
			nombreperfil = data[x].nombreperfil;

			list +="<tr>";
			list+="<td class='center'></td>";
			list+="<td>"+nombre+"</td>";	
			list+="<td>"+email+"</td>";
			list+="<td>"+fecha_registro+"</td>";
			list+="<td>"+nombreperfil+"</td>";
			list+="<td></td>";
			list+="</tr>";

		}

		llenaelementoHTML( "#listausuariosempresa", list );
	}).fail(function(){

		llenaelementoHTML( "#listausuariosempresa", clientresponse[0]);
	});




}*//*Termina la funcion */

function loaduserscuenta(){

	url = now + "index.php/api/cuentageneralrest/getintegrantesinfocuenta/format/json";

	var clientresponse = ["Error al cargar los colaboradores, reporte al administrador"]

	$.get(url ).done(function( data ){

		list="";
		b = 1;
		for(var x in data){


			nombre = data[x].nombre;
			email = data[x].email;
			fecha_registro  = data[x].fecha_registro;
			nombreperfil = data[x].nombreperfil;

			list +="<tr>";
			list +="<td>"+ b +"</td>";
			list +="<td>"+nombre +"</td>";
			list +="<td>"+fecha_registro +"</td>";
			list +="<td>"+nombreperfil +"</td>";
			list +="<td>"+email +"</td>";
			list+="</tr>";
			 
                                
                               
		}

		llenaelementoHTML( "#listausuariosempresa", list );

	}).fail(function(){

		llenaelementoHTML( "#listausuariosempresa", clientresponse[0]);
	});

}





function listperfilesdisponibles(){



	url = now + "index.php/api/cuentageneralrest/getlistperfilesfisponiblesbycuenta/format/json";
	listselect = "<div class='input-group'><span class='input-group-addon' id='basic-addon1'>Perfil</span> <select  name='newperfil' id='newperfil' class='form-control m-bot15'>";
	$.get(url ).done(function( data ){		
		
		for(var x in data){

			nombreperfil =  data[x].nombreperfil;
			idperfil =  data[x].idperfil;

			if (idperfil == 3) {

			}else{
				listselect +="<option value='"+idperfil+"'>"+nombreperfil+"</option>";
			}
			
		}
		listselect+="</select></div>";	

		llenaelementoHTML( "#listperfiles", listselect);             
		$(".sednewsolicitud").click(sedmailrequest);
	}).fail(function(){

		alert("problemas al cargar perfiles consulte al administrador");
	});
                       
                  
}/*Termina la función*/



function sedmailrequest(){
	

	idperfil = $("#newperfil").val();
	mailnewcontact  =  $("#mailnewcontact").val();
	nombre = $("#nombre").val();

	url =  now + "index.php/api/mailrest/setmailgmailnewinvitaticon/format/json/",
	$.post( url  , {"idperfil" : idperfil , "mailnewcontact" : mailnewcontact , "nombre" : nombre} ).done(function(data){

		
		llenaelementoHTML("#clientresponse" , data);
		loaduserscuenta();
	}).fail(function(){
		alert("un error se produjo ");
	});

	
}