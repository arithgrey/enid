/*Editar perfil*/
function editaperfilnow(e){

	/**/
    id = e.target.id; 
    $("#"+this.id).hide();

    /**/
    inputdescription  ="#inputdescriptionperfil_"+id;
    $(inputdescription).show();


    $(inputdescription).change(function(){
          
         /*Actualizamos datos de recurso */
         updateperfil($(inputdescription).val() , id );
    });

    $(inputdescription).blur(function(){
    	
    	 
        $(".editar_perfil").show();
        $(inputdescription).hide();
        $(".inputdescription").hide();
   
    });
}/*Termina la función */

function updateperfil(newdescription , id){

	 	urlpost = now + "index.php/api/perfilrestcontroller/updateinfoperfil/format/json/"; 

 	    $.post(urlpost, {"idperfil": id , "descripcion" : newdescription} ).done(function(data){

         if (data == true ) {
            /*Actualización correcta */

            	displayperfiles();
          }else{
            /*Falla al actualizar*/


    	}
      

    }).fail(function(){

      alert("algo falló en update perfil");

    });



}/*Termina la función*/




/************************************Elimina perfil********************************************************/
function eliminaperfilnow(e){

    idperfil = e.target.id;
    
    
    $("#deleteconformbtnperfil").click(function(){

      
      url = now + "index.php/api/perfilrestcontroller/deleteperfil/format/json/";

      $.post(url , {"idperfil" : idperfil  }).done(function(data){

          if (data == true){

                displayperfiles();
          }else{

              llenaelementoHTML("#list_repo_perfiles" , data);
          } 
            

      }).fail(function(){

          alert("algo falló en eliminar perfil ");
      });
    
    $("#modaldeleteperfil").modal("hide");
  });
    

    
    



}