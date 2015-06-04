<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class OrganizacionControlador extends REST_Controller{
    
    function __construct(){

            parent::__construct();

            $this->load->model("organizacionmodel");            
            $this->load->library('sessionclass');
            
    }

    function mostrarCiudades_get(){

        if ( $this->sessionclass->is_logged_in() == 1) { 
            
            $idEmpresa= $this->sessionclass->getidempresa();

            $respuestaDB = $this->organizacionmodel->mostrarCiudades($idEmpresa);

            $this->response($respuestaDB);

         }else{

            $this->sessionclass->logout();
            
        }
        
    }
     
    function actualizarCiudades_post(){

        if ( $this->sessionclass->is_logged_in() == 1) {  

        $nuevoIdCiudad = $this->post('nuevo');

        $idEmpresa= $this->sessionclass->getidempresa();

        $respuestaDB2 = $this->organizacionmodel->actualizarCiudades($idEmpresa,$nuevoIdCiudad);

        $this->response($respuestaDB2);

         }else{
            $this->sessionclass->logout();
        }


    }

}