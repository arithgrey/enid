<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class CambioPasswordControlador extends REST_Controller{

    
    function __construct(){

            parent::__construct();


            $this->load->model("passwordmodel");            
            $this->load->library('sessionclass');


            
    }        

    //Obtenemos una peticion por el metodo post para actualizarNombre mediante el modelo

    function actualizarPassword_post(){

          if ( $this->sessionclass->is_logged_in() == 1) {  


                $anteriorPassword = $this->post('anterior');
                $nuevoPassword = $this->post('nuevo');
                $confirmaPassword = $this->post('confirma');

                if($nuevoPassword == $confirmaPassword){
                    $idUsuario= $this->sessionclass->getidusuario();

                    $respuestaDB = $this->passwordmodel->actualizarPassword($anteriorPassword,$nuevoPassword,$idUsuario);

                    $this->response($respuestaDB);
                }
                else
                {
                    $this->response("<strong>¡OH NO!</strong><br>No concuerdan la nueva contraseña...");
                }

             }else{
            $this->sessionclass->logout();
        
        }       
        
    }

/*************************************************************************************************************/

    /*Termina rest*/
}