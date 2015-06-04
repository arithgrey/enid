
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Administracionarchivos extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model("documentomodel");
		$this->load->library('sessionclass');  
		
		
	}



	function cuestionario(){
		

		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				$data['titulo']='Cuestionario de medición'; 

				$documentosolicitado = $this->input->get("documentosolicitado");
				$data["documentosolicitado"] = $documentosolicitado;
				$this->load->view('TemplateFEX/headersesion', $data);	
				$this->load->view('administracionarchivos/micuestionario' , $data);	
				$this->load->view('TemplateFEX/footersession', $data);	

				
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}				
	}
	/*****/
	function documentos(){
		
		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
										

				$data['titulo']='Documentos solicitados para que la empresa pueda brindar el crédito'; 

					
				$idarchivo = $this->input->get("tramite");
				$existearchivo  = $this->documentomodel->checkifexistbyidarchivo($idarchivo );

				if ($existearchivo == 1 ) {
					
					$data["idarchivo"] = $idarchivo;
					$this->load->view('TemplateFEX/headersesion', $data);	
					$this->load->view('administracionarchivos/documentos' , $data);	
					$this->load->view('TemplateFEX/footersession', $data);	

				}else{
				
					redirect(base_url('index.php/administracionarchivos'));
				}

				
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		
		
	}



	/*****/
	function index(){
		
		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
										

				$data['titulo']='Administración de archivos';
				

				
				$this->load->view('TemplateFEX/headersesion', $data);	
				$this->load->view('administracionarchivos/principal' , $data);	
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		
		
	}	








		
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */