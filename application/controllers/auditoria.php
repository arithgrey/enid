<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auditoria extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        
        $this->load->library('tcpdf');
        
        $this->load->model('repomodel');
        $this->load->library('sessionclass');  
    }
 
    function index()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Usuarios';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/auditoria');
            $this->load->view('TemplateFEX/footersession', $data);  


            }else{
                /*Terminamos la session*/

                $this->sessionclass->logout();
            }
    }

    function exportaTablaPDF(){


        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Superusuario';

            $iduser  = $this->sessionclass->getidusuario();

            $idempresa = $this->sessionclass->getidempresa();   

            $data["numeropersonasfisicas"] = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa);
            $data["numeropersonamoral"] = $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa);
            $data["totalclientes"] = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa) +
                $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa); 
            $data["numeroalertasmorales"]=$this->repomodel->getalertasempresapersonasmorales($idempresa);
            $data["numeroalertasfisicas"]=$this->repomodel->getalertasempresapersonasfisicas($idempresa);
            $data["TotalAlertas"] = $this->repomodel->getalertasempresapersonasmorales($idempresa)+ $this->repomodel->getalertasempresapersonasfisicas($idempresa);
            $data["ExpedientesPersonasMorales"] =  $this->repomodel->getNumExpedientesMorales($idempresa);
            $data["ExpedientesPersonasFisicas"] =   $this->repomodel->getNumExpedientesFisicas($idempresa);
            $data["TotalExpedientes"]=   $this->repomodel->getNumExpedientesFisicas($idempresa) + $this->repomodel->getNumExpedientesMorales($idempresa);

            $this->load->view('TemplateFEX/header', $data);
            $this->load->view('reporte/exportaOperativoPDF/tabla',$data);
            $this->load->view('TemplateFEX/footer', $data);


        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }
    }


    function exportaUsuariosPDF(){


        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Usuarios';

            $iduser  = $this->sessionclass->getidusuario();
        
            $integrantes  = $this->cuentageneralmodel->getintegrantesinforme($iduser);
        
            $data["listado"] = $integrantes;
 
            $this->load->view('TemplateFEX/header', $data);
            $this->load->view('reporte/exportaUsuariosPDF/documento',$data);
            $this->load->view('TemplateFEX/footer', $data);


        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }
    }

    function creditosempresa()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/          

            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Creditos de la empresa';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/creditoEmpresa');
            $this->load->view('TemplateFEX/footersession', $data);  
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }  
    }
 

    function exportaEvaluacioncliente()
    {

        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Superusuario';

            $iduser  = $this->sessionclass->getidusuario();
            $idempresa = $this->sessionclass->getidempresa();

            $idcustomer = $this->input->get("customer");   
            $idempresa = $this->sessionclass->getidempresa();   
            $data["informe"] = $this->repomodel->getdata($idcustomer, $idempresa);
     
            $this->load->view('reporte/exportaevaluacionfisico/evalua' , $data);
       

        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }


    }


  function exportaEvaluacionclientemoral(){

           if ( $this->sessionclass->is_logged_in() == 1) {    
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Superusuario';

            $iduser  = $this->sessionclass->getidusuario();
            $idempresa = $this->sessionclass->getidempresa();

            $idcustomer = $this->input->get("customermoral");   
            $idempresa = $this->sessionclass->getidempresa();   
            $data["informe"] = $this->repomodel->getdatamoral($idcustomer, $idempresa);
     
            $this->load->view('reporte/exportaevaluacionclientemoral/evalua' , $data);
                                      
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }

    }





    function alertas()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/          

            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Alertas';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/alertas');
            $this->load->view('TemplateFEX/footersession', $data);  
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }  
    }
}
