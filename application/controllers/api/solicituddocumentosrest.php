<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class  Solicituddocumentosrest  extends REST_Controller{

    function __construct(){
            parent::__construct();  


            $this->load->model("documentossolicitadosmodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        

   

    function tryrecord_post(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

               
               $documento_solicitado = $this->post("documento_solicitado");
               $especificacionesdocumento  =  $this->post("especificacionesdocumento");
               $idarchivo =  $this->post("archivo");

               $this->response($this->tryredorddb($documento_solicitado , $especificacionesdocumento, $idarchivo) );     


       }else{
            $this->sessionclass->logout();
        }

    }/*Termina funcion */



    function tryredorddb($documento_solicitado , $especificacionesdocumento, $idarchivo){

        return $this->documentossolicitadosmodel->redord($documento_solicitado , $especificacionesdocumento , $idarchivo);
    }





/***************************************************************************************************************************/


    function listdocumentsbyarchivo_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

               
               $idarchivo =  $this->get("archivo");

               $this->response( $this->listdocumentsbyarchivodb($idarchivo)   );     


       }else{
            $this->sessionclass->logout();
        }

    }/*Termina funcion */



    function listdocumentsbyarchivodb($idarchivo){

           return $this->documentossolicitadosmodel->listbyidarchivo($idarchivo);
    }



/**************************************************************************************************/


 function listdocumentactualizanombredocumento_post(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

               
               $nuevonombre =  $this->post("nuevonombre");
               $iddocumentosolicitado = $this->post("iddocumentosolicitado");
               $this->response($this->updatenombredocumentosolicitadodb($nuevonombre , $iddocumentosolicitado ));     


       }else{
            $this->sessionclass->logout();
        }

    }/*Termina funcion */



function updatenombredocumentosolicitadodb($nuevonombre, $iddocumentosolicitado){

    return $this->documentossolicitadosmodel->updatenombredocsolicitadobyid($nuevonombre, $iddocumentosolicitado);
}

/**************************************************************************************************/

          
 function updatedocumentonotabyid_post(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

               
               $nuevanota =  $this->post("nuevanota");
             
                 $iddocumentosolicitado = $this->post("iddocumentosolicitado");

               $this->response( $this->updatenotadocumentosolicitadodbbyid($nuevanota, $iddocumentosolicitado) );     


       }else{
            $this->sessionclass->logout();
        }

    }/*Termina funcion */




function updatenotadocumentosolicitadodbbyid($nuevanota, $iddocumentosolicitado){

    return $this->documentossolicitadosmodel->updatenotadocumentosolicitadomyid($nuevanota, $iddocumentosolicitado);
}

/********************************ELIMINAR************************************/
  

function deletesolicituddocumentbyid_post(){

    if ( $this->sessionclass->is_logged_in() == 1) {            

        $iddocumentosolicitado = $this->post("iddocumentosolicitado");

        $this->response($this->deletesolicituddbbyid($iddocumentosolicitado));     

    }else{
         $this->sessionclass->logout();
    }

}



function deletesolicituddbbyid($iddocumentosolicitado){

    return $this->documentossolicitadosmodel->deletesolicituddbbyid( $iddocumentosolicitado);
}



/********************************update ************************************/
  
function updatepuntuacionbyiddocumentosolicitado_post(){

   if ( $this->sessionclass->is_logged_in() == 1) {            

        $iddocumentosolicitado = $this->post("iddocumentosolicitado");
        $nuevapuntuacion =  $this->post("nuevapuntuacion");
        $this->response($this->uppuntuaciondbbyiddocumentosolicitado($iddocumentosolicitado, $nuevapuntuacion));     

    }else{
         $this->sessionclass->logout();
    }

}


/*IN db*/
function uppuntuaciondbbyiddocumentosolicitado($iddocumentosolicitado, $nuevapuntuacion){

    return $this->documentossolicitadosmodel->uppuntuaciondbbyiddocumentosolicitado($iddocumentosolicitado, $nuevapuntuacion);
}


/********************************************************************/
  
  function actualizaOmision_post(){
    if ( $this->sessionclass->is_logged_in() == 1) {            

               $iddocumentosolicitado = $this->post("iddocumentosolicitado");
               $respuestaDB = $this->documentossolicitadosmodel->actualizaOmision($iddocumentosolicitado);
               $this->response($respuestaDB);

       }else{
            $this->sessionclass->logout();
        }
  }
	/*Termina rest*/
}



