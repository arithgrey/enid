<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class evaluacionmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */


    function getdocumentosuser( $idclienteorg ){

      $querydocumentossolicitados = "select * from documentosolicitado as ds , historial_crediticio as
       hc where ds.idarchivo = hc.idcredito and hc.idclienteorg = '".$idclienteorg ."' ";


      $resultado = $this->db->query($querydocumentossolicitados);
      
      $querydocumentacion = "SELECT *  FROM documentacion WHERE idclienteorg = '".$idclienteorg."' ";
      $documentacionentregada = $this->db->query($querydocumentacion);

     
      $qcondocumentacion = "SELECT *  FROM documentacion WHERE idclienteorg = '".$idclienteorg."' AND respuesta =1";
      $condoc = $this->db->query(  $qcondocumentacion );
      /*Preguntas totales*/
      
      $data["condoc"] = $condoc->num_rows();
      $data["total_documentos"] =  $resultado->num_rows();

      $data["entregada"] =  $documentacionentregada->result_array();  
      $data["credito"] =  $resultado ->result_array(); 


      return $data;


    }


/*

  select * from pregunta, documentosolicitado_pregunta where 
documentosolicitado_pregunta.iddocumentosolicitado='2'
and documentosolicitado_pregunta.idpregunta = pregunta.idpregunta;
*/
/*Termina modelo */
}



