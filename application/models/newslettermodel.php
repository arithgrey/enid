<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class newslettermodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function registrarCorreo($correo, $seccion)
{
	


	$queryselect ="SELECT * FROM newsletters  WHERE mail='".$correo."' ";
	$resultselect = $this->db->query($queryselect);
	$exist = $resultselect->num_rows();

	if ($exist > 0 ) {
		return true;
	}else{

	  	$consulta = "INSERT INTO newsletters (mail, seccion) VALUES ('".$correo."','".$seccion."') ";
	  	$resultado = $this->db->query($consulta);
	  	return $resultado;
  		
	}

}


}/*Termina la función */






