<script type="text/javascript" src="<?=base_url('application/js/opensource/open.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('application/css/css/style.css')?>">
<link href="<?=base_url('application/css/css/style-responsive.css')?>" rel="stylesheet">
<?php
        $i = 0;
        $gitelements="";
        $generalstadistics = array();  
        $z=0;
            foreach ($repolist as $key => $value) {
                    $reporesume = $repolist[$key];
                     
    $i++;    
    if (($i % 2) == 0) {
       
        $gitelements.="<article class='timeline-item alt'>";
                            $gitelements.="<div class='timeline-desk'>";
                                $gitelements.="<div class='panel'>";
                                    $gitelements.="<div class='panel-body'>";
                                        $gitelements.="<span class='arrow-alt'></span>";
                                        $gitelements.="<span class='timeline-icon'></span>";
                                      
                                        $gitelements.="<h1 class='green'><strong>".$reporesume->getName()."</strong></h1>";
                                        $gitelements.="<p class='article-p'>". substr( $reporesume->getDescription() , 0, 200)    ." <a href='".$reporesume->getHtmlUrl()."'><i class='fa fa-github-alt fa-3x'></i> </a></p>";
                                    $gitelements.="</div>";
                               $gitelements.=" </div>";
                            $gitelements.="</div>";
                        $gitelements.="</article>";




    } else {
        
        $gitelements.="<article class='timeline-item'>";
                            $gitelements.="<div class='timeline-desk'>";
                                $gitelements.="<div class='panel'>";
                                    $gitelements.="<div class='panel-body'>";
                                        $gitelements.="<span class='arrow'></span>";
                                        $gitelements.="<span class='timeline-icon'></span>";
                                      
                                        $gitelements.="<h1 class='green'><strong>".$reporesume->getName()."</strong></h1>";
                                        $gitelements.="<p class='article-p' >".  substr( $reporesume->getDescription() , 0, 200)   ." <a href='".$reporesume->getHtmlUrl()."'> <i class='fa fa-github-alt fa-3x'></i></a></p>";
                                    $gitelements.="</div>";
                               $gitelements.=" </div>";
                            $gitelements.="</div>";
                        $gitelements.="</article>";

                      }     

                $numerocommits  = $commits->listCommitsOnRepository("arithgrey", $reporesume->getName());            
                $generalstadistics[$z] = array(
                    'namerepo' => $reporesume->getName(),
                    'Commits' => count($numerocommits));            
                $z++;
        }

                
        ?>



<div class="row">

<div class="col-sm-2"> </div>
<div class="col-sm-8"> 

    <div class="row">
                                    <div class="timeline">
                                        <article class="timeline-item alt">
                                            <div class="text-right">
                                                <div class="time-show first">
                                                    <a href="#" class="btn btn-primary">
                                                        @arithgrey 
                                                     </a>
                                                </div>
                                            </div>
                                        </article>  
                                          <?=$gitelements;?>
                                   </div>    
   
    </div>                               
    <div class="row">
    <div id="top_x_div"></div>              
    </div>

                                <div class="row">
                                        <form id="form-comentario">
                                            <div class="form-group">
                                              <h1>Déjame tus datos y yo me pondré en contacto contigo.</h1>
                                              <textarea  id="comentario" name='comentario' class="form-control" rows="5"></textarea>
                                            </div>

                                        </form>
                                        <button id="btn-env-comentario" class="btn btn-primary">Enviar</button>            
                                    <div class="row">
                                        <div id="cliente-response"></div>
                                    </div>
                                </div>

</div>     
<div class="col-sm-2"> </div>
</div>





<style type="text/css">
#titlesubscripcion , #mce-EMAIL, #mc-embedded-subscribe, #subscribenow , #leyendaletters{
    display: none !important;
}
</style>




<!--Estadísticas-->
<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
 </script>

<script type="text/javascript">
    
    $(document).on("ready", function(){

        listo();
        
    });
    function listo(){
        estadistics = eval(<?php echo json_encode($generalstadistics);?>);
            


        var data = new google.visualization.arrayToDataTable([
                      ['', 'Actividad'],            
                      [" ", 0]

        ]);


        for(var x in estadistics){

            nombrerepo = estadistics[x].namerepo;
            Commits = estadistics[x].Commits;

            data.addRow([nombrerepo , Commits]);
        }

        var options = {
          title: '',
          width: 900,
          legend: { position: 'none' },
          chart: { subtitle: 'Proyectos libres' },
          axes: {
            x: {
              0: { side: 'top', label: 'Actividad en Github'} 
            }
          },
          bar: { groupWidth: "100%" }
        };
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }    
</script>
<!--Termina es script -->