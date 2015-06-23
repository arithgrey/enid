
function editrecursonow(e){

    /**/
    id = e.target.id; 
    $("#"+this.id).hide();

    /**/
    inputdescription  ="#inputdescription_"+id;
    $(inputdescription).show();


    $(inputdescription).change(function(){
          
         /*Actualizamos datos de recurso */
         updater($(inputdescription).val() , id );
    });

    $(inputdescription).blur(function(){
      
        $(".editar_recurso").show();
        $(inputdescription).hide();
        $(".inputdescription").hide();
    });


}




/*Intentamos actualizar los datos en la base de datos */
function updater(newdescription , id){


    urlpost = now + "index.php/api/recursosrestcontroller/updateinforecurso/format/json/"; 

    $.post(urlpost, {"idrecurso": id , "descripcionrecurso" : newdescription} ).done(function(data){


          if (data == true ) {
            /*Actualización correcta */

            displayrecursos();

          }else{
            /*Falla al actualizar*/


          }
      

    }).fail(function(){

      alert("algo falló en update recurso");

    });

  //displayrecursos();

}





/************************************Elimina recurso *********************************************************/



function eliminarecurosnow(e){
    
  idrecursodelete = e.target.id;
  var clienteinfo=["Este modulo no se puede eliminar debido a que algunos perfiles lo utilizan"]

  
  $("#deleteconformbtn").click(function(){

      
      url = now + "index.php/api/recursosrestcontroller/deleterecurso/format/json/";

      $.post(url , {"idrecurso" : idrecursodelete }).done(function(data){

          if (data == true){

              displayrecursos();
          }else{

              llenaelementoHTML("#list_repo_recurso" , data);
          } 


      }).fail(function(){

          llenaelementoHTML("#list_repo_recurso" , clienteinfo[0]);
          
      });

      $("#modaldeleterecurso").modal("hide");
  });

}