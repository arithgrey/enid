<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Usergeneralrest extends REST_Controller{

        function __construct(){

            parent::__construct();
            $this->load->model("usuariogeneralmodel");   
            $this->load->model("empresamodel");
            

        }        
	function index(){}        
	function validaterecordusergeneral_post(){

                $user =  $this->post("user");                        
                $mail = $this->post("mail");
                $pw = $this->post("pw");
                $empresaname  =  $this->post("empresaname");

                $info="";
                $redirect_url = base_url('index.php/api/sessionrestcontroller/startsessionusergeneral/format/json/');                                                        
                $status ="0";

              
    	           $existecompañia = $this->empresaexist($empresaname);    
                   

                    if ($existecompañia == 1 ) {
                        
                        $info="La empresa que intenta registrar ya se encuentra en el sistema";
                        
                    }else{
                                    /*Registramos en el base de datos la empresa */

                                    $isuser = $this->isuserexist($user , $mail);


                                    if (!$isuser){
                                         $idempresaregistrada = $this->recordempresa($empresaname);                                     
                                         $responsedb = $this->recordusergeneral($user ,  $mail  , $pw , $idempresaregistrada );
                                        if ($responsedb == 1 ){
                                                
                                                $status ="1";
                                                $info =  "Usuario registrado correctamente"; 
                                                
                                        }else{
                                                $info =  "El usuario ya existe en el sistema, cambiar nombre";        
                                        }                        
                                }else{
                                        $info =  "El usuario ya existe en el sistema, cambiar nombre"; 
                                }  




                     

                    }


                 /*Retornamos data */   
                     $param = array( 'mail' =>  $mail , 
                                        'secret'=> $pw ,
                                        'infor' => $info,
                                        'status' => $status,
                                        'redirect_url' => $redirect_url );
                     $this->response($param);



    }/*Termina la función */








        function empresaexist( $nombreempresa ){

            
            return  $this->empresamodel->existcompanybyname( $nombreempresa );
        }


        /*Verifica en la base de datos que exista el usuario por nombre*/
        function isuserexist($user ,  $mail){

                $responsedb = $this->usuariogeneralmodel->validaexistuser($user , $mail );                
                if ($responsedb >0) 
                         return true;  
                else
                        return false;                
        }
        /*Registra en el sistema al usuario general */ 
        function recordusergeneral($usuario , $mail , $pw , $idempresaregistrada){

                $responsedb = $this->usuariogeneralmodel->recordusergeneral($usuario , $mail , $pw , $idempresaregistrada);                
                if ($responsedb != true){
                        return 0;
                }else{
                        return 1;
                }                                          
        }/**/


        /*Registramos la empresa con un solo solo el nombre*/
        function recordempresa($nombreempresa){

            return  $this->empresamodel->recordempresawhitname( $nombreempresa );
        }


/*Termina rest*/
}