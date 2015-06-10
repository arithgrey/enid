<?php
        $i = 0;
        $gitelements="";
        $generalstadistics =array();  
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
                                        $gitelements.="<p class='article-p'>". substr( $reporesume->getDescription() , 0, 200)    ." <a href='".$reporesume->getHtmlUrl()."'><img class='gitimg'  src='". base_url('application/img/general/social-network44.png'). "'> </a></p>";
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
                                        $gitelements.="<p class='article-p' >".  substr( $reporesume->getDescription() , 0, 200)   ." <a href='".$reporesume->getHtmlUrl()."'><img class='gitimg' src='". base_url('application/img/general/social-network44.png'). "'> </a></p>";
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

<script type="text/javascript" src="<?=base_url('/application/js/opensource/open.js')?>"></script>
    
<style>
.gitimg{
    width: 7%;
}
.gitimg:hover{
    padding: 1%;
}
.green{
    font-size: 1.5em !important;
}
#perfilimg{
    width: 100%; height: 100%;
    border-radius: 100px; -webkit-border-radius: 100px; -moz-border-radius: 100px;     
}

#perfilimg:hover {
    padding: 10px;
}

.state-overview{

    display: none;
}
.article-p{
        
    color: black !important;
}
#principal-img-general{
    background: #303E4A none repeat scroll 0% 0%;
    padding: 5px;
}
.title-table-general{
    color: white;
    font-size: 1.5em;
}
td{
    color: white !important;    
    font-size: 1.3em;
}

#time-line-background{
    //background: none repeat scroll 0% 0% #16292F;
}
body{

    background: #FBF9EC;
    
}
.panel:hover{
    padding: 10px;
}


</style>	





<br>

<div id="principal-img-general" class='container align-center'>

<div class="col-sm-2">
        <a href="<?=$arithuser->getHtmlUrl()?>">
                <img id='perfilimg' src="<?=$arithuser->getAvatarUrl()?>">          
            </a>
</div>            

            <div class="col-sm-10">            
                <!--Git table section  -->
                <div class="row">                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class='title-table-general'>Compañia</th>
                                    <th class='title-table-general'>Email</th>
                                    <th class='title-table-general'>Repositorios</th>
                                    <th class='title-table-general'>Followers</th>
                                    <th class='title-table-general'>Following</th>
                                    <th class='title-table-general'>Github creado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?=$arithuser->getCompany()?> en Enid Service </td>
                                    <td><?=$arithuser->getEmail()?>   </td>
                                    <td><?=$arithuser->getPublicrepos()?></td>
                                    <td><?=$arithuser->getFollowers()?> </td>
                                    <td><?=$arithuser->getFollowing()?>   </td>
                                    <td><?=$arithuser->getCreatedat()?></td>     
                                </tr>            
                            </tbody>
                        </table>               
                </div>
                    <!--Lenguajes section -->
                
            
            </div>    
</div>    

<div class='row'>		
    
                      

<div id="time-line-background" class='container align-center'>		
                  <!--
                  <ul class="revenue-nav">
                                        <li class="active"><a href="#">#PHP</a></li>                                        
                                        <li class="active"><a href="#">#Python</a></li>                                       
                                        <li class="active"><a href="#">#Java</a></li>
                                        <li class="active"><a href="#">#JS</a></li>                                                                            
                                        <li class="active"><a href="#">#HTML5</a></li>   
                                        <li class="active"><a href="#">#bootstrap</a></li>   
                                        <li class="active"><a href="#">#Foundation</a></li>   
                                        <li class="active"><a href="#">#CodeIgniter Web Framework</a></li>                                           
                                        <li class="active"> <a href="#">#Liferay CMS</a></li>
                                        <li class="active"><a href="#">#Liferay CMS</a></li>                                     
                                        <li class="active" ><a href="#">#SGBD MySQL</a></li>
                                        <li class="active"><a href="#">#SGBD DB2</a></li>
                                        <li class="active"><a href="#">yearly</a></li>
                                    </ul>
                -->
    <div class="col-sm-12">
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
</div>
</div>



<div class='row'>               
  <div id="time-line-background" class='container align-center'>    
    <div class="col-sm-1"></div>    
            <div class="col-sm-10">    
              <div id="top_x_div"></div>
            </div>
    <div class="col-sm-1"></div>            
  </div>




</div>


<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

        <form id="form-comentario">
            <div class="form-group">
              <h1>Déjame tus datos y yo me pondré en contacto contigo.</h1>
              <textarea  name='comentario' class="form-control" rows="5"></textarea>
            </div>

        </form>
        <button id="btn-env-comentario" class="btn btn-primary">Enviar</button>
        
            <div class="row">
            <div id="cliente-response"></div>
            </div>


    </div>
    <div class="col-sm-2"></div>
</div>




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