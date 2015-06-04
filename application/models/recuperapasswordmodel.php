<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class recuperapasswordmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();

}

function recuperarPassword($email)
{
	$querySelect = "SELECT * FROM usuario WHERE email = '".$email."' ";
    //$querySelect = "SELECT * FROM usuario WHERE email = 'marco_alducin@ubcubo.com' ";
    $result = $this->db->query( $querySelect );     
    return $result ->num_rows();
}

function actualizaPassword($email,$cadena){
	$consulta = "UPDATE usuario SET password = '".$cadena."' WHERE email = '".$email."' ";
	$actualizacion = $this->db->query($consulta);
	return $actualizacion;
}


}/*Termina la función */






