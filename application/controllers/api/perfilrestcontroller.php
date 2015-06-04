<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Perfilrestcontroller extends REST_Controller{

    function __construct(){
            parent::__construct();
            $this->load->model("perfilmodel");                      
            $this->load->model("usuariogeneralmodel");  
            $this->load->library('sessionclass');
            
        }         
	function index(){}        

    function estableceperfil_post(){

        $idusuario = $this->post("iduser");        
        $responseb =$this->perfilmodel->recordusuarioperfilstandar($idusuario);
        $this->session->set_userdata('perfiles', $this->perfilmodel->getperfiluser($idusuario));        
        $this->response($responseb);
    }


    function listperfiles_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
            $nombrerecurso = $this->get("recurso");
            /*De acuerdo al perfil pedimos los accesos*/
            
            //$permiso = $this->sessionclass->verificapermiso($nombrerecurso ,  "consultar" );            
            //if ($permiso == 1 ){
                /* Desplegamos los  perfiles*/
                    
                $datos=$this->perfilmodel->listperfilesrecursospermisos();                              
                $this->response($datos);

            //}
         /*Cuando no hay session*/   
       }else{
            $this->sessionclass->logout();
        }

    }/*Termina list perfiles */




    /*Desplegamos todos los perfiles disponibles */
    function listperfilesinsystem_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
            //$nombrerecurso = $this->get("recurso");
          //  $permiso = $this->sessionclass->verificapermiso($nombrerecurso ,  "consultar" ); 
                
            //    if ( $permiso == 1 ){
                    /*Muestra listado */
                    
                    $this->response($this->listperfiles());
                    
              //  }else{

                //    $this->response("Mensaje");
                    /*Muestra mensaje informando */

                //}    


            //$this->response($permiso);

           }else{

            /*Termina la sessión */
            $this->sessionclass->logout();
        }


    /*Termina la función */    
    }   




    function listperfiles(){


        $data = $this->perfilmodel->listallperfiles();  
        return $data;

    }

/************************************Perfiles permisos modulos ********************************/

    /*Desplegamos todos los perfiles disponibles */
    function listperfilespermisosinsystem_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

                    $idrecurso= $this->get("recursoid");
                    $this->response($this->listperfilesmodulopermisos($idrecurso));
           
           }else{

            /*Termina la sessión */
            $this->sessionclass->logout();
        }


    /*Termina la función */    
    }   



function listperfilesmodulopermisos($idrecurso){

        $data = $this->perfilmodel->listperfilesmodulopermisos($idrecurso);  
        return $data;    

}




    /*******************************Update perfil *************************************************/


     function updateinfoperfil_POST(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
                $idperfil =  $this->post("idperfil");
                $descripcion =  $this->post("descripcion");
                
                    /*Verificamos si es que el perfil puedo o no editar el modulo de recursos */
                  //  $permiso = $this->sessionclass->verificapermiso("Perfiles" ,  "editar" );

                    //if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permisos actualizamos */  

                        $this->response( $this->updateperfil($idperfil , $descripcion) );
                   
                    //}else{

                      //   $this->response("No cuenta con los permisos para iditar la información de éste modulo");
                        /*Retornamos mensaje de permisos fallidos*/
                    //}    

            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */




    /**update perfil in database  */
    function updateperfil($idperfil , $descripcion){

        return  $this->perfilmodel->updateperfil($idperfil , $descripcion);   
        
    }

    /****************************************Insertar *************************************************************/

    function insertinfoperfil(){

    }



    
    function insertinfoperfil_POST(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
                     $nombre =  $this->post("nuevoperfil");
                     $descripcionperfil  =  $this->post("descripcion_perfil_nuevo");
                    
                    /*Verificamos si es que el perfil puedo o no editar el modulo de recursos */
                    //$permiso = $this->sessionclass->verificapermiso("Perfiles" ,  "agregar" );
                   

                    //if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permiso registramos*/  
                         
                         
                        $this->response( $this->insertperfil($nombre , $descripcionperfil ) );
                        
                    //}else{

                      //   $this->response("No cuenta con los permisos para iditar la información de éste modulo");
                        /*Retornamos mensaje de permisos fallidos*/
                    //}    

            /*Cuando no hay session*/
        }else{

            $this->sessionclass->logout();
        
        }    

    }/*Termina función */


    /* Inserta en la base de datos */

    function insertperfil($nombre , $descripcionperfil ){


        return  $this->perfilmodel->insertperfil( trim($nombre) , trim($descripcionperfil)  );
                                    
    } 



/*************************************Eliminar perfil **************************************************/

function deleteperfil_POST(){

     if ( $this->sessionclass->is_logged_in() == 1) {  
            
                    $idperfil =  $this->post("idperfil");
                    
                    //$permiso = $this->sessionclass->verificapermiso("Perfiles" ,  "eliminar" );
                    
                   // if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permiso registramos*/  
                            

                        $this->response( $this->deleteperfilinfo($idperfil) );
                        
                   // }else{

                     //    $this->response("No cuenta con los permisos para iditar la información de éste modulo");
                        /*Retornamos mensaje de permisos fallidos*/
                    //}    

            /*Cuando no hay session*/
        }else{

            $this->sessionclass->logout();
        
        }    
}/*Termina la función*/


function deleteperfilinfo($idperfil){
     return  $this->perfilmodel->removeperfilbyid($idperfil);
}




	/*Termina rest*/
}

