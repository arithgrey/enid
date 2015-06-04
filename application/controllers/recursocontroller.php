<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recursocontroller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('sessionclass');  
		
		
	}
	/**/
	function perfiles(){
		
//echo sha1("administradortest");
		
		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
										

				$data['titulo']='Perfiles';
				
				/*
				$this->load->view('Template/header_template', $data);		
				$this->load->view('perfiles/principal', $data);			
				$this->load->view('Template/footer_template', $data);	
				*/
				
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('perfiles/principal', $data);	
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		
		
	}	

	function usuarios(){

		if ( $this->sessionclass->is_logged_in() == 1) {		
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$data["menu"] = $menu;					
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				$perfil = $this->sessionclass->getperfiles();

				$data['titulo']='Usuarios';



				
				$this->load->view('TemplateFEX/headersesion', $data);
				$this->load->view(displayviewusuario( $perfil ), $data);	
				$this->load->view('TemplateFEX/footersession', $data);	

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}

		
		
	}

	function tiposeventos(){

		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
						
				
				$data['titulo']='Tipos eventos';
				

				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);			


			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}


		
		
	}

	function servicios(){


		if ( $this->sessionclass->is_logged_in() == 1) {			
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;


				$data['titulo']='Servicios';

				/*
				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);	
				*/

				
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('TemplateFEX/footersession', $data);	
			



			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}

		
	}
	function tiposservicios(){


		if ( $this->sessionclass->is_logged_in() == 1) {						
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;


				$data['titulo']='Tipos servicios';
				
				/*	
				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);	
				*/
				$this->load->view('TemplateFEX/headersesion', $data);		
					
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}

			
	}
	

	/*Inicia eventos*/
	function eventos(){

		if ( $this->sessionclass->is_logged_in() == 1) {			
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				

				$data['titulo']='Eventos';
				
				/*	
				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);	
				*/
				$this->load->view('TemplateFEX/headersesion', $data);		
					
				$this->load->view('TemplateFEX/footersession', $data);	
				
			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	
			
	}/*Termina evetos*/




	function informacioncuenta(){
		if ( $this->sessionclass->is_logged_in() == 1) {			
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				

				$data['titulo']='Mi cuenta';
				
				/*	
				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);	
				*/
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('micuenta/principal' , $data);		
				$this->load->view('TemplateFEX/footersession', $data);	
				
			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	
	}/**/

	

/*Inicia primeros pasos */
	function primerospasos(){

		if ( $this->sessionclass->is_logged_in() == 1) {			
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				

				$data['titulo']='Ayuda y primeros pasos';
				
				/*
				$this->load->view('Template/header_template', $data);						
				$this->load->view('Template/footer_template', $data);	
				*/
				$this->load->view('TemplateFEX/headersesion', $data);		
					
				$this->load->view('TemplateFEX/footersession', $data);	
							
			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	
			
	}/*Termina primeros pasos */







	/*
	function organizacion(){

		if ( $this->sessionclass->is_logged_in() == 1) {			
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu; 
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre; 				

				$data['titulo']='Organización';


				$this->load->view('TemplateFEX/headersesion', $data);		
					
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			
			$this->sessionclass->logout();
		}
	
	}*/
	
	/*Inicia función organización*/
	function organizacion(){

		if ( $this->sessionclass->is_logged_in() == 1) {			
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu; 
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre; 				

				$data['titulo']='Organización';

				$this->load->view('TemplateFEX/headersesion', $data);
				$this->load->view('organizacion/principal', $data);
				$this->load->view('TemplateFEX/footersession', $data);
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}
	
	}/*Termina funcion organización*/


	

	/*Inicia perfil avanzado*/
	function perfilesavanzado(){
		
		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
				
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;

				$recurso = $this->input->get("moduloconfig");
						

				$data['titulo']='Configuración perfiles';
				$data["modulo"] = $recurso;
				
				/*
				$this->load->view('Template/header_template', $data);		
				$this->load->view('modulo/moduloconfig.php' , $data);				
				$this->load->view('Template/footer_template', $data);	
				*/

				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('modulo/moduloconfig.php' , $data);			
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		
		
	}/*Termina perfil avanzado*/	




		
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */