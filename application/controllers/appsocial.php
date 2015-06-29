<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Appsocial extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function principal(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			echo "string";
			
    	}else{

			$this->sessionclass->logout();
		}			

	}/*Termina la función*/




		
}/*Termina el controlador */
