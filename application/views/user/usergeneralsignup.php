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

body{
	background: white;
}
.cta-mail{
	display: none;
}
.silver{
  color: #B9BCC3;
}
.align-center {
    text-align: center;
}
.btn-lg {
    padding: 16px 26px !important;
}
.btn-lg, .btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33333;
    border-radius: 6px;
}


.btn-primary {

    border-color: #F1F5F9;
    background: none repeat scroll 0% 0% #DD1C4B;
 
}


</style>
<div class="modal-dialog modal-sm">
    


        
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Registra ahora.!  </a></li>              
              <li class=""><a href="#why" data-toggle="tab"> 
              	<span class="glyphicon glyphicon-signal" aria-hidden="true">
              	</span> +info</a>
          		</li>
            </ul>
        </div>

      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="why">
        	<p>Es un hecho establecido
          </p>
        <p></p> Please contact <a mailto:href="arithgrey@gmail.com"></a>arithgrey@gmail.com for any other inquiries.<p></p>
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
								
								
									<!-- Correo electroónico -->
								

									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">@ email</span>
									  <input type="text" class="form-control" placeholder="Username"
									   aria-describedby="basic-addon1" name="useremail" id="useremail">
									</div>


									<!-- Password-->
									<div class="input-group">
									  <span class="input-group-addon" >Contraseña</span>
									  <input type="password" class="form-control" 
									  name="userpassword" id="userpassword">
									</div>
									

									<!-- Segundo pw -->
									<div id="section_pw_hiden">


										<div class="input-group">
										  <span class="input-group-addon" >Confirmar **</span>
										  <input type="password" class="form-control" 
										  name="userpassword_confirm" id="userpassword_confirm">
										</div>
		
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

<!--
<div class='text-center'>
	<h1 class='text-center'><strong>Se parte de este gran proyecto</strong></h1>


	<a  href="<?=base_url('index.php/sessioncontroller/iniciosessionuser')?>">
		<label class='animated  btn-lg btn-group-lg  btn btn-primary'>      
			<img id="img_start" src="<?=base_url('application/img/general/star83.png')?>">
			 Iniciar sessión
		</label>
	</a>
    <a href="<?=base_url();?>"><label class='btn-lg btn-group-lg  btn btn-primary'>Home </label></a>
</div>
-->


	
