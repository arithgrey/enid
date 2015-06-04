<script type="text/javascript" src="<?=base_url('application/js/perfilesavanzado/principalavanzado.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfilesavanzado/editperfilpermiso.js')?>"></script>

     
              <div class='col-xs-12 col-sm-10'>                                           
                <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#permisos" id='permisos_selection' aria-controls="home" role="tab" data-toggle="tab"><label class='lb_mnu'>Permisos </label> </a></li>
                          <li role="presentation"><a href="#paginasweb" id='paginasweb_section' aria-controls="perfiles" role="tab" data-toggle="tab"><label class='lb_mnu'>Ayuda para la configuración</label></a></li>
                          
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="permisos">  
                            
                               
                            <h3>Editar los permisos para el modulo <span class="label label-default" id='nombremodulo'><form id='form_modulo'><input type='hidden' name='recursoid' value="<?=$modulo?>"></form>  </span></h3>
							<div id='tablageneral'></div>                                

                          </div>



                          <div role="tabpanel" class="tab-pane" id="paginasweb">       
                            <h3> <span class="label label-default"> Administración de los perfiles en la plataforma</span></h3>      
                          </div>


                        
                </div>
              </div>





