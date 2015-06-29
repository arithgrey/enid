<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class perfilmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }


    /**/
    function getperfildata($idusuario){

        $query ="SELECT p.idperfil , p.nombreperfil , p.descripcion FROM perfil AS p , 
        usuario_perfil AS up WHERE  up.idperfil = p.idperfil AND up.idusuario = $idusuario ";
        $result_user = $this->db->query($query);       
        return $result_user ->result_array();      
    }



    /*Obtén los perfiles que tiene el usuario*/
    function getperfiluser($idusuario){

        $query ="SELECT idperfil FROM usuario_perfil  WHERE idusuario='".$idusuario."' ";
        $result_user = $this->db->query($query);       
        return $result_user ->result_array();      
    }

    /*Asigna el perfil del usuario */
    function recordusuarioperfilstandar($idusuario){

        /*Verificamos que el perfil ya se encuentre registrado*/
            $query_select ="SELECT * FROM usuario_perfil WHERE idusuario='".$idusuario."'  AND  idperfil = '1' ";
            $result_select  = $this->db->query($query_select);       
            $exist = $result_select->num_rows();
            
            /*Si ya existe no lo registramos*/    
            if ($exist == 1) {
                return true;
            }else{
                /*Registramos*/
                $query_record ="INSERT INTO usuario_perfil  VALUES ('".$idusuario."' , '1')"; 
                $result = $this->db->query($query_record);       
                return $result;        
            }

    }



    /*Listamos los perfiles y sus permisos */
        function listperfilesrecursospermisos(){

            $query_dinamico="SELECT  perfil_recurso.idperfil, perfil_recurso.idrecurso ,
                             recurso.nombre AS recurso, 
                            perfil.nombreperfil FROM perfil_recurso, recurso ,
                            perfil WHERE perfil_recurso.idrecurso = recurso.idrecurso 
                            AND perfil_recurso.idperfil = perfil.idperfil";

               $result = $this->db->query($query_dinamico);  
               return $result ->result_array();      


    }



    /*Listamos todos los perfiles del sistema */
    function listallperfiles(){


        $query_list ="SELECT * FROM perfil";
        $result = $this->db->query($query_list);  
        return $result ->result_array();      


    }
    /*Termina la función */

    



    
  /*Actualiza los datos del perfil */
   function updateperfil($idperfil , $descripcion){

        $query_update ="UPDATE perfil SET descripcion = '".$descripcion."' WHERE idperfil = '".$idperfil."'  ";
        $result = $this->db->query($query_update);  
        return $result;  
   } 
   /*Termina actualiza los datos del perfil */



   /***********************************************Insertar perfil****************************************************/

   function insertperfil( $nombre  , $descripcionperfil ){

    

        if ( strlen($nombre) > 0  ) {
            
                /*Verifica qsi existe o no el recursos en la base de datos*/    
                if ( $this->existperfilbyname($nombre) > 0 ){
                    /*Informe de existencia */
                    return "El recurso existe actualmente, intente con otro nombre";
                }else{

                    /*Insertamos en la base de datos*/
                    $query_insert ="INSERT INTO  perfil (nombreperfil ,  descripcion ) values ('".$nombre."' ,  '".$descripcionperfil."'  )";
                    $result = $this->db->query($query_insert);
                    return $result;            
                }
        
        }else{
            return "Complete los campos";
        }       


   }





    function existperfilbyname($nombre){

        $query_existrecurso ="SELECT * FROM perfil  WHERE nombreperfil = '". $nombre . "' ";
        $result = $this->db->query($query_existrecurso);  
        /*Bandera */

        $b=0;
        foreach ($result ->result_array() as $row){

            $b++;


        }   
        return $b;      
    }



    /*Elimina perfil */
    function removeperfilbyid($idperfil){

        /*Eliminamos el perfil a los usuarios*/
        $query_delete_up ="DELETE  FROM usuario_perfil WHERE idperfil = '". $idperfil . "' ";         
        $result_up = $this->db->query($query_delete_up);  


        if ($result_up == true) {
            
                $query_delete ="DELETE  FROM perfil_recurso WHERE idperfil = '". $idperfil . "' ";         
                $result = $this->db->query($query_delete);  

                if ($result == true) {
                    
                    $query_delete_perfil ="DELETE  FROM perfil WHERE idperfil = '". $idperfil . "' ";    
                    $result_perfil = $this->db->query($query_delete_perfil);  
                    return $result_perfil;

                }else{
                    return "Algo falló al eliminar el elemento";
                }    

        }else{
                    return "Algo falló al eliminar el elemento";
        }

                
    }/*Termina la función */


