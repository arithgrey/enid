<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class  repomodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}



 function getalertasempresapersonasfisicas($idempresa)
{

	$querygetomisiones ="select pregunta.pregunta , personafisica.idempresa  from pregunta  , clienteorg_respuesta , personafisica  where clienteorg_respuesta.idpregunta = pregunta.idpregunta    and pregunta.statuspregunta =1 and clienteorg_respuesta.idpersonafisica =  personafisica.idpersonafisica and personafisica.idempresa = '". $idempresa ."' ";
	$result = $this->db->query($querygetomisiones);
	return $result ->num_rows();
}


function getalertasempresapersonasmorales($idempresa)
{


	$querygetomisiones ="select pregunta.pregunta , personamoral.idempresa  from pregunta  , clienteorgmoral_respuesta , personamoral  where clienteorgmoral_respuesta.idpregunta = pregunta.idpregunta  and pregunta.statuspregunta =1 and clienteorgmoral_respuesta.idpersonamoral =  personamoral.idpersonamoral  and personamoral.idempresa='".$idempresa."' ";
	$result = $this->db->query($querygetomisiones);
	return $result ->num_rows();

}

 function getNumExpedientesMorales($idempresa)
{

	$getExpedientesmorales ="select * from historial_crediticio_moral where idempresa ='".$idempresa."'";
	$result = $this->db->query($getExpedientesmorales);
	return $result ->num_rows();
}

 function getNumExpedientesFisicas($idempresa)
{

	$getExpedientesFisicos ="select * from historial_crediticio where idempresa ='".$idempresa."'";
	$result = $this->db->query($getExpedientesFisicos);
	return $result ->num_rows();
}


function getNumeroPersonasFisicasByIdEmpresa($idempresa)
{

	$getPersonaFisica ="select * from personafisica where idempresa ='".$idempresa."'";
	$result = $this->db->query($getPersonaFisica);
	return $result ->num_rows();
	
}


function getNumeroPersonamoralByIdEmpresa($idempresa)
{

	$getPersonaFisica ="select * from personamoral where idempresa ='".$idempresa."'";
	$result = $this->db->query($getPersonaFisica);
	return $result ->num_rows();
	
}


function getUsuariosCuenta($idempresa)
{
	$getuserscuenta =" select * from usuario where idempresa = '".$idempresa."' ";
	$result = $this->db->query($getuserscuenta);
	return $result ->num_rows();
	
}


 function getdata($numerocredito, $idempresa){
	
  	 $select= "select p.idpersonafisica,  p.primernombre, p.segundonombre ,  p.primerapellido , 
      p.segundoapellido,  p.RFC, p.fecha_registro AS f, p.Comentarios, a.idarchivo, a.nombre , h.idhistorial, 
       h.calificacion , h.monto , h.numerocredito , h.fecha_registro, h.fecha, h.Completoporcentaje,
       h.ejecutivo, h.nota , h.omisionesgraves  from personafisica as p , archivo as a ,
        historial_crediticio as h 
      WHERE h.idcredito = a.idarchivo and h.idpersonafisica =p.idpersonafisica and
       h.idempresa = '".$idempresa."' and h.idhistorial='". $numerocredito ."'   ";
      $result = $this->db->query($select);
      return $result ->result_array();
      
	
}


function getdatamoral($numerocredito, $idempresa){
	
  	$select= "select pm.idpersonamoral,  pm.nombreempresa,  pm.RFC, pm.Ejecutivoacargo, pm.Comentarios, 
      pm.fecha_registro AS f, hm.Fecha, a.nombre ,   a.idarchivo , 
      hm.calificacion , hm.monto , hm.numerocredito , hm.fecha_registro, 
      hm.fecha, hm.Completoporcentaje,  hm.ejecutivo , hm.omisionesgraves , hm.idhistorial_crediticio_moral from personamoral as pm , archivo as a , historial_crediticio_moral as hm 
      WHERE hm.idcredito = a.idarchivo and hm.idpersonamoral =pm.idpersonamoral and
       hm.idempresa = '".$idempresa."' and hm.idhistorial_crediticio_moral='".$numerocredito."' ";
      $result = $this->db->query($select);
      return $result ->result_array();
       
}


}/*Termina la función */







