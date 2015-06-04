<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class MisDatosControlador extends REST_Controller{

    
    function __construct(){

            parent::__construct();


            $this->load->model("misdatosmodel");            
            $this->load->library('sessionclass');


            
    }        


   
/*************************************************************************************************************/

    //Mandamos una peticion por el metodo get para actualizarNombre en el controlador
    /* 
    function actualizarNombre_get(){

    //$this->response("test correcto");

    $nuevoNombre = $this->get('name');

    $this->response($nuevoNombre);

    }
    */

    //Mandamos una peticion por el metodo get para actualizarDescripcion en el controlador
    /* 

    function actualizarPuesto_get(){

    //$this->response("test correcto");

    $nuevoNombre1 = $this->get('puesto');

    $this->response($nuevoNombre1);

    }
    */

     //Mandamos una peticion por el metodo get para actualizarDescripcion en el controlador
    /* 

    function actualizarDescripcion_get(){

    //$this->response("test correcto");

    $nuevoNombre2 = $this->get('descripcion');

    $this->response($nuevoNombre2);
    
    }
    */

    //Obtenemos una peticion por el metodo post para actualizarNombre mediante el modelo
    function actualizarNombre_post(){

    //$this->response("test correcto");

         if ( $this->sessionclass->is_logged_in() == 1) {  


                $nuevoNombre = $this->post('name');
                $idUsuario= $this->sessionclass->getidusuario();
                $respuestaDB = $this->misdatosmodel->actualizarNombre($nuevoNombre,$idUsuario);
                $this->response($respuestaDB);

            }else{
            $this->sessionclass->logout();
        }     
    }

    function mostrarNombre_get(){

    //$this->response("test correcto");
        if ( $this->sessionclass->is_logged_in() == 1) {  
 
        $idUsuario= $this->sessionclass->getidusuario();

        $respuestaDB = $this->misdatosmodel->mostrarNombre($idUsuario);

        $this->response($respuestaDB);


         }else{
            $this->sessionclass->logout();
        }

    }

    function actualizarPuesto_post(){

        //$this->response("test correcto");
         if ( $this->sessionclass->is_logged_in() == 1) {  

                $nuevoPuesto = $this->post('puesto');

                //$this->response($nuevoNombre1);

                $idUsuario= $this->sessionclass->getidusuario();

                $respuestaDB1 = $this->misdatosmodel->actualizarPuesto($nuevoPuesto,$idUsuario);

                $this->response($respuestaDB1);

         }else{
            $this->sessionclass->logout();
        }     

    }

    function mostrarPuesto_get(){

    //$this->response("test correcto");
        if ( $this->sessionclass->is_logged_in() == 1) {  

            $idUsuario= $this->sessionclass->getidusuario();

            $respuestaDB = $this->misdatosmodel->mostrarPuesto($idUsuario);

            $this->response($respuestaDB);

         }else{
            $this->sessionclass->logout();
        }

    }

    function actualizarDescripcion_post(){

        //$this->response("test correcto");
 if ( $this->sessionclass->is_logged_in() == 1) {  

        $nuevoDescripcion = $this->post('descripcion');

        //$this->response($nuevoNombre1);

        $idUsuario= $this->sessionclass->getidusuario();

        $respuestaDB2 = $this->misdatosmodel->actualizarDescripcion($nuevoDescripcion,$idUsuario);

        $this->response($respuestaDB2);

         }else{
            $this->sessionclass->logout();
        }


    }

    function mostrarDescripcion_get(){

    //$this->response("test correcto");
        if ( $this->sessionclass->is_logged_in() == 1) {  

    $idUsuario= $this->sessionclass->getidusuario();

    $respuestaDB = $this->misdatosmodel->mostrarDescripcion($idUsuario);

    $this->response($respuestaDB);

            
         }else{
            $this->sessionclass->logout();
        }

    }

/*************************************************************************************************************/

    /*Termina rest*/
}