/***************************************Permisos, perfil recurso *****************************************/

/*Eliminar permisos */
function deleteperfilrecurso($idperfil , $idrecurso ){

    $query_delete ="DELETE  FROM perfil_recurso WHERE idperfil = '". $idperfil . "' AND idrecurso='".$idrecurso."' ";         
    $result = $this->db->query($query_delete);  
    return $result;


}/*Termina eliminar perfil*/






/***************************************Actualizar los permisos************************************/
function updateperfilpermisopermisodb($idperfil , $idrecurso ){


    
        $dinamic_query = "SELECT * FROM perfil_recurso WHERE idrecurso = '".$idrecurso."'  AND idperfil = '".$idperfil."'  ";
        $resultquery = $this->db->query($dinamic_query);  
        
        $flag = 0;   
        foreach ($resultquery ->result_array() as $row){


            
                
                 $flag++;     
            
        }/*Termina el ciclo*/   
            


        if ($flag == 0 ) {
            /*Ponemos uno al permiso */
          
            $querydinamicupdate  ="INSERT INTO perfil_recurso (idperfil , idrecurso) values ( $idperfil , $idrecurso  ) ";

        }else{
            /*ponemos un cero al permiso*/
    
            $querydinamicupdate  ="DELETE FROM perfil_recurso WHERE idperfil = $idperfil AND  idrecurso = $idrecurso  ";
        }

         
        
        $resultupdate = $this->db->query($querydinamicupdate);  
        return $resultupdate;


    }/*Termina la función*/



/*******************************************************************************/ 




function listperfilesmodulopermisos($idrecurso){

        
    /*Los perfiles disponibles */

    $queryperfiles = "SELECT DISTINCT idperfil  FROM perfil_recurso WHERE idrecurso = $idrecurso "; 
    $resultperfilesdescarte  = $this->db->query($queryperfiles);  
     $b = 0;
    foreach ($resultperfilesdescarte ->result_array() as $row){    

        $idperfildisponible = $row["idperfil"];
        
    /*inicia */
        $query_list ="SELECT * FROM perfil WHERE idperfil = $idperfildisponible";
        $result = $this->db->query($query_list);  
          

           

                foreach ($result ->result_array() as $row){
                    /**/
                           $dataconfig["perfil"][$b] = array(

                                'idperfil' => $row["idperfil"],
                                'nombreperfil' => $row["nombreperfil"], 
                                'fecha_registro' => $row["fecha_registro"], 
                                'descripcion'=> $row["descripcion"]
                                
                                      
                            );                                    
                    $b++;
                }    
    /*Termina  */                






    }/*Termina ciclo */    




/*************************************************************************/         
        $query_list_permiso ="SELECT * FROM permiso WHERE idrecurso = '".$idrecurso."' ";
        $result_permiso = $this->db->query($query_list_permiso);  
          

            $x = 0;

                foreach ($result_permiso ->result_array() as $row){
                    /**/
                           $dataconfig["permiso"][$x] = array(

                                'idpermiso' => $row["idpermiso"],
                                'nombrepermiso' => $row["nombrepermiso"],                                 
                                'descripcionpermiso'=> $row["descripcionpermiso"],

                            );                                    
                    $x++;
                }    

       



/******************************Perfil Permiso *************************************************/
        

        $query_perfil_permiso ="SELECT * FROM perfil_permiso";
        $result_pp = $this->db->query($query_perfil_permiso);  
          

            $t = 0;

                foreach ($result_pp ->result_array() as $row){
                    /**/
                           $dataconfig["perfil_permiso"][$t] = array(

                                'idpermiso' => $row["idpermiso"],
                                'idperfil' => $row["idperfil"],
                                

                            );                                    
                    $t++;
                }    


        return $dataconfig;      


}




function getidempresabyidusuario($iduser){


  $querygetidempresa   ="SELECT idempresa FROM usuario WHERE idusuario = $iduser "; 
  $result = $this->db->query($querygetidempresa); 

  $idempresa = 0;

  foreach ($result ->result_array() as $row) {
   
     $idempresa =  $row["idempresa"];
  }

  return $idempresa;
}





/*Termina modelo */
}



