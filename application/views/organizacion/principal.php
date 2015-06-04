<style type="text/css">
    #texto:hover{
        font-size: 1.2em;
        cursor:pointer;
    }
    #Ciudad{
        display: none;
    }
</style>
<script type="text/javascript" src="<?= base_url('application/js/Organizacion/ciudad.js')?>"></script>
<!-- <script type="text/javascript" src="<?= base_url('application/js/Organizacion/documento.js')?>"></script> -->

<br>
<div class="row">
    <div class ="col-md-10">

        <div class="col-md-4">
  


        </div>
        <!-- inicio -->
        <div class="col-md-8">

            <div id="collapseOne2" class="panel-collapse collapse in" style="height: 0px;">
                <div class="panel panel-primary">
                                
                    <div class="panel-heading">
                        Configuración general de la cuenta
                    </div>
                                
                </div>
                                                        
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Ciudad</label>
                            <div class="col-lg-3">
                                <div class="iconic-input">
                                    <i class="fa fa-home"></i>
                                    <div id="divCiudad"></div>
                                    <BR>
                                </div>
                            </div>                                       
                        </div>
                    </form>
                </div>
            </div>

            <div id="collapseTwo2" class="panel-collapse collapse">
                <div class="panel panel-primary">
                                
                    <div class="panel-heading">
                        Seleccione los archivos a cargar...
                    </div>
                                
                </div>
                      
                <div class="panel-body">

                    <?php //echo $error;?>

                    <?php //echo form_open_multipart('controller/upload/do_upload');?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-3">
                               
                                <input type="file" name="userfile" size="20" />
                                <br />

                                <input type="submit" value="Enviar Archivo" />
                                <BR>    
                                
                            </div>                                       
                        </div>
                    </form>

                </div> 

                <div id="divDocumento"></div>
            </div>
            
            <div class="row">
                        



            </div>
                        
        </div>
    </div>
</div>  



<a href="#" class="btn btn-lg btn-success"
                    data-toggle="modal"
                data-target="#basicModal">Version del Producto</a>  


<div class="row">



                        
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Version del Producto</h4>
            </div>
            <div class="modal-body">
                <h3>FEX version 1.2</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <div id="masInfo" align="right">
                    <a href="<?=base_url('index.php/reportecontrolador')?>">¿Tienes alguna sugerencia o comentario?</a>
                </div>
            </div>
        </div>
    </div>
</div>


</div>