<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class archivorest extends REST_Controller{

    function __construct(){
            parent::__construct();
           
            $this->load->model("documentomodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        





/********************************************************************************************************/

function listinfoarchivobyidarchivo_get(){

    
    if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
                
            $idarchivo = $this->get("archivo");    
            $this->response( $this->listinfoarchivobyidarchivodb( $idarchivo ));
                


       }else{
            $this->sessionclass->logout();
        }


}




function listinfoarchivobyidarchivodb( $idarchivo ){

    return  $this->documentomodel->listinfoarchivobyidarchivo( $idarchivo);

}



/********************************************************************************************************/   

    function tryrecord_post(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
            $nombrearchivo = $this->post("nombrearchivo");
            $descrionarchivo = $this->post("descrionarchivo");
            $idempresa  = $this->sessionclass->getidempresa();
               
            $this->response( $this->record($nombrearchivo, $descrionarchivo , $idempresa ) );
                


       }else{
            $this->sessionclass->logout();
        }

    }/*Termina funcion */


    /*In db */
    function record($nombrearchivo, $descrionarchivo , $idempresa ){

        
       return  $this->documentomodel->record($nombrearchivo, $descrionarchivo ,$idempresa);
    }

   
/*************************************************************************************************************/


    function list_get(){

        if ( $this->sessionclass->is_logged_in() == 1){ 

             $idempresa = $this->sessionclass->getidempresa();
             $dbresponse = $this->documentomodel->listarchivobyidempresa($idempresa );
             $this->response($dbresponse );

        }else{
            $this->sessionclass->logout();
        }


    }

/*************************************************************************************************************/




function updatenamearchivo_post(){


       if ( $this->sessionclass->is_logged_in() == 1){ 

             
            $nombrearchivo =  $this->post("nombrearchivo");   
            $idarchivo = $this->post("idarchivo");

            $this->response($this->updatenamearchivodb($idarchivo , $nombrearchivo) );

        }else{
            $this->sessionclass->logout();
        }


}/*Termina la función*/



function updatenamearchivodb($idarchivo , $nombre){
    
       if ( $this->sessionclass->is_logged_in() == 1){ 

            /*Intentamos modificar el nombre del archivo en la base de datos*/
             
             return $this->documentomodel->updatenombrearchivobyid($idarchivo , $nombre);   
        }else{

            $this->sessionclass->logout();
        }


}/*Termina la función*/



/*************************************************************************************************************/



function updatedescripcionarchivo_post(){


       if ( $this->sessionclass->is_logged_in() == 1){ 

            $newdescripcion = $this->post("newdescripcion");
            $idarchivo =  $this->post("idarchivo");
            
            $this->response($this->tryupdatedescripcion($newdescripcion , $idarchivo));    
                        
        }else{

            $this->sessionclass->logout();
        }



}/*Termina la funcion*/



function tryupdatedescripcion($newdescripcion , $idarchivo){


        if ( $this->sessionclass->is_logged_in() == 1){ 
             
             return $this->documentomodel->tryupdatedescripcionbyid($newdescripcion , $idarchivo);   
        
        }else{

            $this->sessionclass->logout();
        }


}


/**********************************************************************************/




	/*Termina rest*/
}
