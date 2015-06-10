<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Comentarioprincipal extends REST_Controller{

function __construct(){
  parent::__construct();
  $this->load->model("comentariosmodel");
  
}         
	

function setComent_post(){

    $comentario =  $this->post("comentario");

    $user ="arithgrey";
    $responsedb = $this->comentariosmodel->setComentdb($user, $comentario);
    return $this->response($responsedb);
}/*Termina la función*/

/**********************************************************************************/





/**********************************************************************************/

	/*Termina rest*/
}
