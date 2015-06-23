<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class empresamodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}


function existcompanybyname( $nombreempresa ){


    $query_exist = "SELECT * FROM empresa WHERE nombreempresa = '".$nombreempresa."' "; 
    
    $result = $this->db->query($query_exist);       
            
    $flag = 0; 

     foreach ($result->result_array() as  $row) {
              
          $flag++;

      }
     
    return $flag;


}/*Termina la función */




function recordempresawhitname( $nombreempresa ){


    $query_insert = "INSERT INTO empresa (nombreempresa) VALUES ('".$nombreempresa."' )";
    $tryrecord = $this->db->query($query_insert); 
    

    /*Si se registro*/
    if ( $tryrecord   ==  true ) {
  
    $query_lastelemento  = "SELECT MAX(idempresa) AS idempresa FROM empresa";
    $resultlastelemento  = $this->db->query($query_lastelemento); 


        $ultimo = 0;

        /*Ultimo elemento ingresado */
        foreach ($resultlastelemento ->result_array() as $row) {
         
           $ultimo = $row["idempresa"];
        }
        
        return $ultimo;


    }else{
      return "Fallo algo al registrar empresa";
    }


    
}/*Termina la función */


/*Lista los créditos que éstan asociados */
function getcreditosdisponiblesbyidempresa($idempresa){



  $queryselect ="SELECT * FROM archivo WHERE  idempresa ='". $idempresa. "'";
  $result  = $this->db->query($queryselect ); 
    
  return $result->result_array();

}/**/


function getinfodocumentbyid($documento){

  $selectinfo = "SELECT * FROM documentosolicitado WHERE iddocumentosolicitado = '".$documento."' "; 
  $result  = $this->db->query($selectinfo ); 
    
  return $result->result_array();
}




function getinfodocumentbyidstatuscliente($documento,  $clienteorg) {

  $selectinfo = "SELECT * FROM documentacion WHERE iddocumentosolicitado = '".$documento."' and idclienteorg='".$clienteorg."'  "; 
  $result  = $this->db->query($selectinfo ); 
    
 return $result->result_array();

}

function updateinfodocumentbyidstatuscliente($documento,  $clienteorg) {

    $actual =  $this->getinfodocumentbyidstatuscliente($documento,  $clienteorg);
    

          $valorrespuesta  =0; 
           $bandera =0; 
          foreach ($actual as  $row) {
              $valorrespuesta  = $row["respuesta"];
              
              $bandera++;
          }

          if ($bandera>0) {
                
                if ($valorrespuesta == 1) {
                        
                        $queryupdate = "UPDATE documentacion SET respuesta = '0' WHERE idclienteorg  = '".  $clienteorg ."' AND  iddocumentosolicitado ='".$documento."'  ";
                        return $this->db->query($queryupdate ); 
                    
                    }else{

                        $queryupdate = "UPDATE documentacion SET respuesta = '1' WHERE idclienteorg  = '".  $clienteorg ."' AND  iddocumentosolicitado ='".$documento."'  ";
                        return $this->db->query($queryupdate );
                    }
                  



          }else{

              $querinsert = "INSERT INTO documentacion ( idclienteorg   , iddocumentosolicitado , respuesta )
              VALUES  ( '".  $clienteorg ."' ,  '".$documento."' , '1' )";
              return $this->db->query($querinsert ); 

          }
          
    
    
}


/*Termina modelo */
}



