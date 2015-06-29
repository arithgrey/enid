<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Permisosrestcontroller extends REST_Controller{

    function __construct(){
            parent::__construct();
            $this->load->model("permisomodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        

    /*******************************Update permisos*************************************************/
     function updatepermiso_POST(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
                $idperfil =  $this->post("idperfil");
                $idpermiso  =  $this->post("idpermiso");
                
                    
                        $this->response($this->updatepermiso($idperfil , $idpermiso));
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */




    /**update permiso in database  */
    function updatepermiso($idperfil , $idpermiso){

        return  $this->permisomodel->updatepermiso($idperfil , $idpermiso);   
        
    }

    

	/*Termina rest*/
}

