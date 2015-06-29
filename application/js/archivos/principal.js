$(document).on("ready", function(){

	$("#formarchivo").submit(tryrecord);
	
	$("footer").ready(listtramites);

	showhide(".newdescriptionicon", ".textimgdescripcion");
	
	$(".newdescriptionicon").click(function(){
		$(".section_cuestionario").show();

	});

	$("#nuevo_archivo").click(tryrecord);


});



/*Registra el nuevo archivo */
function tryrecord(){

		clientresponse = ["Error comunicarse con el administrador del sistema",
		"Registre nombre del archivo", "Este archivo ya existe" , "Elemento registrado correctamente"];

		url = now + "index.php/api/archivorest/tryrecord/format/json/";

		if ($("#nombrearchivo").val()!=""){


		$.post(url , $("#formarchivo").serialize()  ).done(function(data){

		

			llenaelementoHTML("#clientresponse" , clientresponse[data]);	


		}).fail(function(){

			llenaelementoHTML("#clientresponse" , clientresponse[0]);		
		});


		}else{
			llenaelementoHTML("#clientresponse" , clientresponse[1]);				
		}

		listtramites();	
		return false;
}

/*Termina el registro del  nuevo archivo */

function listtramites(){

	clientresponse = ["Error al cargar los archivos, consulte al administrador"];

	url = now + "index.php/api/archivorest/list/format/json/";
	$.get(url ).done(function(data){

		contenidoteble =""; 	
		b=1;
			for(var x in data){

				   
				idarchivo = data[x].idarchivo; 
				nombre = data[x].nombre;
				descripcion =data[x].descripcion; 
				status = data[x].status; 
				fecharegistro = data[x].fecharegistro;
				
				contenidoteble+= "<tr>";
				contenidoteble+= "<td>"+ b +"</td>"; 
				updatearchivon ="nuevonombrearchivo"+idarchivo;
				updatearchivondescripcion = 	idarchivo;
				nuevadescripcion  = "nuevadescripcion"+idarchivo;
				
                contenidoteble+= "<td> <input type='text' value='"+nombre+"' class='nuevonombrearchivo' id='"+updatearchivon+"'  ><label class='namearchivo' id='"+idarchivo+"'  >"+nombre+"</label></td>"; 

                if (descripcion!="") {
                	contenidoteble+= "<td><input type='text' value='"+descripcion+"' id='"+nuevadescripcion+"' class='inputdescripcion' >  <span class='descripcionupdatetext' id='"+updatearchivondescripcion+"'  >"+descripcion+"</span></td>";    
                }else{
                	       	
                	contenidoteble+= "<td><input type='text' value='' id='"+nuevadescripcion+"' class='inputdescripcion' > <span class='descripcionupdatetext' id='"+updatearchivondescripcion+"'  > + </span></td>";
                }

                contenidoteble+= "<td>"+fecharegistro+"</td>"; 

                imgurl = now + "application/img/general/clipboard44.png"; 
               	next  = now+ "index.php/administracionarchivos/documentos?tramite="+idarchivo;
                contenidoteble+= "<td><a href='"+next+"'><img class='icondocuments' src='"+imgurl+"'></a></td>"; 
				contenidoteble+= "</tr>";      
                b++;  	           
			}


			/*Editar nombre */

				

		llenaelementoHTML(".tablecontent" , contenidoteble);		
		
			$(".namearchivo").click(updatenombrearchivo);
			$(".descripcionupdatetext").click(updatedescripcionarchivo);

		}).fail(function(){

				llenaelementoHTML("#clientresponse" , clientresponse[0]);				
			
		});

}
