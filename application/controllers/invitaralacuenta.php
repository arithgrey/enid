<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Invitaralacuenta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function index(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			$data['titulo']='Invitar integrante';
		
    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/



		
}/*Termina el controlador */
