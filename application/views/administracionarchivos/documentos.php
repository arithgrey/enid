<script type="text/javascript" src="<?=base_url('application/js/archivos/solicituddocumentos.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/archivos/editararchivo.js')?>"></script>

<style type="text/css">


.text_proposito{
	font-size: .8em;

}

#helptitle{
    font-size: 1.2em;
}#textareanewespecifiacion{
    display: none;
}
.descriptiondocument{
    font-size: .8em;
    color: black;
}
.selectlist, .areadescription, .nameinput{
    display: none;
}
.descriptiondocument:hover{
    font-size: .9em;
}
#namearchivo{
    font-size: 2em;
    color: black;
}
.todo-title{
    color: black;
    font-size: 1.2em;

}
 .imgdeleteok{
    width: 20%;
}
.imgcuestionario:hover{
    width: 83%;
}

.imgcuestionario{
    width: 90%;
}

</style>


               







<!--********************************************************************************************************-->
<div class="row">
    <div class='col-md-1'></div>

    <div class='col-md-9'>

         <div class="row"><strong><p id="namearchivo"></p></strong></div>
                        
                           
                        <div class="panel-body">
                            <ul class="to-do-list ui-sortable" id="sortable-todo">
                                
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input value="None" id="todo-check4" type="checkbox">
                                        <label for="todo-check4"></label>
                                    </div>
                                    <p class="todo-title">
                                       
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form"  id="form_new_solicitud" class="form_new_solicitud">
                                        <div class="form-group todo-entry col-md-9" >
                                            <input placeholder="IFE, Licencia de conducir, Acta de nacimiento" 
                                             class="form-control" id="documento_solicitado" name="documento_solicitado" type="text">
                                        </div>

                                        <div class='col-md-3'> 

                                             <button class="col-md-4 btn btn-primary pull-right" id='button_solicitud_doc'> 
                                                +
                                             </button>

                                             <img id="descriptionbtn" class="button-next  btn btn-info col-md-3" src="<?=base_url('application/img/general/clipboard45.png')?>">    

                                             <input type='hidden' name='archivo' value="<?=$idarchivo;?>">
                                        </div>
                                        
                                        <div class='row'>
                                            <span  class="label-info" id='clientresponse'> </span>
                                        </div>

                                         <!--Especificaciones que debe tener el documento al ser recibido -->
                                    
                                    <div id="textareanewespecifiacion" class='col-md-12'>
                                        
                                        <div class="row">
                                            <img  class='col-md-1' src="<?=base_url('application/img/general/professional6.png')?>">
                                            <mark  class='text-center col-md-8'>

                                            El documento debe cumplir con las siguientes especificaciones y formato de tal manera que el personal solo reciba documentación de calidad. 

                                            </mark>


                                        </div>
                                          <textarea name='especificacionesdocumento' placeholder="Las especificaciones que tendrá el documento al ser recibido " class='col-md-9' ></textarea>  
                                            
                                    </div>
                                    </form>
                                    
                                </div>

                            </div>
                        </div>
    </div>
        <div class='col-md-1'></div>
</div> <!--Termina el row del listado -->                   




















<!--*********************************************-->
      

<form id='dinamicformupdate'>

    <input type='hidden' name='nuevanota' id="nuevanota" >
    <input type='hidden' name='nuevonombre' id="nuevonombre" >
    <input type="hidden" name="archivoid" id="archivoid" value="<?=$idarchivo;?>"> 
    <input type='hidden' name='iddocumentosolicitado' id="iddocumentosolicitado" >
    

</form>             
                     




<!--*********************************************-->
      
             




<!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modaldeletedocument" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Realmente desea dejar de solicitar este 
                            documento para éste archivo?</h4>
                    </div>
                    <div class="modal-body">
                        

                            
                            <div class="well">
                                <a href="">
                                       Las solicitudes dentro de los archivos, son el conjunto de documentos 
                                       bajo reglas y requerimientos acumplir, de tal manera que
                                       se tengas reglas y normaas para regular la calidad de los mismos. 

                                  </a>
                            </div>
                        

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button data-dismiss="modal"  class="btn btn-danger" type="button" id="confirmardelete">
                            <img class='col-md-4' src="<?=base_url('application/img/general/delete48.png')?>">
                            <strong>Eliminar</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->











        



