<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Creditorest extends REST_Controller{

    function __construct(){
            parent::__construct();
           
            $this->load->model("empresamodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        





/********************************************************************************************************/

function listinfocreditobyempresa_get(){

    
    if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
           $idempresa =  $this->sessionclass->getidempresa();
           $this->response($this->getcreditosbyempresa($idempresa));  


       }else{
            $this->sessionclass->logout();
        }


}/*Termina la función*/



function getcreditosbyempresa($idempresa){

    return $this->empresamodel->getcreditosdisponiblesbyidempresa($idempresa);
}/*Termina la función*/

/**********************************************************************************/





/**********************************************************************************/

	/*Termina rest*/
}
