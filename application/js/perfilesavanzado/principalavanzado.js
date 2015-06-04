$(document).on("ready", function(){

        getdatamodulo();
        displayperfiles();
              
});





/***************************************Muestra nombre modulo ******************************************/
function getdatamodulo(){

        
        urlnext = now + "index.php/api/recursosrestcontroller/getrecursobyid/format/json/";
        $.get(urlnext , $("#form_modulo").serialize() ).done(function(data){

                
                for(var b in data){

                        nombre = data[b].nombre;

                        llenaelementoHTML("#nombremodulo" ,  nombre );
                }

                
        }).fail(function(){
                alert("algo fallo al cargar recurso info ");
        });


}

/***************************************muestra tabla general****************************************/
function displayperfiles(){

        url = now + "index.php/api/perfilrestcontroller/listperfilespermisosinsystem/format/json";
        list="";
        $.get(url , $("#form_modulo").serialize() ).done(function(data){

        var msjclient =["algo falló al cargar perfiles" , "oasjd "];        

        list="<div class='table-responsive'>";
        list+="<table  class='table'>";              
        list+="<tr class='titulo_tb' id='table_header'>";               
        list+="<td class='titulo_tabla'>#</td>";                                 
        list+="<td class='titulo_tabla'>Roles con acceso al modulo</td>";                                         


        for(var z in data.permiso){
                list+="<td class='titulo_tabla'>"+data.permiso[z].nombrepermiso+"</td>";                                                         
        }

        list+="</tr>";

        
                /*Inici ciclo*/
                for(var x in data.perfil){

                        idperfil = data.perfil[x].idperfil; 
                        nombreperfil = data.perfil[x].nombreperfil;
                        descripcion = data.perfil[x].descripcion; 
                        list+="<tr>";               
                        list+="<td>"+idperfil+"</td>";                                 
                        list+="<td><label>"+nombreperfil+"</label><br><span> "+descripcion+"</span></td>";                                         
                        
                        

                        /*Input checkbox dinamicos */
                        

                                for(var z in data.permiso){

                                        perfilpermisopr =  idperfil + "-"+data.permiso[z].idpermiso;        

                                        /*Validamos perfil permiso */

                                        
                                        permisoactual = data.permiso[z].idpermiso;
                                        perfilactual  = idperfil;        
                                        bandera = 0;
                                        for(var i in data.perfil_permiso){

                                                
                                                if (permisoactual == data.perfil_permiso[i].idpermiso && perfilactual == data.perfil_permiso[i].idperfil  ) {
                                                        bandera ++;
                                                }

                                        }
                                        
                                        if (bandera >0 ) {

                                                /*Terminamos de valiar perfil permiso **/
                                        list+="<td><input type='checkbox' name='perfilpermiso' class='perfilpermiso' id='"+perfilpermisopr+"' checked></td>";                                                         
                                        }else{
                                                /*Terminamos de valiar perfil permiso **/
                                        list+="<td ><input type='checkbox' name='perfilpermiso' class='perfilpermiso' id='"+perfilpermisopr+"'></td>";                                                         
                                        }

                                        
                                }
                                list+="</tr>"; 
                       
                        /*Terminamos input dinámicos*/
                        

                }/*Termina ciclo*/

                list +="</table></div>";


                llenaelementoHTML("#tablageneral" , list);
                $(".perfilpermiso").click(editperfilpermiso);


        }).fail(function(){

                llenaelementoHTML("#tablageneral" , msjclient[0]);
        });

     
}/*Termina la función*/      









