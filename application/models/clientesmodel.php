<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once("cuentageneralmodel.php"); 
 class clientesmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }



    function clientesbyempresa($idempresa){

      $select= "select p.idpersonafisica,  p.primernombre, p.segundonombre ,  p.primerapellido , 
      p.segundoapellido,  p.RFC, p.fecha_registro AS f, p.Comentarios, a.idarchivo, a.nombre , h.idhistorial, 
       h.calificacion , h.monto , h.numerocredito , h.fecha_registro, h.fecha, h.Completoporcentaje,
       h.ejecutivo, h.nota , h.omisionesgraves  from personafisica as p , archivo as a , historial_crediticio as h 
      WHERE h.idcredito = a.idarchivo and h.idpersonafisica =p.idpersonafisica and h.idempresa = '".$idempresa."' ";
      $result = $this->db->query($select);
      return $result ->result_array();
            
    }/*Termina la función*/     




    function clientesmoralesbyempresa($idempresa){
      $select= "select pm.idpersonamoral,  pm.nombreempresa,  pm.RFC, pm.Ejecutivoacargo, pm.Comentarios, 
      pm.fecha_registro AS f, hm.Fecha, a.nombre ,   a.idarchivo , 
      hm.calificacion , hm.monto , hm.numerocredito , hm.fecha_registro, 
      hm.fecha, hm.Completoporcentaje,  hm.ejecutivo , hm.omisionesgraves , hm.idhistorial_crediticio_moral from personamoral as pm , archivo as a , historial_crediticio_moral as hm 
      WHERE hm.idcredito = a.idarchivo and hm.idpersonamoral =pm.idpersonamoral and hm.idempresa = '".$idempresa."' ";
      $result = $this->db->query($select);
      return $result ->result_array();
            
    }/*Termina la función*/  



function insertclienteorgmoral($empresa,  $idempresa, 
                $idusuario , $creditook,  $montocredito, $RFC ,
                 $textodescripcion ,  $fecha ,  $numerocredito ,  $ejecutivo ,  $nota ){

                  $queryinsert ="INSERT INTO personamoral(nombreempresa , RFC , Ejecutivoacargo , Comentarios, idempresa , 
                    idusuario) VALUES ('".$empresa."' , '".$RFC."' , '".$ejecutivo."', '". $nota ."' , '".$idempresa."' ,
                    '".$idusuario."'  ) ";
  
  $dbresponse = $this->db->query( $queryinsert );  


  if ($dbresponse ==  true) {
    
    $querylast ="SELECT * FROM personamoral WHERE idusuario = '".$idusuario."' ORDER BY fecha_registro DESC limit 1";
    
   
    $result =  $this->db->query($querylast);
    $idpersonamoral = 0;
    $que3 ="";
      


            foreach ($result->result_array() as $row) {
             
              $idpersonamoral = $row["idpersonamoral"];
            }  
 


     $miquery = "INSERT INTO historial_crediticio_moral ( idcredito , monto ,  idempresa , fecha , numerocredito , ejecutivo,  idpersonamoral) 
     VALUES ( '".$creditook."' , '".$montocredito."' ,  '". $idempresa."' , '". $fecha."' , '".$numerocredito."' ,  '".$ejecutivo ."' , '".  $idpersonamoral ."')";
   
    $r= $this->db->query($miquery);
    return  $idpersonamoral;
    
      
  }else{
             return 0;
  }
  
 
}


/******************************************************************************************/
    
    function listarinfocreditosbyuser($idclienteorg){
      
      $query_select ="SELECT a.idarchivo , a.nombre , a.descripcion , 
      h.monto , h.idhistorial FROM  archivo AS a , historial_crediticio as h WHERE 
       a.idarchivo = h.idcredito AND h.idclienteorg ='".$idclienteorg."'";
      $result = $this->db->query($query_select);


      //$data["persona"] =  $result->result_array();
      //listarelnumerodecreditosdelapersona($idclienteorg)
     
    
      return  $result ->result_array() ;
    }

/**/

    function listarelnumerodecreditosdelapersona($idclienteorg){

      $query_select ="SELECT * FROM  historial_crediticio WHERE idclienteorg ='".$idclienteorg."'";
      $result = $this->db->query($query_select);
      return $result ->num_rows();
      
    }
/*****************************************************************************************/
  

  /*FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF*/
  function displayinfoclientebyid($idclienteorg){
  
    $queryselectcliente  ="select c.idclienteorg, c.primernombre , c.segundonombre , c.primerapellido , 
    c.segundoapellido,  c.fecha_registro , c.nombrecompleto , c.nota , c.RFC , c.status, usuario.nombre as personaqueregistropemera , 
    usuario.idusuario  from clienteorg as c , usuario where  c.idusuario=usuario.idusuario AND
     c.idclienteorg='".$idclienteorg."' ";
    $result =  $this->db->query($queryselectcliente);
    return $result->result_array();
  }



/****************************************************************************************************/

  function surveydocumentclienteorg( $documento ,  $clienteorg ){

      $dynamicquery = "select * from pregunta, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$documento."'
        and documentosolicitado_pregunta.idpregunta = pregunta.idpregunta";
      $result = $this->db->query($dynamicquery);
      $data["preguntas"] =  $result->result_array();


      $dynamicqueryrespuesta = "SELECT * FROM  clienteorg_respuesta WHERE idpersonafisica ='".$clienteorg."' ";
      $resultclientresponde = $this->db->query($dynamicqueryrespuesta);

      $data["respuestas"] = $resultclientresponde->result_array();

      return $data;
  }




 function surveydocumentclienteorgmoral( $documento ,  $clienteorg ){

      $dynamicquery = "select * from pregunta, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$documento."'
        and documentosolicitado_pregunta.idpregunta = pregunta.idpregunta";
      $result = $this->db->query($dynamicquery);
      $data["preguntas"] =  $result->result_array();


//
      $dynamicqueryrespuesta = "SELECT * FROM  clienteorgmoral_respuesta WHERE
       idpersonamoral ='".$clienteorg."' ";
      $resultclientresponde = $this->db->query($dynamicqueryrespuesta);

      $data["respuestas"] = $resultclientresponde->result_array();

      return $data;
  }








function isomision($pregunta)
{
        
        $bandera=0;
       $isomision = "SELECT statuspregunta FROM pregunta WHERE idpregunta = '".$pregunta."' ";
              $omisionresult  =  $this->db->query($isomision);
              $bandera = 0;
              
              foreach ( $omisionresult ->result_array() as  $row) {
                
                 $bandera =  $row["statuspregunta"];
              }

              return $bandera;
 }
/****************************************************************************************************/


  function updaterespuesta($pregunta , $idcostomer , $respuesta, $historial, $documento_s){


      $queryexist  = "SELECT * FROM clienteorg_respuesta WHERE idpersonafisica ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";
      $result = $this->db->query($queryexist);
      $existe=  $result ->num_rows();  
      $bandera = $this->isomision($pregunta);

      if ($existe >0  ) {

          if ($respuesta ==  "yes") {
            

            $queryupdate = "UPDATE clienteorg_respuesta  SET respuesta = '".$respuesta."' , omision ='0'  WHERE
            idpersonafisica ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";

            if ($bandera == 1 ) {

                      $updatesolicitud = "UPDATE historial_crediticio SET omisionesgraves = omisionesgraves - '1'  WHERE idhistorial='".$historial."'" ;   
                      $this->db->query( $updatesolicitud);
                       
            }




          }else{


                if ($bandera == 0 ) {
                      
                       $queryupdate = "UPDATE clienteorg_respuesta  SET respuesta = '".$respuesta."' , omision ='0'  WHERE
                        idpersonafisica ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";


                }else{
                       $queryupdate = "UPDATE clienteorg_respuesta  SET respuesta = '".$respuesta."' , omision ='1'  WHERE
                        idpersonafisica ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";

                      $updatesolicitud = "UPDATE historial_crediticio SET omisionesgraves = omisionesgraves + '1'  WHERE idhistorial='".$historial."'" ;   
                      $this->db->query( $updatesolicitud);
                       



                }

          }
          

          $resultupdate = $this->db->query($queryupdate);
          //return $resultupdate;
      }else{


            if ($respuesta == "yes") {

                    $queryinsert = "INSERT INTO clienteorg_respuesta  (idpersonafisica , idpregunta, respuesta , omision )  
                    VALUES('".$idcostomer."' , '".$pregunta."' , '".$respuesta."' , '0')";
                    $resultinsert = $this->db->query($queryinsert);
            }else{

                   $queryinsert = "INSERT INTO clienteorg_respuesta  (idpersonafisica , idpregunta, respuesta , omision )  
                    VALUES('".$idcostomer."' , '".$pregunta."' , '".$respuesta."' , '1')";
                    $resultinsert = $this->db->query($queryinsert);


                    $updatesolicitud = "UPDATE historial_crediticio SET omisionesgraves = omisionesgraves + '1'  WHERE idhistorial='".$historial."'" ;   
                    $this->db->query( $updatesolicitud);
            }


        

                
              


          //return  $resultinsert;

      }



      $preguntascontestadas = "select * from clienteorg_respuesta where idpersonafisica='".$idcostomer."' ";
      $contestadas = $this->db->query($preguntascontestadas);
      $preguntascontestadas = $contestadas->num_rows();

      $general =56;
      $porcentajecontestadas  = floatval($general / $preguntascontestadas);

      $historial_crediticioupdate = "UPDATE historial_crediticio SET Completoporcentaje = '".$porcentajecontestadas."' WHERE idhistorial='".$historial."'"; 
      $resultupdateporcentaje = $this->db->query($historial_crediticioupdate);
      return  $resultupdateporcentaje;

      //return $preguntascontestadas;
      /*Aquí va el porcentaje */


  }






