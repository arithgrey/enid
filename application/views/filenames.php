
<div class="col-sm-12">
	<section class="panel">
		<header class="panel-heading">
                            Documentos del credito que soliciyo el cliente 	
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>



                         <div class="panel-body">
                            <table class="table  table-hover general-table">
                                <thead>
                                <tr>
                                    <th>Documentos (Descargar)</th>
                                    <th>Estatus</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>

                                <tbody>
<?php
 if($files){
     echo heading('Archivo(s) disponible(s) para descargar', 3);


     $lista="";
      foreach($files as $file){
       
        
        $lista .=" <tr>  <td> <a href='#'> <img style='width:7%;' src='".base_url('application/img/general/download61.png')."'>  ". anchor('files/downloads/'.$file, $file).br(1) . "</a> </td>" ;
     	$lista .="<td><span class='label label-warning label-mini'><img src='".base_url('application/img/general/glyphicons-207-ok-2.png')."'></span></td>";
     	$lista .="<td><div class='progress progress-striped progress-xs'>
     	<div style='width: 99%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='40'
     	 role='progressbar' class='progress-bar progress-bar-info'><span class='sr-only'>70% 
     	 Complete (success)</span></div></div></td></tr>";		
      }



      echo $lista;

		
 }else{

	echo heading('No hay archivos para descargar', 3).anchor('files', 'Subir un Archivo');

 }
    

?>
                    
                        
                       

                               
                                   
                                        
                                            
                                       
                                   

                                        
                                    
                                
                               
                               

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>



