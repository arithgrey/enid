<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( 'application/libraries/api_github/github-php-client-master/client/GitHubClient.php');

require_once( 'application/config/github.php');
class Soportesocialintelligence extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	function documentacion(){

		$data['titulo']='Documentación';
		$data["descriptionpage"] = "descriptionpage";
		$this->load->view('Template/header_general', $data);

		$this->load->view('soporte/documentacionview', $data);
		$this->load->view('Template/footer', $data);
		
	}
	function opensource(){

		$data['titulo']='Open source';
		$client = new GitHubClient();		
		$client->setCredentials( _user , _pass);

		$repolist = $client->repos->listUserRepositories("arithgrey");		
		$data["repolist"] = $repolist;
		$data["arithuser"] = $client->users->getSingleUser("arithgrey");	
		$data["section_mail"]="arithgrey";
		$data["commits"] = $client->repos->commits;
		
		

		
		

			$data["descriptionpage"] = "Portafolio web @arithgrey";
			$this->load->view('Template/header_general', $data);
			$this->load->view('soporte/opensourceview', $data);
			$this->load->view('Template/footer', $data);	

		
			
	}

	function testimonios(){

		$data['titulo']='Testimonios';
		$data["descriptionpage"] = "descriptionpage";
		
		$data["section_mail"]="Testimonios";
		$this->load->view('Template/header_general', $data);
		$this->load->view('soporte/testimoniosview', $data);
		$this->load->view('Template/footer', $data);
			
	}
	function nosotros(){

		$data['titulo']='Nosotros';
		$data["descriptionpage"] = "descriptionpage";
		$this->load->view('Template/header_general', $data);
		$data["section_mail"]="nosotros";

		$this->load->view('soporte/abouthview', $data);
		$this->load->view('Template/footer', $data);
			
	}

	function servicios(){

		$data['titulo']='Servicios';
		$data["descriptionpage"] = "descriptionpage";
		$this->load->view('Template/header_general', $data);
		$data["section_mail"]="services";


		$this->load->view('soporte/serviciosview', $data);
		$this->load->view('Template/footer', $data);
		

	}

	function mision(){

		$data['titulo']='Misión';
		$data["descriptionpage"] = "descriptionpage";
		$data["section_mail"]="misión";

		$this->load->view('Template/header_general', $data);
		$this->load->view('soporte/misionview', $data);
		$this->load->view('Template/footer', $data);

	}
	function vision(){

		$data['titulo']='Visión';

		$data["descriptionpage"] = "descriptionpage";
		$data["section_mail"]="Visión";

		$this->load->view('Template/header_general', $data);
		$this->load->view('soporte/visionview', $data);
		$this->load->view('Template/footer', $data);	
	}


	function contacto(){

		$data['titulo']='Contacto';
		$data["section_mail"]="Contacto";
		$this->load->view('Template/header_white', $data);
		$this->load->view('soporte/contactoview', $data);
		$this->load->view('Template/footer', $data);	
	}

	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */