<script type="text/javascript" src="<?=base_url('application/js/archivos/principal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/archivos/edit.js')?>"></script>

<style type="text/css">
.section_cuestionario{
    display: none;
}

.newdescriptionicon{
        width: 65%;
}

.newdescriptionicon:hover , .newcuestionario:hover {
        width: 75%;

}
.icondocuments:hover{
      width: 18%;
}
.textimgdescripcion , .textimgformulario{
    display: none;
}

.formicon{
    width: 18%;
}
.nombredoc:hover{
  
  width: 30%;
}
.inputname{
  display: none;
}
.icondocuments{
  width: 15%;
}.nuevonombrearchivo{
  display: none;

}
.namearchivo{
  font-size: .9em;
}
.descripcionupdatetext{
  font-size: .8em;
}
.namearchivo:hover{
  width: 2%;
  cursor: pointer;

}
.descripcionupdatetext{
  width: 30%;
  cursor: pointer;
}
.inputdescripcion{
  display: none;
}
#imgarchivo{
  width: 17%;
}

</style>



                        <header class="panel-heading custom-tab dark-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#general" data-toggle="tab">
                                <img id="imgarchivo" src="<?=base_url('application/img/general/book288.png')?>"> Créditos de su empresa</a>
                                </li>
                                  
                                
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="general">
                                   <!--Aquí inicia el primero de los menus -->






                                   <div class='row'><!--Inicia row -->
                                      <form id='formarchivo'>
                                      <div class='col-xs-12 col-sm-1'></div>
                                      <div class='col-xs-12 col-sm-10'> 



                <div class="adv-table editable-table ">
              
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                  <div class="row">
                   <table class="table" >
              
                      <thead>
                          <tr role="row">
                              <th>#</th>
                              <th>Crédito empresarial
                                
                                 <img id="imgarchivo" src="<?=base_url('application/img/general/file186.png')?>"> 
                                
                              </th>
                              <th>Descripción
                                 <img id="imgarchivo" src="<?=base_url('application/img/general/businessman91.png')?>"> 
                                
                               </th>
                              <th>Fecha de registro
                                 <img id="imgarchivo" src="<?=base_url('application/img/general/square58.png')?>"> 
                                

                              </th>
                              <th>(Documentos solicitados)
                                   <img id="imgarchivo" src="<?=base_url('application/img/general/image-processing.png')?>"> 
                              
                              </th>
                                 
                             
                            </tr>
                      </thead>
                
                    <tbody class='tablecontent'>
                     
                    </tbody>
                  </table>
              <div class="row">
              
              <div class="col-lg-12">
                <div class="dataTables_paginate paging_bootstrap pagination">
                  <ul>
                    <li class="prev disabled"><a href="#">← Prev</a>
                    </li><li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">Next → </a></li>
                  </ul>
                </div>
            </div>
          </div>
  
        </div>
                </div>
                         <div id='listaarchivo'></div>


                                          <div class='col-xs-12 col-sm-11'> 
                                              <div class="input-group">
                                                  <input type="text" name='nombrearchivo'  id="nombrearchivo" class="form-control"
                                                   placeholder="AVIO, REFACCIONARIO, PRENDATARIO" aria-describedby="basic-addon2">
                                                  <span class="input-group-addon" 
                                                  id="basic-addon2">Nombre del crédito
                                                </span>  

                                              </div>
                                          </div>         
                                      
                                            <div class='col-xs-12 col-sm-1'>
                                                <img class='newdescriptionicon' id='' 
                                                src="<?=base_url('application/img/general/notebook88.png')?>">
                                                <span class='textimgdescripcion'>Añadir
                                                 descripción del crédito</span>
                                            </div> 



                                            

                                            <div class='section_cuestionario'>   
                                              

                                              <label> <img src="<?=base_url('application/img/general/target44.png')?>"> Propósito que tiendrá este archivo</label>
                                              <textarea name='descrionarchivo' class='col-xs-12 col-sm-12 form-control input-lg p-text-area' 
                                              placeholder='Pedir a los operativos que tengan los documentos de facturación electrónica del 2015'></textarea>  
                                            </div>   
                                          


                                      </div><!--Termina 10-->  
                                      <div class='col-xs-12 col-sm-1'></div>   
                                      </form>
                                    </div><!--Termina row-->
        
        



                                    <div class='row'>    
                                        <div class='col-xs-12 col-sm-1'></div> 
                                          <div class='col-xs-12 col-sm-2'>










                                               <span  id='nuevo_archivo' class="label label-info"> + Nuevo archivo</span> 
                                          </div>
                                          <div class='col-xs-12 col-sm-9'>
                                            <div id="clientresponse" class='clientresponse'>


                                            </div>
                                          </div>
                                    </div>    

                    












                                   <!--Aquí termina  -->
                                   
                                </div>
                                <div class="tab-pane" id="about2">
                                
<!--ok-->

                                    <!--Aquí inicia -->
         
                                    <!--Aqui termina-->


                                </div>
                                
                            </div>
                        </div>
                    




