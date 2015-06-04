<script type="text/javascript" src="<?=base_url('application/js/home/registro/definirperfil.js')?>" ></script>

<style type="text/css">
	#tipocuentatext{
		color: rgba(4, 45, 54, 0.96);
	}
	#section_basico , #section_profesional{
		display: none;
	}
	.icon{
		width: 15%;
	}
</style>

<div class="row">
		<h1 class="text-center"><?=$titulo;?></h1>
		<h3 id="tipocuentatext" class="text-center">Es hora de elegir el tipo de cuenta que desea adquirir </h3>		
		<div class="row">
			<div class="small-8 large-centered columns">
				<ul class="button-group">
				  <li id="free" class="button large-4 columns"><img class="icon" src="<?=base_url('application/img/general/flag10.png')?>"> Estandar (Gratis) </li>
				  <li id="basico" class="button large-4 columns"><img class="icon" src="<?=base_url('application/img/general/star174.png')?>"> Básico</li>
				  <li id="profesional" class="button large-4 columns"><img class="icon" src="<?=base_url('application/img/general/diamond13.png')?>"> Profesional</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
		<section id="section_free">
			<div class="small-6 large-centered columns">
				<ul class="pricing-table"> 
					<li class="title">Estandard (Gratis)</li>
					<li class="price">$0</li> 
					<li class="description">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".</li> 
					<li class="bullet-item">1 Año</li>
					<li class="bullet-item">Descripción</li>
					<li class="bullet-item">10 Usuarios</li>
					<li class="bullet-item">
						<div class="switch small-2 large-centered columns">
						  <input id="exampleCheckboxSwitch" type="checkbox">
						  <label for="exampleCheckboxSwitch"></label>
						</div> 
					</li>
			 	</ul>
			</div>
		</section>	


		<section id="section_basico">
			<div class="small-6 large-centered columns">
				<ul class="pricing-table"> 
					<li class="title">Básico</li>
					<li class="price">$10</li> 
					<li class="description">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".</li> 
					<li class="bullet-item">1 Año</li>
					<li class="bullet-item">Descripción</li>
					<li class="bullet-item">10 Usuarios</li>
					<li class="bullet-item">
						<div class="switch small-2 large-centered columns">
						  <input id="exampleCheckboxSwitch" type="checkbox">
						  <label for="exampleCheckboxSwitch"></label>
						</div> 
					</li>
			 	</ul>
			</div>
		</section>	


		<section id="section_profesional">
			<div class="small-6 large-centered columns">
				<ul class="pricing-table"> 
					<li class="title">Profesional</li>
					<li class="price">$100</li> 
					<li class="description">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".</li> 
					<li class="bullet-item">1 Año</li>
					<li class="bullet-item">Descripción</li>
					<li class="bullet-item">10 Usuarios</li>
					<li class="bullet-item">
						<div class="switch small-2 large-centered columns">
						  <input id="exampleCheckboxSwitch" type="checkbox">
						  <label for="exampleCheckboxSwitch"></label>
						</div> 
					</li>
			 	</ul>
			</div>
		</section>	







			
		</div>
<form action ="" id="formusuarioeleccion" method="post">
	<input type="hidden" name="iduser" id="iduser" value="<?=$idusuario;?>">	
</form>	


</div>
	<a href="<?=base_url('index.php/sessioncontroller/logout/')?>"><button>Salir del sistema</button></a>	



