<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Cuentageneralrest extends REST_Controller{
      
    function __construct(){
            parent::__construct();
            
            $this->load->model('cuentageneralmodel');
            
            $this->load->library('sessionclass');
            
        }     

    function index(){}        
    /*******************************Regresa el número de integrantes de la cuenta ***********************/
     function getnumintegrantescuenta_GET(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  
            /*Capturamos datos*/
    
            
            $this->response($this->getnumerointegrantesbyidusuario());
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }    
    }/*Termina función */

/*Consultamos el número de integrantes en la cuenta por id del usuario */
    function getnumerointegrantesbyidusuario(){
       $iduser  = $this->sessionclass->getidusuario();
       $numerointegrantes  = $this->cuentageneralmodel->getintegrantesbyidusuario($iduser);
       return $numerointegrantes;
       //return $iduser;
    }/*Termina la función*/

/*************************************************************************************************************/
    
    function getintegrantesinfocuenta_GET(){
        if ( $this->sessionclass->is_logged_in() == 1) {  
            /*Capturamos datos*/
    
            
            $this->response($this->getintegrantesinformacion());
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
            
    }/*Termina la cuenta */

    function getintegrantesinformacion(){
         $iduser  = $this->sessionclass->getidusuario();
         $integrantes  = $this->cuentageneralmodel->getintegrantesinforme($iduser);
         return $integrantes;
    }

/*************************************************************************************************************/
 
    
    function getlistperfilesfisponiblesbycuenta_get(){
            if ( $this->sessionclass->is_logged_in() == 1) {  
            /*Capturamos datos*/
    
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->getplanesbyempresa($idempresa)  );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
            
    }

    function getplanesbyempresa($idempresa){
        //select idplan from empresa where idempresa
        $perfiles  = $this->cuentageneralmodel->getperfilesdelacuenta($idempresa);
        return $perfiles;      
    }   

    function getnumeroclientes_get(){
            if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getnumeroclientesnotrepeat($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getnumeroclientesenvalidacion_get(){
         if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
           $this->response( $this->cuentageneralmodel->getnumeroclientesenvalidacion($idempresa) );
             //$this->response( $idempresa );       
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getnumeroclientesquehesolicitado_get(){
    
      if ( $this->sessionclass->is_logged_in() == 1) {  
          
           $idempresa = $this->sessionclass->getidempresa();    
           $iduser = $this->sessionclass->getidusuario();
           $this->response( $this->cuentageneralmodel->getnumeroclientesquehesolicitado($idempresa, $iduser));
            
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }      
    }

    function getnumeroclientesquemeanaprobado_get(){
    
      if ( $this->sessionclass->is_logged_in() == 1) {  
          
           $idempresa = $this->sessionclass->getidempresa();    
           $iduser = $this->sessionclass->getidusuario();
            $this->response( $this->cuentageneralmodel->getnumeroclientesquemeanaprobado($idempresa, $iduser) );
            
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }      
    }

    function getnumeroclientesrechazados_get(){
    
      if ( $this->sessionclass->is_logged_in() == 1) {  
          
           $idempresa = $this->sessionclass->getidempresa();    
           $iduser = $this->sessionclass->getidusuario();
           $this->response( $this->cuentageneralmodel->getnumeroclientesrechazados($idempresa, $iduser) );
            
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }      
    }

    function getNumeroOmisionesGraves_get(){
            if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getNumeroOmisionesGraves($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getNumeroSinOmisiones_get(){
            if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getNumeroSinOmisiones($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getNumeroConOmisiones_get(){
            if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getNumeroConOmisiones($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getNumeroPersonaFisica_get($idempresa){
        if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getNumeroPersonaFisica($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    function getNumeroPersonaMoral_get($idempresa){
        if ( $this->sessionclass->is_logged_in() == 1) {  
          
            $idempresa = $this->sessionclass->getidempresa();    
            $this->response( $this->cuentageneralmodel->getNumeroPersonaMoral($idempresa) );
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
    }

    


    /*Termina rest*/

}
?>
