<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Evaluacionrest extends REST_Controller{
      
    function __construct(){
            parent::__construct();
            

            $this->load->model("evaluacionmodel");
            $this->load->library('sessionclass');
            
        }         




     function evaluaruserclientdocument_GET(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            $idclienteorg =  $this->input->get("clienteorg");

            $data = $this->evaluacionmodel->getdocumentosuser( $idclienteorg );
            $data["clienteorg"] = $idclienteorg;
            $this->response($data );
                   
        
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */




	/*Termina rest*/
}

