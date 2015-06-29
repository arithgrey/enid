<script type="text/javascript" src="<?=base_url('application/js/usuarios/principal.js')?>"></script>


<div class='row'>
<div class="col-sm-2 col-centered"></div>
<div class="col-sm-8 col-centered">
                <section class="panel">
                    <header class="panel-heading">
                        Miembros de la cuenta
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                    </header>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Registro</th>
                                <th>Perfil</th>
                                <th>Usuario</th>
                            </tr>
                            </thead>
                            <tbody id="listausuariosempresa">
                           
                            </tbody>
                        </table>
                    </div>
                </section>
            

<div class="text-center"><a href="#myModal" data-toggle="modal">Nuevo integrante</a></div>
</div>
</div>
<!--********************************************************************************************+***** -->
 <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" 
        id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Invita a un amigo a tu organización</h4>
                    </div>
                    <div class="modal-body">
                        <p>Ingresa su mail y la información de su 
                          cuenta junto con la contraseña será enviada
                          al correo de la persona
                        </p>
                    <form method="post" id="form_new_user" >   

                          <div class="input-group">     
                            <span class="input-group-addon" id="basic-addon1">Nombre</span>
                            <input class="form-control" placeholder="Jonathan" aria-describedby="basic-addon1" id="nombre" name="nombre" type="text">
                          </div>     
                         <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">@</span>
                          <input type="mail" name='mail_newuser' id="mailnewcontact" 
                           class="form-control" 
                          placeholder="Email de la persona a quien quieres invitar a tu cuenta" 
                          aria-describedby="basic-addon1">
                        </div>
 
                  

                      

                        <div  id='listperfiles'>
                        </div>
                        <div id="clientresponse"></div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-primary sednewsolicitud" type="button">Enviar</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- modal -->
