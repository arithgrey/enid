<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Experiencia  extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function index(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			$data['titulo']='Casos de éxito';
			
			

			$this->load->view("TemplateFEX/headercasosexito" , $data);
			$this->load->view("experiencia/principal" , $data);
			$this->load->view("TemplateFEX/footer" , $data);
				


			/*	
				$this->load->view('Template/header_home', $data);
				$this->load->view('Template/footer', $data);	
			*/	




    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/



		
}/*Termina el controlador */
 