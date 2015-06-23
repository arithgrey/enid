<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Perfilrecursorestcontroller extends REST_Controller{

    function __construct(){

    		parent::__construct();


            $this->load->model("perfilmodel");            
            $this->load->library('sessionclass');

            
        }         
	function index(){}        



    function trydeleteperfilrecurso_POST(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*De acuerdo al perfil pedimos los accesos*/
            $idrecurso = $this->post("idrecurso");
            $idperfil = $this->post("idperfil");

          //  $permiso = $this->sessionclass->verificapermiso( "Perfiles, recursos y permisos" ,  "eliminar" );            
            //if ($permiso == 1 ){
                /* Desplegamos los  perfiles*/
                    
                                           
                $this->response( $this->deleteperfilrecurso($idperfil , $idrecurso) );

            //}else{
			//	$this->response("No cuenta con los permisos suficientes para eliminar el permiso");            	
            //}
         /*Cuando no hay session*/   
        }else{
            $this->sessionclass->logout();
        }

    }/*Termina función*/



    function deleteperfilrecurso($idperfil , $idrecurso){

    	return $this->perfilmodel->deleteperfilrecurso($idperfil , $idrecurso );

    }


    /*******************************************Actualiza los perisos ************************************/





        function tryupdateperfilrecurso_POST(){

            if ( $this->sessionclass->is_logged_in() == 1) {            

                /*De acuerdo al perfil pedimos los accesos*/
                $idrecurso = $this->post("idrecurso");
                $idperfil = $this->post("idperfil");
                //$permisoupdate =  $this->post("permiso");

                //$permiso = $this->sessionclass->verificapermiso( "Perfiles, recursos y permisos" ,  "eliminar" );            
                
                //if ($permiso == 1 ){
                    /* Desplegamos los  perfiles*/
                    
                   

                    
                    $this->response( $this->updateperfilpermisopermiso( $idperfil , $idrecurso  ) );                                                   

                //}else{
                  //  $this->response("No cuenta con los permisos suficientes para eliminar el permiso");             
                //}
             /*Cuando no hay session*/   
            }else{
                $this->sessionclass->logout();
            }

    }/*Termina función*/





    /**/
    function updateperfilpermisopermiso( $idperfil , $idrecurso ){

       return $this->perfilmodel->updateperfilpermisopermisodb($idperfil , $idrecurso );
                                  
    }

    /*Termina la función*/






	/*Termina rest*/
}