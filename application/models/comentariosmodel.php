<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class comentariosmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}


function setComentdb($user, $comentario){


    $insertuser = "INSERT INTO comentario (comentario, usuario) 
    VALUES ('".$comentario."' , '".$user."' )"; 
    
    $result = $this->db->query($insertuser);       
            
    return $result;

}/*Termina la función */



/*Termina modelo */
}



