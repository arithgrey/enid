<script type="text/javascript" src="<?=base_url('application/js/reportes/listarReportes.js')?>"></script>
            
<div class="row">
<div class="col-sm-10">
            <section class="panel">
                    <header class="panel-heading">
                        Reportes Registrados
                    </header>
                    <div class="row">
                    <div class="panel-body">
                        <table class="table table-striped" >

                          <div id="tabla"></div>
                        </table>
                         <br>
                        <div id="masInfo" align="right">
                            <a href="<?=base_url('index.php/reportecontrolador/exportaPDF/documento')?>">Generar PDF</a>
                        </div>
                    </div>
                    </div>
                </section>
</div>
</div>



 <script type="text/javascript">
        
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
    </script>

 
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>