<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');
class Sessionclass extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model("perfilrecursomodel");
		

		
	}


	function is_logged_in()  {			
		$is_logged_in = $this->session->userdata('logged_in');	
		if(!isset($is_logged_in) || $is_logged_in != true) {
			
			return false;
		}
		return true;
	}	
	function logout(){				
		$this->session->sess_destroy();				
		redirect(base_url());
	}
	function getemailuser(){
		return $this->session->userdata('email');
	}	
	function getnombre(){
		return $this->session->userdata('nombre');
	}
	function getidusuario(){
		return $this->session->userdata('idusuario');
	}
	function getfecharegistro(){
		return $this->session->userdata('fecha_registro');
	}
	function getperfiles(){
		return $this->session->userdata('perfiles');	
	}

	function getidempresa(){
		
		return $this->session->userdata('idempresa');	
	}
	function getdisplayrecursobyperfiles(){
		$this->load->model("perfilrecursomodel");
		$perfiles = $this->getperfiles();
		$data_recursos = $this->perfilrecursomodel->displayrecursobyperfiles($perfiles);
		return  $data_recursos;
	}

	function getuserdataperfil(){
		return $this->session->userdata('perfildata');
	}

	
	/*Nombre del perfil del usuario actual */

	function getnameperfilactual(){

		$dataperfil = $this->getuserdataperfil();
		$nombre ="";		
		foreach ($dataperfil as $row) {
			
			$nombre = $row["nombreperfil"];
		}
		return $nombre;
	}



	/*Generamos menú*/
	function generadinamymenu(){
		
		$perfiles = $this->getperfiles();

		$data = $this->perfilrecursomodel->displayrecursobyperfiles($perfiles);
		$menu ="";



		


		
		foreach ($data as $row) {
			
			$mainpage = base_url($row["urlpaginaweb"]);	
			$icono = $row["iconorecurso"];
			$dinamicimg = base_url() . "application/img/general/".$icono;

			




			

$menu .= "<li class='dropdown '> 
			<a class='dropdown-toggle' data-toggle='dropdown' href=". $mainpage.  ">". $row["nombre"] . "</a>
	        	<ul class='dropdown-menu'>";
	        $datasubpaginas = $row["subpaginas"];
	        $subpaginasli = ""; 
	        foreach ($datasubpaginas as $row) {
	        	
	        	

	        	
				
	        	$urlpag = base_url($row["urlpaginaweb"]); 
	        	$iconosub = $row["iconpermiso"];				        		        	
	        	$subpaginasli .= "<li class='dropdown '><a  class='dropdown-toggle' data-toggle='dropdown' href='".$urlpag."' >". $row["nombrepermiso"] ."</a>";	   
	        	$subpaginasli .= "</li>";
	        }

	        $menu.= $subpaginasli;		           	    
		    $menu.= "</ul>
	        </li>
			";	

		}	



		return $menu;
	}



/**/
	function verificapermiso($nombrerecurso ,  $permiso ){

		
		$perfiles = $this->getperfiles();		
		$data_recursos = $this->perfilrecursomodel->displayrecursobyperfiles($perfiles);
        $banderaso=0;          


        foreach ( $data_recursos as $row){                                     
	        /*Validamos que el perfil tenga acceso al recurso*/    
	        
	        if ($row["recursonombre"]== $nombrerecurso && $row["recursodata"][$permiso] == 1) {

                    $banderaso=1;
                }

        }
        return $banderaso;


	}




	
}

/* End of file Someclass.php */ 

