<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reportecontrolador extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model("model_pdf" , "pdf");
        $this->load->library('sessionclass');  
        
        
    }

    function index()
    {



            if ( $this->sessionclass->is_logged_in() == 1) {            
                
                $menu = $this->sessionclass->generadinamymenu();            
                $data["menu"] = $menu;
                $nombre = $this->sessionclass->getnombre();
                //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
                $data["nombre"]= $nombre;
                $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                $data['titulo']='Mejora continua';

                        $data['titulo']='Informe de error';

                    	$this->load->view('TemplateEnid/header_template', $data);
                        $this->load->view('reporte/reportes');
                        $this->load->view('TemplateEnid/footer_template', $data);

                }else{
            /*Terminamos la session*/
            $this->sessionclass->logout();
        }   



    	
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
                
                $data["descriptionpage"] = "descriptionpage";
        
                $data["section_mail"]="Testimonios";
                $this->load->view('TemplateEnid/header_template', $data);

                $this->load->view('reporte/listarReportes/listado');
                $this->load->view('TemplateEnid/footer_template', $data);


            }else{
            /*Terminamos la session*/
            $this->sessionclass->logout();
        }   

    }
    

     function exportaPDF(){
        $data['titulo']='PDF de Reportes';

        $data["reportesystema"] = $this->pdf->getReportes();

        $this->load->view('Template/header_general', $data);
        $this->load->view('reporte/exportaPDF/documento');
        $this->load->view('Template/footer', $data);
    }


}