function updaterespuestamoral($pregunta , $idcostomer , $respuesta, $historial, $documento_s){



      $queryexist  = "SELECT * FROM clienteorgmoral_respuesta WHERE idpersonamoral ='".$idcostomer."' 
      AND idpregunta ='".$pregunta."' ";
      $result = $this->db->query($queryexist);
      $existe=  $result ->num_rows();  
      $bandera = $this->isomision($pregunta);

      if ($existe >0  ) {

          if ($respuesta ==  "yes") {
            

            $queryupdate = "UPDATE clienteorgmoral_respuesta  SET respuesta = '".$respuesta."' , omision ='0'  WHERE
            idpersonamoral ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";

            if ($bandera == 1 ) {

                      $updatesolicitud = "UPDATE historial_crediticio_moral SET omisionesgraves = omisionesgraves - '1'  WHERE idhistorial_crediticio_moral='".$historial."'" ;   
                      $this->db->query( $updatesolicitud);
                       
            }




          }else{


                if ($bandera == 0 ) {
                      
                       $queryupdate = "UPDATE clienteorgmoral_respuesta 
                        SET respuesta = '".$respuesta."' , omision ='0'  WHERE
                        idpersonamoral ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";


                }else{
                       $queryupdate = "UPDATE clienteorgmoral_respuesta  SET respuesta = '".$respuesta."' , omision ='1'  WHERE
                        idpersonamoral ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";

                      $updatesolicitud = "UPDATE historial_crediticio_moral SET 
                      omisionesgraves = omisionesgraves + '1'  WHERE idhistorial_crediticio_moral='".$historial."'" ;   
                      $this->db->query( $updatesolicitud);
                       



                }

          }
          

          $resultupdate = $this->db->query($queryupdate);
          //return $resultupdate;
      }else{


            if ($respuesta == "yes") {

                    $queryinsert = "INSERT INTO clienteorgmoral_respuesta  (idpersonamoral , idpregunta ,
                     respuesta , omision )  
                    VALUES('".$idcostomer."' , '".$pregunta."' , '".$respuesta."' , '0')";
                    $resultinsert = $this->db->query($queryinsert);
            }else{

                   $queryinsert = "INSERT INTO clienteorgmoral_respuesta  (idpersonamoral , idpregunta, respuesta , omision )  
                    VALUES('".$idcostomer."' , '".$pregunta."' , '".$respuesta."' , '1')";
                    $resultinsert = $this->db->query($queryinsert);


                    $updatesolicitud = "UPDATE historial_crediticio_moral SET omisionesgraves = omisionesgraves + '1'  WHERE idhistorial_crediticio_moral='".$historial."'" ;   
                    $this->db->query( $updatesolicitud);
            }


        

       }

       $preguntascontestadas = "select * from clienteorgmoral_respuesta where idpersonamoral='".$idcostomer."' ";
      $contestadas = $this->db->query($preguntascontestadas);
      $preguntascontestadas = $contestadas->num_rows();

      $general =56;
      $porcentajecontestadas  = floatval($general / $preguntascontestadas);

      $historial_crediticioupdate = "UPDATE historial_crediticio_moral SET Completoporcentaje = '".$porcentajecontestadas."' WHERE idhistorial_crediticio_moral='".$historial."'"; 
      $resultupdateporcentaje = $this->db->query($historial_crediticioupdate);

      return  $resultupdateporcentaje;

             

}

