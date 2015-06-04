<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class passwordmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function actualizarPassword($antes, $nuevo, $idPersona)
{	
	$existe = count($this->validarPassword($antes, $idPersona));
	if($existe != 1)
	{
		return "<strong>¡OH NO!</strong><br>La contraseña anterior no coincide...";
	}
	else
	{
		$queryUpdate = "UPDATE usuario SET password = '".$nuevo."' WHERE idusuario = '".$idPersona."' ";  
    	$dbresponse = $this->db->query( $queryUpdate );     
    	return $dbresponse;
	}
	//return $existe;

	/*if($pass != $consulta)
	{
		return "La contraseña anterior no coincide...";
	}
	else
	{
		$queryUpdate = "UPDATE usuario SET password = '".$pass."' WHERE idusuario = '".$idPersona."' ";  
    	$dbresponse = $this->db->query( $queryUpdate );     
    	return $dbresponse;
	}*/

}

function validarPassword($antes,$idPersona)
{
    $querySelect = "SELECT password FROM usuario WHERE idusuario = '".$idPersona."' AND password = '".$antes."'";
    $result = $this->db->query( $querySelect );     
    return $result ->result_array();
}


}/*Termina la función */






