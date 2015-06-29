<?=link_tag('application/css/perfiles/principalperfiles.css')?>     

<!--Cargammos el js -->

<script type="text/javascript" src="<?=base_url('application/js/perfiles/principal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfiles/editrecurso.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfiles/editarperfil.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfiles/registro.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfiles/editarpermisos.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/perfiles/editperfilrecurso.js')?>"></script>
                 
     
                  
                        
                     
                <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#permisos" id='permisos_selection' aria-controls="home" role="tab" data-toggle="tab"><label class='lb_mnu'>Permisos </label> </a></li>
                          <li role="presentation"><a href="#perfiles" id='perfiles_section' aria-controls="perfiles" role="tab" data-toggle="tab"><label class='lb_mnu'> Roles</label></a></li>
                          <li role="presentation"><a href="#recursos" id='recursos_section' aria-controls="recursos" role="tab" data-toggle="tab"> <label class='lb_mnu'>Módulos</label></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="permisos">  
                            <!--Cargamos el listado de permisos y perfiles -->
                            <h3> <span class="label label-default"> Modulos disponibles para los perfiles </span></h3>      
                              <div id="display_permisos"></div>


                                
                                      
                              
                              

                               



                                <!--Perfiles roles y recursos-->
                                  <form id='form_permisos' class='form_permisos' method="GET">
                                    <input type='hidden' name="recurso" value="Perfiles, recursos y permisos">
                                  </form>
                              <!--Perfiles -->
                                

                          </div>



                          <div role="tabpanel" class="tab-pane" id="perfiles">       
                            <h3> <span class="label label-default"> Perfiles del sistema</span></h3>      
                            <div id="display_perfiles"></div>

                             <div class='row'><!--Inicia row -->
                               <form id='formnewperfil'>
                              <div class='col-xs-12 col-sm-1'></div> 
                                <div class='col-xs-12 col-sm-10'>

                                       
                                      <div class='col-xs-12 col-sm-11'>    
                                            <div class="input-group">
                                            <input type="text" name='nuevoperfil' class="form-control" placeholder="Perfil standar" aria-describedby="basic-addon2">
                                            <span class="input-group-addon"  id="basic-addon2">Nombre del perfil</span>
                                            </div>       
                                      </div>
                                      <div class='col-xs-12 col-sm-1'>
                                          <img id="textareaperfil" class='newdescriptionicon' src="<?=base_url('application/img/general/notebook88.png')?>">
                                      </div>
                                    <div class='section_description_text_perfil'>   
                                       
                                          <label>Descripción</label>
                                         
                                          <textarea  name='descripcion_perfil_nuevo' class='col-xs-12 col-sm-12 form-control input-lg p-text-area' placeholder='El perfil con acceso a todos los recursos '></textarea>  
                                      
                                    </div>   
                                </div><!--Termina  10 -->         
                              <div class='col-xs-12 col-sm-1'></div>
                                </form>
                              </div><!--Termina  row -->  
                              <br>
                              <!--Nueva descripción-->


                              <div class='row'>    
                                  <div class='col-xs-12 col-sm-1'></div> 
                                  <div class='col-xs-12 col-sm-2'>


                                       <span  id='nuevo_perfil_bt' class="label label-info"> + Nuevo perfil</span> 
                                  </div>
                                  <div class='col-xs-12 col-sm-9'>
                                    <div id="list_repo_perfiles">


                                    </div>
                                  </div>
                              </div>    

                              <!--Perfiles roles y recursos-->
                                  <form id='form_perfil' class='form_permiso' method="GET">
                                    <input type='hidden' name="recurso" value="Perfiles">
                                  </form>
                              <!--Perfiles -->
                          </div>


                          <div role="tabpanel" class="tab-pane" id="recursos">
                            <h3> <span class="label label-default"> Modulos disponibles en la plataforma </span></h3>      
                                   
                                     <div id="display_recursos"></div>
                                    <!--Registrar nuevo recurso-->  
                                    
                                    <div class='row'><!--Inicia row -->
                                      <form id='formnewrecurso'>
                                      <div class='col-xs-12 col-sm-1'></div>
                                      <div class='col-xs-12 col-sm-10'> 
                                          <div class='col-xs-12 col-sm-11'> 
                                              <div class="input-group">
                                                  <input type="text" name='recursonombre' class="form-control" placeholder="Ayuda" aria-describedby="basic-addon2">
                                                  <span class="input-group-addon" id="basic-addon2">Nombre del modulo (recurso)</span>          
                                              </div>
                                          </div>         
                                      
                                            <div class='col-xs-12 col-sm-1'>
                                                <img class='newdescriptionicon' id='textarearecurso' src="<?=base_url('application/img/general/notebook88.png')?>">
                                            </div> 

                                            <div class='section_description_text_recurso'>   
                                              <label>Descripción</label>


                                              <textarea name='descripcionrecursotext' class='col-xs-12 col-sm-12 form-control input-lg p-text-area' placeholder='Nombre del recurso'></textarea>  
                                            </div>   
                                          


                                      </div><!--Termina 10-->  
                                      <div class='col-xs-12 col-sm-1'></div>   
                                      </form>
                                    </div><!--Termina row-->

                                    <br>

                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-1'></div>
                                        <div class='col-xs-12 col-sm-2'>
                                           <span  id='nuevo_recurso' class="label label-info"> + Nuevo recurso</span> 

                                        </div>
                                        <div class='col-xs-12 col-sm-9'>
                                          <div id='list_repo_recurso'></div>
                                        </div>
                                        
                                    </div>


                                    <!--Recursos-->
                                    <form id='form_recursos' class='form_permiso' method="GET">
                                      <input type='hidden' name="recurso" value="Recursos">
                                    </form>
                                    <!--Termina recursos-->
                          </div>
                        
                </div>
              </div>









<!-- Modal permiso --><!-- Modal permiso --><!-- Modal permiso --><!-- Modal permiso --><!-- Modal permiso -->
<div class="modal fade" id="modaldeleteperfilrecurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img class='danger_icon' src="<?=base_url('application/img/general/warning9.png')?>">Advertencia</h4>
      </div>
      <div class="modal-body">
        <h3>Alerta</h3>
        <span>Si elimina el permiso los perfiles dejarán de tener acceso a los diversos módulos</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id='deleteconformbtnpermiso' class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>












<div class="modal fade" id="modaldeleteperfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img class='danger_icon' src="<?=base_url('application/img/general/warning9.png')?>">Advertencia</h4>
      </div>
      <div class="modal-body">
        <h3>Alerta</h3>
        <span>Si elimina el perfil también borrará los permisos que se hayan asignado al perfil previamente</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id='deleteconformbtnperfil' class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>











<!-- Modal Recurso --><!-- Modal Recurso --><!-- Modal Recurso --><!-- Modal Recurso --><!-- Modal Recurso -->
<div class="modal fade" id="modaldeleterecurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img class='danger_icon' src="<?=base_url('application/img/general/warning9.png')?>">Advertencia</h4>
      </div>
      <div class="modal-body">
        <h3>Alerta</h3>
        <span>Si elimina el recurso también borrará los permisos que se hayan asignado al perfil previamente</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id='deleteconformbtn' class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>

















