<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Newslettercontrolador extends REST_Controller{

    
    function __construct(){

            parent::__construct();


            $this->load->model("newslettermodel");            
           
            
    }        
    //Obtenemos una peticion por el metodo post para actualizarNombre mediante el modelo
    function registrarCorreo_post(){

        $correo = $this->post('EMAIL');
        $seccion = $this->post('section_mail');
        $respuestaDB = $this->newslettermodel->registrarCorreo($correo, $seccion);
        $this->response($respuestaDB);
    }


    /*Termina rest*/
}
