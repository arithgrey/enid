<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once("cuentageneralmodel.php"); 
 class documentomodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */
             
    function record($nombrearchivo, $descrionarchivo , $idempresa ){

      
      $status = 0; 
      $existe = $this->checkifexist( $nombrearchivo, $idempresa );
      
      
        
      if ($existe ) {
          $status = 2;  

      }else{

        $queryinsert = "INSERT INTO archivo(nombre , descripcion , idempresa  ) VALUES( '".$nombrearchivo."' , '".$descrionarchivo."' , '".$idempresa."' )";  
        $dbresponse = $this->db->query( $queryinsert );     
         if ($dbresponse == true ) {
             $status = 3;
          }
      }
      



      return $status;
    }/*Termina la función*/





    function checkifexistbyidarchivo($idarchivo ){

         $flag =0;
      
        $queryexist ="SELECT * FROM archivo WHERE idarchivo =  '".$idarchivo."' ";
        $result =  $this->db->query( $queryexist );     

       
        foreach ($result->result_array()  as  $row) {
            
            $flag++;
        }
      
        return $flag;

            
    }/*Termina la función*/     




    function checkifexist($nombrearchivo , $idempresa ){

         $flag =0;
      
        $queryexist ="SELECT * FROM archivo WHERE nombre = '".$nombrearchivo."' AND idempresa = '". $idempresa."'";
        $result =  $this->db->query( $queryexist );     

       
        foreach ($result->result_array()  as  $row) {
            
            $flag++;
        }
      
        return $flag;

            
    }/*Termina la función*/     





         
function listarchivobyidempresa($idempresa ){

  $querylist ="SELECT   * FROM archivo WHERE idempresa = '".$idempresa."' ";
  $result =  $this->db->query( $querylist );
  return $result->result_array(); 

}
    


/************************************************************************************************************/
function updatenombrearchivobyid($idarchivo , $newname){

 
  $queryupdate ="UPDATE archivo SET nombre= '".$newname."'  WHERE idarchivo = '".$idarchivo."' ";  
  $result =  $this->db->query( $queryupdate );
  return $result; 

}    




function tryupdatedescripcionbyid($newdescripcion , $idarchivo){

  $queryupdate ="UPDATE archivo SET descripcion= '".$newdescripcion."'  WHERE idarchivo = '".$idarchivo."' ";  
  $result =  $this->db->query( $queryupdate );
  return $result; 

}






function listinfoarchivobyidarchivo( $idarchivo){
  
  $queryselect = "SELECT * FROM archivo WHERE idarchivo =  '".$idarchivo."' ";
  $result =  $this->db->query(  $queryselect);
  return $result->result_array(); 
}




function getcuestionario($midocumento){

  $queryselect = "select * from pregunta , documentosolicitado_pregunta where 
  documentosolicitado_pregunta.idpregunta = pregunta.idpregunta and documentosolicitado_pregunta.iddocumentosolicitado ='".$midocumento."' ";
  $result =  $this->db->query(  $queryselect);
  return $result->result_array();  
}


          //

/*Termina modelo */
}



