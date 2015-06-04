<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript" src="<?=base_url('/application/js/foundation/foundation.reveal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/application/js/opensource/open.js')?>"></script>
	
	
	<div class='row'>
		
		<div class='container align-center'>
		<!--

		<div class='col-md-3' id='perfil_img'>
			
			<a href="<?=$arithuser->getHtmlUrl()?>">
				<img id='perfilimg' src="<?=$arithuser->getAvatarUrl()?>">
				
				<label><?=$arithuser->getEmail()?></label>				
				<label><?=$arithuser->getCompany()?></label>				
			</a>
			<label id='btn_tw'>Twitter @<?=$arithuser->getName()?></label>
			
		</div>

	-->
<style>

.gitimg:hover{
    padding: 1%;
}

</style>




<div class="col-sm-12">
                    <div class="timeline">
                        <article class="timeline-item alt">
                            <div class="text-right">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary">@arithgrey en Github </a>
                                </div>
                            </div>
                        </article>




		<?php
		$i = 0;
		$gitelements="";
		
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
                                      
                                        $gitelements.="<h1 class='green'>".$reporesume->getName()."</h1>";
                                        $gitelements.="<p>".  $reporesume->getDescription() ." <a href='".$reporesume->getHtmlUrl()."'><img class='gitimg'  src='". base_url('application/img/general/social-network44.png'). "'> </a></p>";
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
                                      
                                        $gitelements.="<h1 class='green'>".$reporesume->getName()."</h1>";
                                        $gitelements.="<p>".  $reporesume->getDescription() ." <a href='".$reporesume->getHtmlUrl()."'><img class='gitimg' src='". base_url('application/img/general/social-network44.png'). "'> </a></p>";
                                    $gitelements.="</div>";
                               $gitelements.=" </div>";
                            $gitelements.="</div>";
                        $gitelements.="</article>";

    } 	

						
                                      



				}
		?>
		<?=$gitelements;?>
	</div>
</div>




		

                        
                     

                    </div>
                </div>




                      