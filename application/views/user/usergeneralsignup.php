<script src="<?=base_url('application/js/sha1.js'); ?>"></script>
<script src="<?=base_url('application/js/home/registro/general.js'); ?>"></script>
<style type="text/css">
	
	#section_pw_hiden{
		display: none;
	}
#img_start{
  width: 6%;
}
#repo_section{
	color: grey;
	font-size: 1.1em;
}

.jumbotron{
	display: none;
}

/*Sólo para el fex */

body{
	background: white;
}
.cta-mail{
	display: none;
}
</style>



    

<div class='text-center'>
	<h1 class='text-center'><strong>Se parte de este gran proyecto</strong></h1>


	<a  href="<?=base_url('index.php/sessioncontroller/iniciosessionuser')?>">
		<label class='animated  bounce btn-line'>      
			<img id="img_start" src="<?=base_url('application/img/general/star83.png')?>">
			 Iniciar sessión
		</label>
	</a>
    <a href="<?=base_url();?>"><label class='btn-line'>Home </label></a>
</div>





<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Registra ahora.!  </a></li>
              
              <li class=""><a href="#why" data-toggle="tab"> <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>  Why?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="why">
        <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño.
         El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras,
          al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". 
          .</p>
        <p></p><br> Please contact <a mailto:href="arithgrey@gmail.com"></a>arithgrey@gmail.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signin">
           	<!--Inicia registro-->


						<form class="" id="form_cuenta_general"  method="POST">
							
									<!-- Username -->

									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Nombre</span>
									  <input type="text" class="form-control" placeholder="Jonathan" 
									  aria-describedby="basic-addon1" id="username" name="username">
										<input type="hidden" name="otro" id="otro">
									</div>
									<br>
								
									<!-- Correo electroónico -->
								

									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">@ email</span>
									  <input type="text" class="form-control" placeholder="Username"
									   aria-describedby="basic-addon1" name="useremail" id="useremail">
									</div>
	<br>

									<!-- Password-->
									<div class="input-group">
									  <span class="input-group-addon" >Contraseña</span>
									  <input type="password" class="form-control" 
									  name="userpassword" id="userpassword">
									</div>
									
	<br>
									<!-- Segundo pw -->
									<div id="section_pw_hiden">


										<div class="input-group">
										  <span class="input-group-addon" >Confirmar **</span>
										  <input type="password" class="form-control" 
										  name="userpassword_confirm" id="userpassword_confirm">
										</div>

<br>
		
										<div class="input-group">
										  <span class="input-group-addon" >Empresa</span>
										  <input type="text" class="form-control" 
										  name="empresaname" id="empresaname">
										</div>



									</div>

									<div class="checkbox">
							          <label>
							            <input id="termiinoscondition" value="0" type="checkbox"> 
							            He leído y acepto los términos y condiciones 
							          </label>
							        </div>


	<br>
									
									<div class="control-group">
										<!-- Button -->
										
											<label id="" class="button_segistro btn btn-info ">Registrar</label>

											<div class='repo_section' id='repo_section'></div>
										
										
									</div>

								
							</form>

           	<!--Termina Registro -->
        </div>
    </div>
      </div>
      
    </div>
  </div>
    </div>



	


        

   
   
jj