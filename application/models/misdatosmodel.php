<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class misdatosmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function actualizarNombre($nombre, $idPersona)
{
    $queryUpdate = "UPDATE usuario SET nombre = '".$nombre."' WHERE idusuario = '".$idPersona."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

function mostrarNombre($idPersona)
{
    $querySelect = "SELECT nombre FROM usuario WHERE idusuario = '".$idPersona."' ";
    $result = $this->db->query( $querySelect );     
    return $result ->result_array();
}

function actualizarPuesto($puesto, $idPersona1)
{
  $queryUpdate = "UPDATE usuario SET puesto = '".$puesto."' WHERE idusuario = '".$idPersona1."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

function mostrarPuesto($idPersona)
{
    $querySelect = "SELECT puesto FROM usuario WHERE idusuario = '".$idPersona."' ";
    $result = $this->db->query( $querySelect );     
    return $result ->result_array();
}

function actualizarDescripcion($descripcion, $idPersona2)
{
  $queryUpdate = "UPDATE usuario SET descripcion = '".$descripcion."' WHERE idusuario = '".$idPersona2."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}
function mostrarDescripcion($idPersona)
{
    $querySelect = "SELECT descripcion FROM usuario WHERE idusuario = '".$idPersona."' ";
    $result = $this->db->query( $querySelect );     
    return $result ->result_array();
}
    
}/*Termina la función */







