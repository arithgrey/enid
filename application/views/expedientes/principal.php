<script type="text/javascript" src="<?=base_url('application/js/credito/creditoprincipal.js')?>"></script>

<style type="text/css">

</style>


<div class="row">
<div class="col-lg-1"></div>




<div class="col-lg-10"><!--inicia la seccion -->      

        <section class="panel">
                        <header class="panel-heading custom-tab turquoise-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home3">
                                        <i class="fa fa-home">Expedientes</i>
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#about3">
                                        <i class="fa fa-user"></i>
                                        Registrar
                                    </a>
                                </li>
                                
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="home3" class="tab-pane  active">
                                   <!--Inicia-->
                                    <table class="display table table-bordered dataTable" id="hidden-table-info">
        <thead>
            <tr role="row">
                <th aria-label=""  colspan="1" rowspan="1" role="columnheader" 
                    class="sorting_disabled">
                </th>
                <th aria-label="" 
                aria-sort="ascending"  colspan="1" rowspan="1" 
                aria-controls="hidden-table-info" tabindex="0" role="columnheader" 
                class="sorting_asc">Rendering engine
                </th>
                <th 
                colspan="1" rowspan="1" aria-controls="hidden-table-info" tabindex="0" 
                role="columnheader" class="sorting">Browser
                </th>
                <th 
                colspan="1" rowspan="1" aria-controls="hidden-table-info"
                 tabindex="0" role="columnheader" class="hidden-phone sorting">Platform(s)
                </th>
                <th 
                colspan="1" rowspan="1" aria-controls="hidden-table-info" 
                tabindex="0" role="columnheader" class="hidden-phone sorting">Engine version
                </th>
                <th 
                colspan="1" rowspan="1" aria-controls="hidden-table-info"
                tabindex="0" role="columnheader" class="hidden-phone sorting">CSS grade</th>
            </tr>
        </thead>
        
    <tbody aria-relevant="all" aria-live="polite" role="alert">

            <tr class="gradeA odd">
                <td class="center "><img src="images/details_open.png"></td>
                <td class="  sorting_1">Gecko</td>
                <td class=" ">Firefox 1.0</td>
                <td class="hidden-phone ">Win 98+ / OSX.2+</td>
                <td class="center hidden-phone ">1.7</td>
                <td class="center hidden-phone ">A</td>
            </tr>
            <tr class="gradeA even">
            <td class="center "><img src="images/details_open.png"></td>
                <td class="  sorting_1">Gecko</td>
                <td class=" ">Firefox 1.5</td>
                <td class="hidden-phone ">Win 98+ / OSX.2+</td>
                <td class="center hidden-phone ">1.8</td>
                <td class="center hidden-phone ">A</td>
            </tr>
    </tbody>
    </table>
    <!---Termina-->
                                </div>
                                <div id="about3" class="tab-pane">

                                    





















<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Datos del cliente</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Evaluación</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Resultado</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Datos del solicitante</h3>
          <div class="form-group">
            <label class="control-label">Apellido paterno</label>
            <input  maxlength="100" type="text" required="required" 
            class="form-control" placeholder="Medrano"  />
          </div>
          <div class="form-group">
            <label class="control-label">Apellido materno</label>
            <input maxlength="100" type="text" required="required" 
            class="form-control" placeholder="Salazar" />
          </div>
          <div class="form-group">
            <label class="control-label">Nombre(s)</label>
          <input maxlength="100" type="text" required="required" 
            class="form-control" placeholder="Jonathan Govinda" />
          </div>


          <div class="form-group">
            <label class="control-label">Crédito solicitado</label>
            <div id="creditosolicitado"></div>  
          </div>
            


          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Evaluación </h3>
          <div class="form-group">
            
          
          </div>
          
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Evaluar</button>
        </div>
      </div>
    </div>
  </form>
  



<style type="text/css">
body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>


<link href="<?=base_url('application/js/bootstrap.min.css')?>" rel="stylesheet" id="bootstrap-css">

<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>










                                </div>
                                <div id="contact3" class="tab-pane">Contact</div>
                            </div>
                        </div>
                    </section>

        
          


</div>


<!--Inicia menú -->
    <div class="col-lg-1">
    </div>
<!--termina menú -->
</div><!--Termina seccion -->        
