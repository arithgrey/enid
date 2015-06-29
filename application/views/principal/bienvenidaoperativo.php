<script type="text/javascript" src="<?=base_url('application/js/presentacion/personas.js')?>"></script>

<style type="text/css">
    #clientestitle{
        font-size: 2em;
    }
    #ocultoTA1{
        display: none;
    }
    #ocultoTA2{
        display: none;
    }
    #ocultoTA3{
        display: none;
    }
    #ocultoTA4{
        display: none;
    }
</style>
<div class="panel-body">

    <div class="tab-content">

        <div class="tab-pane active" id="general">

            <div class="col-md-1"></div>

            <div class="col-md-9">

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>Listado</center></th>
                                    <th><center>Cantidad</center></th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>Personas Morales</td>
                                    <td id="personasMorales"> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Personas Fisicas</td>
                                    <td id="personasFisicas"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total de clientes en el sistema</td>
                                    <td id="numeroclientes"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alertas Morales</td>
                                    <td id="alertasMorales"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alertas Fisicas</td>
                                    <td id="alertasFisicas"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total de alertas generadas</td>
                                    <td id="numeroAlertas"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Expedientes de personas morales</td>
                                    <td id="expedientesMorales"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Expedientes de personas fisicas</td>
                                    <td id="expedientesFisicas"></td>
                                    <td></td>
                               </tr>
                                <tr>
                                    <td>Total de expedientes en el sistema</td>
                                    <td id="totalExpedientes"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <input id='inputClientes' type='hidden' />

                    <input id='numeroFisicos_input' type='hidden' />
                    <input id='numeroMorales_input' type='hidden' />

                    <input id='input_expedientesFisicas' type='hidden' />
                    <input id='input_expedientesMorales' type='hidden' />
         
                    <div id="masInfo" align="center">
                      <a href="<?=base_url('index.php/auditoria/exportaTablaPDF/')?>">Generar PDF</a>
                    </div>

            </div>

        </div>
    </div>
</div>

                       
                    


<div class="row">
    <div class="col-md-12">
    <div id="newgraph"></div>
    </div>
</div>












































