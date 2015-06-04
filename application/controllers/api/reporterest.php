<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class ReporteRest extends REST_Controller{

    
    function __construct(){

            parent::__construct();

            $this->load->model("reportemodel");            
            $this->load->library('sessionclass');
            
    }        

    function obteniendoDatos_post()
    {
        $texto = $this->post('algoTexto');

        $caja = $this->post('cajaDeTexto');

        $selection = $this->post('seleccion');

        $respuestaDB = $this->reportemodel->datos($texto,$caja,$selection);
        
        $this->response($respuestaDB);

    }

}
