<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Recursosrestcontroller extends REST_Controller{

    function __construct(){
            
            parent::__construct();

            $this->load->model("recursosmodel");                     
            $this->load->library('sessionclass');
            
            
        } 
    function index(){}      
     function listrecursos_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
            $nombrerecurso = $this->get("recurso");
            /*De acuerdo al perfil pedimos los accesos*/
            //$permiso = $this->sessionclass->verificapermiso($nombrerecurso ,  "consultar" );

           

            //if ($permiso == 1 ) {
                
                /*Despliega tabla recursos */
                $data = $this->getrecursos();
                $this->response($data);
              

            //}else{

                //$this->response("No cuenta con los permisos para acceder a éste modulo");

                /*Descpliega mensaje por falta de permisos */
            //}
         /*Cuando no hay session*/   
        }else{
            $this->sessionclass->logout();
        }

    }/*Termina listar recursos */


    /*Listar recursos */
    function getrecursos(){
 

        return  $this->recursosmodel->listarrecursos();
    }





    /****************************************UPDATE***************************************************/

    function updateinforecurso_POST(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
                $idrecurso =  $this->post("idrecurso");
                $descripcion =  $this->post("descripcionrecurso");
                
                    /*Verificamos si es que el perfil puedo o no editar el modulo de recursos */
                    //$permiso = $this->sessionclass->verificapermiso("Recursos" ,  "editar" );

                    //if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permisos actualizamos */  
                        
                        $this->response( $this->updaterecurso($idrecurso , $descripcion) );
                    //}else{

                      //   $this->response("No cuenta con los permisos para iditar la información de éste modulo");
                        /*Retornamos mensaje de permisos fallidos*/
                    //}    

            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */


    function updaterecurso($idrecurso , $descripcion){

        return  $this->recursosmodel->updaterecurso(trim($idrecurso) , trim($descripcion) );       
    }



    /***********************************************Registros***************************************************/

    
    function insertinforesource_POST(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
                     $nombre =  $this->post("recursonombre");
                     $descripcionrecurso =  $this->post("descripcionrecursotext");
                    
                    /*Verificamos si es que el perfil puedo o no editar el modulo de recursos */
                   // $permiso = $this->sessionclass->verificapermiso("Recursos" ,  "agregar" );
                   

                   // if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permiso registramos*/  
                        
                        $this->response( $this->insertresource($nombre , $descripcionrecurso ) );
                        
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

    function insertresource($nombre , $descripcionrecurso ){


        return  $this->recursosmodel->insertrecurso(trim($nombre) , trim($descripcionrecurso) );

    } 


    /**********************************Eliminar recurso ***************************************/

    function deleterecurso_POST(){

        if ( $this->sessionclass->is_logged_in() == 1) {  
            
                    $idrecurso =  $this->post("idrecurso");
                    
                    ///$permiso = $this->sessionclass->verificapermiso("Recursos" ,  "eliminar" );
                    
                   // if ($permiso == 1 ) {
                      
                        /*si el usuario tiene permiso registramos*/  
                        
                        $this->response( $this->deleterecursoinfo($idrecurso) );
                        
                    //}else{

                      //   $this->response("No cuenta con los permisos para iditar la información de éste modulo");
                        /*Retornamos mensaje de permisos fallidos*/
                    //}    

            /*Cuando no hay session*/
        }else{

            $this->sessionclass->logout();
        
        }    



    /*Termina la función*/        
    }



    /*Elimina el recurso en la base de datos*/
    function deleterecursoinfo($idrecurso){
    
        return  $this->recursosmodel->removerecursobyid($idrecurso);

    }





    /********************************************PERFILES RECURSOS *************************/



    function listrecursosperfilesconfig_get(){

        if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
            $nombrerecurso = $this->get("recurso");
            /*De acuerdo al perfil pedimos los accesos*/
            //$permiso = $this->sessionclass->verificapermiso($nombrerecurso ,  "consultar" );

           

            //if ($permiso == 1 ) {
                
                /*Despliega tabla recursos */
                $data = $this->getrecursosperfilesconfig();
                $this->response($data);
              

            //}else{

                //$this->response("No cuenta con los permisos para acceder a éste modulo");

                /*Descpliega mensaje por falta de permisos */
            //}
         /*Cuando no hay session*/   
        }else{
            $this->sessionclass->logout();
        }

    }/*Termina listar recursos */


    /*Listar recursos */
    function getrecursosperfilesconfig(){
 

        return  $this->recursosmodel->listarrecursosperfilesconfig();
    }





/**************************************Recurso por id **********************************/

    function  getrecursobyid_get(){
        if ( $this->sessionclass->is_logged_in() == 1) {            



                $recursoid =  $this->get("recursoid");
                $this->response($this->listinforecursobyid($recursoid));
              

         /*Cuando no hay session*/   
        }else{
            $this->sessionclass->logout();
        }



    }/*Termina la función*/ 




    function listinforecursobyid($idrecurso){

        return  $this->recursosmodel->getrecursobyid($idrecurso);
     
    }


/****************************************************************************************/




	/*Termina rest*/
}