<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class reportemodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function datos($texto,$caja,$selection){

	//return $texto . $caja . $selection;
	$consulta = "INSERT INTO reportesystema (reporte, descripcionreporte, tiporeporte) VALUES ('".$texto."','".$caja."','".$selection."')";
	$resultado = $this->db->query($consulta);
	return $resultado;
}
function listarReportes(){
		$consultaLista = "SELECT * FROM  reportesystema ";
		$listado = $this->db->query($consultaLista);
		return $listado->result_array();
}


}
