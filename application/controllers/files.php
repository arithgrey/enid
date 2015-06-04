<?php

class Files extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
                $this->folder = 'uploads/';

               

        }
  
        public function index()
        {
            $this->load->view('upload_form', array('error' => ' ' ));
        }

//************ CARGA DE ARCHIVOS  ****************  
    public function do_upload(){    


            $config['upload_path'] = $this->folder;
            $config['allowed_types'] = 'zip|rar|pdf|docx|txt';
            $config['remove_spaces']=TRUE;
            $config['max_size']    = '6048';

            $this->load->library('upload', $config);
            $this->load->library('sessionclass');   

            if ( $this->sessionclass->is_logged_in() == 1) {            
    
                    $menu = $this->sessionclass->generadinamymenu();            
                    $data["menu"] = $menu;
                    $nombre = $this->sessionclass->getnombre();        
                    $data["nombre"]= $nombre;
                    $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                            

                    $data['titulo']='Cuestionario'; 

                    

                    if ( ! $this->upload->do_upload())
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data["error"] = $error;
                            $this->load->view('TemplateFEX/headersesion', $data);   
                            $this->load->view('upload_form',$data);
                            $this->load->view("TemplateFEX/footer" , $data);
                            


                        }
                        else
                        {
                           
                            $this->load->view('TemplateFEX/headersesion', $data);
                            $this->load->view('upload_success', $data);
                            $this->load->view("TemplateFEX/footer" , $data);
                         
                        }

                }else{
                /*Terminamos la session*/
                $this->sessionclass->logout();
            }       

       }










    public function info(){
      

         $this->load->library('sessionclass');   
           $menu = $this->sessionclass->generadinamymenu();            
                    $data["menu"] = $menu;
                    $nombre = $this->sessionclass->getnombre();        
                    $data["nombre"]= $nombre;
                    $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                            

                    $data['titulo']='Cuestionario'; 


         if ( $this->sessionclass->is_logged_in() == 1) {            
    

                    $files = get_filenames($this->folder, FALSE);
                  
                    if($files){
                        $data['files']=$files;
                           
                        }else{
                            $data['files']=NULL;
                        }
                        $this->load->view('TemplateFEX/headersesion', $data); 
                        $this->load->view('filenames',$data);  
                        $this->load->view("TemplateFEX/footer" , $data);

                }else{
                /*Terminamos la session*/
                $this->sessionclass->logout();
            }          

    }
//************ DESCARGA DE ARCHIVOS ***********************

    public function downloads($name){
            
           $data = file_get_contents($this->folder.$name);
           force_download($name,$data);
        
    }
}