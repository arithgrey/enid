<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class recursosmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }


    /*Listamos todos los perfiles del sistema */
    public function listarrecursos(){       

        $query_list ="SELECT * FROM recurso";
        $result = $this->db->query($query_list);  
        return $result->result_array();      

    }/*Termina la función */


    /*Actualizamos el registro en la base de datos */
    function updaterecurso($idrecurso , $descripcion){

        $query_update ="UPDATE recurso SET descripcionrecurso = '".$descripcion."' WHERE idrecurso = '".$idrecurso."'  ";
        $result = $this->db->query($query_update);  
        return $result;  

    }   
    /*Inserta e la base de datos un nuevo recurso */

    function insertrecurso($nombre , $descripcionrecurso  ){

        if ( strlen($nombre) > 0  ) {
            
                /*Verifica qsi existe o no el recursos en la base de datos*/    
                if ( $this->existrecursobyname($nombre) > 0 ){
                    /*Informe de existencia */
                    return "El recurso existe actualmente, intente con otro nombre";
                }else{

                    /*Insertamos en la base de datos*/
                    $query_insert ="INSERT INTO  recurso (nombre ,  descripcionrecurso ) values ('".$nombre."' ,  '".$descripcionrecurso."'  )";
                    $result = $this->db->query($query_insert);
                    return $result;            
                }
        
        }else{
            return "Complete los campos";
        }       

    }

    function existrecursobyname($nombre){

        $query_existrecurso ="SELECT * FROM recurso WHERE nombre = '". $nombre . "' ";
        $result = $this->db->query($query_existrecurso);  
        /*Bandera */

        $b=0;
        foreach ($result ->result_array() as $row){

            $b++;


        }   
        return $b;      
    }/*Termina función */

/*****************************************Eliminar recursos*********************************************************/    
    function removerecursobyid($idrecurso){

        $query_delete ="DELETE  FROM perfil_recurso WHERE idrecurso = '". $idrecurso . "' ";         
        $result = $this->db->query($query_delete);  


        $query_delete_permiso ="DELETE  FROM permiso WHERE idrecurso = '". $idrecurso . "' ";         
        $r2 = $this->db->query($query_delete_permiso);  

        


        
        if ($result == true) {
            
            $query_delete_recurso ="DELETE  FROM recurso WHERE idrecurso = '". $idrecurso . "' ";    
            $result_recurso = $this->db->query($query_delete_recurso);  
            return $result_recurso;

        }else{
            return "Algo falló al eliminar el elemento";
        }    

        
    }/*Eliminar el recurso en la base de datos */




/**********************************        ****************************************/




/***********************************CONFIHG*****************************************+*/
function listarrecursosperfilesconfig(){

        $query_list ="SELECT * FROM recurso";
        $result = $this->db->query($query_list);  

        
        $dataconfig;
        $b=0;




        /*Listamos recursos*/
        foreach ($result ->result_array() as $row){

            
            
                
            $dataconfig["recursos"][$b] = array(
                        
                        'idrecurso' => $row["idrecurso"],
                        'nombre' => $row["nombre"],
                        'urlpaginaweb' => $row["urlpaginaweb"],
                        'descripcionrecurso' => $row["descripcionrecurso"],                            
                        'iconorecurso'=> $row["iconorecurso"]
                                              
            
                     );                                    
                
                   $b++;

        }/*Termina Listamos recursos*/

        
        /*Listamos perfiles */
        $query_lista_perfiles = "SELECT * FROM perfil";
        $result_perfil  = $this->db->query($query_lista_perfiles);  
        $xx = 0;    
        foreach ($result_perfil->result_array() as $row){   

            $dataconfig["perfiles"][$xx] = array(
            
                'idperfil' => $row["idperfil"] ,
                'nombreperfil' => $row["nombreperfil"],
                'descripcion' => $row["descripcion"]   
            );

            $xx++;
        }
        /*Termina Listamos perfiles */


        /*Listamos perfiles recursos */
        $query_lista_perfil_recurso = "SELECT * FROM perfil_recurso";
        $result_perfil_r  = $this->db->query($query_lista_perfil_recurso);  
        $yy= 0;    
        

        foreach ($result_perfil_r->result_array() as $row){   

            $dataconfig["perfiles_recursos"][$yy] = array(
            
                'idperfil' => $row["idperfil"] ,
                'idrecurso' => $row["idrecurso"]
                
            );

            $yy++;
        }


        return $dataconfig;      
}



/***************************Recurso by id********************************************************/

    
    function getrecursobyid($idrecurso){
        
        $query = "SELECT * FROM recurso WHERE idrecurso = $idrecurso ";
        $result = $this->db->query($query);  
        return $result->result_array();

    }



/*****/
}




