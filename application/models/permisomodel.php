<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class permisomodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */



function updatepermiso($idperfil , $idpermiso){

    $queryexist ="SELECT * FROM perfil_permiso WHERE idperfil = $idperfil AND idpermiso = $idpermiso";
    $result_select  = $this->db->query($queryexist);       

    $exist = $result_select->num_rows();
    
    $query_dinamico ="";
        if ($exist >0 ) {
            
            /*Elimina el permiso */        
            $query_dinamico ="DELETE FROM perfil_permiso WHERE idperfil = $idperfil AND idpermiso = $idpermiso";

        }else{
            /*Agrega permiso */
            $query_dinamico = "INSERT INTO perfil_permiso (idperfil , idpermiso) 
            VALUES ($idperfil , $idpermiso)"; 

        }

    $resultdinamico  = $this->db->query($query_dinamico);       
    return $resultdinamico;


}





/*Termina modelo */
}



