<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class permisosmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Función que  verifica que el usuario pueda realizar alguna operación*/
        
    function usercan(){

    }


}



