function updatenombrearchivo(e) {
	
	
	id = e.target.id; 

	nuevonombrearchivo  = "#nuevonombrearchivo"+id; 
	$(nuevonombrearchivo).show();
	$("#"+this.id).hide();




    $(nuevonombrearchivo).blur(function(){
      	

    	newname = $(nuevonombrearchivo).val(); 
    	if(newname.length>0){

    		updatenombre(newname , id );
    		
    	}else{
    		listtramites();
    	}
      			
      

       

    });


}







/* *************************************************************************************/

function updatenombre(nuevonombrearchivo , id){



 	url = now + "index.php/api/archivorest/updatenamearchivo/format/json/";
 	
 	$.post(url , {"nombrearchivo" : nuevonombrearchivo , "idarchivo" : id}).done(function(data){
 		llenaelementoHTML("#clientresponse" , "Archivo actualizado.!");	
 	}).fail(function(){
 		alert("algo paso");
 	});

 	listtramites();
 	return false;
}/**/


/* ***********************************************************************************************************/
function updatedescripcionarchivo(e){

    id = e.target.id; 
    nuevadescripcion = "#nuevadescripcion" +id;  
    $(nuevadescripcion).show(); 


    $(nuevadescripcion ).blur(function(){
        
        textdescripcion = $(nuevadescripcion).val(); 
            tryupdatedescripcionbyid( textdescripcion , id);    
            listtramites();    
        
    });
}/*function end*/




/*try updating description by idarchivo  */
function tryupdatedescripcionbyid( textdescripcion , id ){

    url = now + "index.php/api/archivorest/updatedescripcionarchivo/format/json/";
    
    $.post(url , {"newdescripcion" : textdescripcion , "idarchivo" : id})
        .done(function(data){

    }).fail(function(){
    
        alert("algo paso");
    });

    return false;
}/*function end*/


/* ***********************************************************************************************************/