/*

  function updaterespuestamoral($pregunta , $idcostomer , $respuesta, $historial, $documento_s){


      $queryexist  = "SELECT * FROM clienteorgmoral_respuesta WHERE 
      idpersonamoral ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";
      $result = $this->db->query($queryexist);
      $existe=  $result ->num_rows();  


      if ($existe >0  ) {
          $queryupdate = "UPDATE clienteorgmoral_respuesta  SET 
          respuesta = '".$respuesta."' WHERE idpersonamoral ='".$idcostomer."' 
          AND idpregunta ='".$pregunta."' ";
          $resultupdate = $this->db->query($queryupdate);
          
      }else{
          $queryinsert = "INSERT INTO clienteorgmoral_respuesta  
          (idpregunta , idpersonamoral , respuesta )  
          VALUES('".$pregunta."' ,  '".$idcostomer."' ,   '".$respuesta."')";
          $resultinsert = $this->db->query($queryinsert);
          
      }


      $preguntascontestadas = "select * from clienteorgmoral_respuesta where idpersonamoral='".$idcostomer."' ";
      $contestadas = $this->db->query($preguntascontestadas);
      $preguntascontestadas = $contestadas->num_rows();

      $general =56;
      $porcentajecontestadas  = floatval($general / $preguntascontestadas);

      $historial_crediticioupdate = "UPDATE historial_crediticio_moral SET Completoporcentaje = '".$porcentajecontestadas."' WHERE idhistorial_crediticio_moral='".$historial."'"; 
      $resultupdateporcentaje = $this->db->query($historial_crediticioupdate);

      return  $resultupdateporcentaje;

    

  }

*/




  function getClienteByidUserrepo($idusuario){

      $queryselectrepo ="SELECT * FROM clienteorg WHERE idusuario='".$idusuario."'";
      $result = $this->db->query($queryselectrepo);
     
      return $result ->result_array();

  }


  function actualizaApellidoPaterno($nuevoApellidoPaterno,$clienteorg)
{
    $queryUpdate = "UPDATE clienteorg SET primerapellido = '".$nuevoApellidoPaterno."' WHERE idclienteorg = '".$clienteorg."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

function actualizaApellidoMaterno($nuevoApellidoMaterno,$clienteorg)
{
    $queryUpdate = "UPDATE clienteorg SET segundoapellido = '".$nuevoApellidoMaterno."' WHERE idclienteorg = '".$clienteorg."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

function actualizaN1($nuevoNombre1,$clienteorg)
{
    $queryUpdate = "UPDATE clienteorg SET primernombre = '".$nuevoNombre1."' WHERE idclienteorg = '".$clienteorg."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}

function actualizaN2($nuevoNombre2,$clienteorg)
{
    $queryUpdate = "UPDATE clienteorg SET segundonombre = '".$nuevoNombre2."' WHERE idclienteorg = '".$clienteorg."' ";  
    $dbresponse = $this->db->query( $queryUpdate );     
    return $dbresponse;
}


function insertclienteorgfisico($apellidopaterno,  $apellidomaterno , $nombre1,  
                          $nombres2 ,  $idempresa, $idusuario , $creditook, 
                          $monto, $RFC , $textodescripcion , $fecha ,  $numerocredito ,  $ejecutivo,  $nota ){


  $queryinsert ="INSERT INTO personafisica(primernombre , segundonombre , primerapellido  , segundoapellido  , 
    RFC , Ejecutivoacargo , Comentarios, idempresa , idusuario) VALUES ('".$nombre1."' , '".$nombres2."' ,
    '".$apellidopaterno."' , '".$apellidomaterno."' , '".$RFC."' , '".$ejecutivo."', '". $nota ."' , '".$idempresa."' ,
    '".$idusuario."'  ) ";


  
  $dbresponse = $this->db->query( $queryinsert );  

  if ($dbresponse ==  true) {
    
    $querylast ="SELECT * FROM personafisica WHERE idusuario = '".$idusuario."' ORDER BY fecha_registro DESC limit 1";
    $result =  $this->db->query($querylast);

    $idpersonafisica = 0;
      
            foreach ($result->result_array() as $row) {
              $idpersonafisica = $row["idpersonafisica"];

            }  


 
    $que3 ="INSERT INTO historial_crediticio (idcredito , monto ,  idempresa , fecha ,  numerocredito , ejecutivo  , idpersonafisica , nota)
    VALUES ( '". $creditook."' ,   '". $monto."' , '". $idempresa."' , '".$fecha."' , '".$numerocredito."' , '".$ejecutivo."' , '".$idpersonafisica."' ,  '".$nota."' )";

    $this->db->query($que3);  
    return $idpersonafisica;


  }else{

             return 0;
  }

  
 
}


function documenta($iddocumento  , $idclienteorg, $respuesta ){


  $queryselect ="SELECT * FROM documentacion WHERE idclienteorg = '".$idclienteorg."' AND iddocumentosolicitado ='".$iddocumento."' ";
  $elementos = $this->db->query($queryselect);
  if ($elementos ->num_rows() == 0 ) {
    
    $INSERTquery = "INSERT INTO  documentacion (idclienteorg , iddocumentosolicitado , respuesta ) VALUES ('".$idclienteorg."' , '".$iddocumento."' , '".$respuesta."')";  
    return $this->db->query($INSERTquery);
  }else{

    $update ="UPDATE documentacion SET respuesta ='".$respuesta."' WHERE idclienteorg = '".$idclienteorg."' AND  iddocumentosolicitado ='".$iddocumento."' ";
    return $this->db->query($update);

  }


}



/*Termina modelo */
}

