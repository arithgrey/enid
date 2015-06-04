<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class perfilrecursomodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }




 






    function displayrecursobyperfiles($perfiles){

        $b = 0;
        $datainfo = array();
        $datacompleto = array();
        foreach ($perfiles as $row){

            $idperfil = $row["idperfil"];

            $query_dinamico ="SELECT  r.nombre , r.urlpaginaweb , r.iconorecurso, r.descripcionrecurso , pr.idrecurso 
                            FROM recurso AS r , perfil_recurso AS pr WHERE 
                            r.idrecurso = pr.idrecurso AND pr.idperfil = $idperfil ";


            $result = $this->db->query($query_dinamico);  
            $data  = $result ->result_array();
            
            /*Inicia el ciclo para sacar recursos */

                        for ($i=0; $i <  count($data); $i++) { 
                            
                            if (!in_array( $data[$i], $datainfo)) {

                                    $datainfo[$b] = $data[$i];
                               $b++;                    
                            }

                        }
            /*Termina el ciclo */

         /*Terminamos de de recorrer perfiles*/   
        }




/*********************************************************************************************************/


       



        /*Sub páginas*/
        $datacompleto = $datainfo;

       


        foreach ($perfiles as $row){

            $idperfilactual = $row["idperfil"];
            

       


                    /******  ******/
                    for ($a=0; $a < count($datacompleto); $a++) { 
                        
                        $idrecursoactual= $datacompleto[$a]["idrecurso"];   
                        
                        /*Validamos que no este sin elementos el arreglo*/                        
                        if ($idrecursoactual != "") {
                                

                            $subpaginasquery = "SELECT  p.nombrepermiso , p.urlpaginaweb , p.iconpermiso
                            , p.descripcionpermiso 
                            FROM permiso AS p , perfil_permiso AS pp  
                            WHERE  pp.idpermiso = p.idpermiso AND 
                            pp.idperfil = $idperfilactual AND p.idrecurso = $idrecursoactual";

                            $resultsubpaginas  = $this->db->query($subpaginasquery);  
                            $datasubpaginas   = $resultsubpaginas ->result_array();


                            $datacompleto[$a]["subpaginas"] = $datasubpaginas; 


                        }/*Terminamos de validar que no este sin id el arreglo */
    
                    }
                    /******  ******/


        }








        
        return $datacompleto;
    }

    
    



}



