<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class cuentageneralmodel extends CI_Model {
    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */
function getintegrantesbyidusuario($iduser){
    $idempresa =  $this->getidempresabyidusuario($iduser);
    $queryuserbycuenta ="SELECT count(*) AS usuariosregistrados  FROM usuario WHERE  idempresa = $idempresa "; 
    $result = $this->db->query( $queryuserbycuenta);
    $registrados = 1; 
    /*Inicia el ciclo para ver el numero de usuarios registrados*/
     foreach ($result ->result_array() as $row) {
   
          $registrados  =  $row["usuariosregistrados"];
    }/*Termina el ciclo*/
    return $registrados;
}/*Termina la función */
/**/
function getintegrantesinforme($iduser){
    $idempresa =  $this->getidempresabyidusuario($iduser);
    $querygetinfointegrantes ="SELECT u.idusuario , u.nombre , u.email ,u.fecha_registro , p.nombreperfil 
    FROM usuario as u , perfil as p , usuario_perfil as up WHERE  u.idusuario = up.idusuario AND
       p.idperfil = up.idperfil AND u.idempresa = $idempresa ";
    $resultquery = $this->db->query($querygetinfointegrantes);
    return  $resultquery->result_array();
}
/*regresa el id de la empresa a la cual pertenece un usuario */
function getidempresabyidusuario($iduser){
  $querygetidempresa   ="SELECT idempresa FROM usuario WHERE idusuario = $iduser "; 
  $result = $this->db->query($querygetidempresa); 
  $idempresa = 0;
  foreach ($result ->result_array() as $row) {
   
     $idempresa =  $row["idempresa"];
  }
  return $idempresa;
}
/*Termina la función*/
function getperfilesdelacuenta($idempresa){
    
  
  $idplan = $this->getidplanbyidempresa($idempresa);
  $querygetplanperfiles = "SELECT perfil.nombreperfil , perfil.idperfil  FROM  perfil, plan_perfil  WHERE 
  plan_perfil.idperfil =perfil.idperfil AND plan_perfil.idplan = '".  $idplan."' ";  
  $result = $this->db->query($querygetplanperfiles);  
  return $result ->result_array();
}
function getidplanbyidempresa($idempresa){
  $querygetplan = "SELECT idplan FROM empresa WHERE  idempresa ='". $idempresa . "' ";
  $result = $this->db->query($querygetplan);   
  $idplan = 0; 
   foreach ($result ->result_array() as $row) {
   
     $idplan =  $row["idplan"];
  }
  return $idplan;
}
/************************************************************************************/
function getnumeroclientesnotrepeat($idempresa) {
  $countquery =  "select * from clienteorg where idempresa='".$idempresa."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
function getnumeroclientesenvalidacion($idempresa){
  $countquery =  "select * from historial_crediticio where status='En validación' and idempresa='".$idempresa."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
function getnumeroclientesquehesolicitado($idempresa, $iduser){
  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='En validación' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
function getnumeroclientesquemeanaprobado($idempresa, $iduser){
  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='aprobado' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
function getnumeroclientesrechazados($idempresa, $iduser){
  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='rechazados' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
function getNumeroOmisionesGraves($idempresa) {
  $countquery =  "select count(omisiongrave) from documentosolicitado as ds, archivo as arch 
  where arch.idempresa='".$idempresa."' and ds.omisiongrave = '1' and ds.idarchivo = arch.idarchivo ";
//select count(omisiongrave) from documentosolicitado as ds, archivo as arch where arch.idempresa=20 
//and ds.omisiongrave = '1' and ds.idarchivo = arch.idarchivo 
  $result = $this->db->query($countquery);   
  
  $resultado = 0; 
   foreach ($result ->result_array() as $row) {
   
     $resultado =  $row["count(omisiongrave)"];
  }
  return $resultado;
}
function getNumeroSinOmisiones($idempresa) {
  $countquery =  "select count(omisiongrave) from documentosolicitado as ds, archivo as arch 
  where arch.idempresa='".$idempresa."' and ds.omisiongrave = '0' and ds.idarchivo = arch.idarchivo ";
//select count(omisiongrave) from documentosolicitado as ds, archivo as arch where arch.idempresa=20 
//and ds.omisiongrave = '1' and ds.idarchivo = arch.idarchivo 
  $result = $this->db->query($countquery);   
  
  $resultado = 0; 
   foreach ($result ->result_array() as $row) {
   
     $resultado =  $row["count(omisiongrave)"];
  }
  return $resultado;
}
function getNumeroConOmisiones($idempresa) {
  $countquery =  "SELECT count(omisiongrave) FROM  documentosolicitado as ds, documentacion as doc, clienteorg as co, 
  archivo as arch where doc.idclienteorg = co.idclienteorg and doc.iddocumentosolicitado = ds.iddocumentosolicitado 
  and arch.idarchivo =20 and ds.omisiongrave='1'";
//SELECT count(*) FROM  documentacion as doc, documentosolicitado as ds, clienteorg as co
  //where doc.idclienteorg = co.idclienteorg and doc.iddocumentosolicitado = ds.iddocumentosolicitado
  $result = $this->db->query($countquery);   
  
  $resultado = 0; 
   foreach ($result ->result_array() as $row) {
   
     $resultado =  $row["count(omisiongrave)"];
  }
  return $resultado;
}


/*------------Funciones de Personas Fisica y Moral------------*/

function getNumeroPersonaFisica($idempresa){
  $countquery = "SELECT count(idpersonafisica) FROM personafisica WHERE idempresa = '".$idempresa."' ";
               //SELECT COUNT(idpersonafisica) FROM personafisica WHERE idempresa =20

  $result = $this->db->query($countquery);

  $resultado = 0; 
   foreach ($result ->result_array() as $row) {
   
     $resultado =  $row["count(idpersonafisica)"];
  }
  return $resultado;
}

function getNumeroPersonaMoral($idempresa){
  $countquery = "SELECT count(idpersonamoral) FROM personamoral WHERE idempresa = '".$idempresa."' ";

  $result = $this->db->query($countquery);

  $resultado = 0; 
   foreach ($result ->result_array() as $row) {
   
     $resultado =  $row["count(idpersonamoral)"];
  }
  return $resultado;
}


/*Termina modelo */
}
