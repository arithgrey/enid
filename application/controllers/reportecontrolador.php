<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reportecontrolador extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model("model_pdf" , "pdf");
        $this->load->library('sessionclass');  
        
        
    }

    function index()
    {
        $data['titulo']='Informe de error';

    	$this->load->view('TemplateFEX/header', $data);
        $this->load->view('reporte/reportes');
        $this->load->view('TemplateFEX/footer', $data);
    	
    }

     function listarReportes()
    {

            if ( $this->sessionclass->is_logged_in() == 1) {            
                
                $menu = $this->sessionclass->generadinamymenu();            
                $data["menu"] = $menu;
                $nombre = $this->sessionclass->getnombre();
                //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
                $data["nombre"]= $nombre;
                $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                $data['titulo']='Mejora continua';
                
                $this->load->view('TemplateFEX/headersesion', $data);
                $this->load->view('reporte/listarReportes/listado');
                $this->load->view('TemplateFEX/footer', $data);


            }else{
            /*Terminamos la session*/
            $this->sessionclass->logout();
        }   

    }
    

     function exportaPDF(){
        $data['titulo']='PDF de Reportes';

        $data["reportesystema"] = $this->pdf->getReportes();

        $this->load->view('TemplateFEX/header', $data);
        $this->load->view('reporte/exportaPDF/documento');
        $this->load->view('TemplateFEX/footer', $data);
    }


}
