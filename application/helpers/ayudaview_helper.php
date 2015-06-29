<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//si no existe la función invierte_date_time la creamos
if(!function_exists('invierte_date_time')){

/*******************************************************************************************************/
/*Retornamos la vista que desplegará  en principal*/


function getperfil( $perfil ){

		$idperfilactual  = 0; 
		/*Inicia el ciclo */
			foreach ($perfil as $row) {				
				$idperfilactual = $row["idperfil"];
			}
		/*Termina ciclo*/
		return $idperfilactual;
}

/****************************************************************************************************/	
function displayviewpresentacion( $perfil ){

		$idperfilactual =  getperfil( $perfil );
		
		$view = "";
		switch ($idperfilactual) {
			case 3:

				$view ="principal/bienvenidauserprincipal";		
				break;
			case 4:
				$view ="principal/bienvenidaAdmincuentaempresarial";	
				break;	

			case 5:
				$view ="principal/bienvenidaauditor";	
					break;	
			case 6:
				$view ="principal/bienvenidaoperativo";	
				break;	
					
			default:
				$view ="principal/pagenoencontrada";
				break;
		}

		return $view;

	}

/****************************************************************************************************/	
/*Termina retornamos la vista que desplegará */
 



function displayviewusuario( $perfil ){


	$idperfilactual =  getperfil( $perfil );
		
		$view = "";
		switch ($idperfilactual) {
			case 3:

				$view ="usuarioscuenta/parasuperadministrador";		
				break;
			case 4:
				$view ="usuarioscuenta/paraadministradorcuenta";	
				break;	
					
			default:
				$view ="principal/pagenoencontrada";
				break;
		}

		return $view;

} 

/****************************************************************************************************/	
/*Termina retornamos la vista que desplegará */




}/*Termina el helper*/
 