<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class organizacionmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function mostrarCiudades($idEmpresa)
{
    $listar_uno = " SELECT * FROM countries ";
    $result = $this->db->query( $listar_uno );
    $uno= $result->result_array();

    $listar_todos = "SELECT countries.idCountry from empresa, countries where empresa.idempresa = '".$idEmpresa."' and empresa.idCountry = countries.idCountry";
    $dbresponse = $this->db->query( $listar_todos );     
    $dos = $dbresponse->result_array();

    $consultas = array('listar_todos' => $uno, 'listar_uno' => $dos);

    return $consultas;
}

function actualizarCiudades($idEmpresa,$nuevoIdCiudad)
{
    $queryUpdate = "UPDATE empresa SET idCountry = '".$nuevoIdCiudad."' WHERE idempresa = '".$idEmpresa."' "; 
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

}/*Termina la función */
