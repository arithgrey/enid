<script src="<?=base_url('application/js/sha1.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/home/iniciosession/iniciosession.js')?>"></script>
  


<h1 class="text-center"  >Inicia sesión a tu cuenta.</h1>
  <!--Inicio de session -->
    <div >      
      <div class='row'>          
            <section  id='section_login' class="small-6 large-centered columns">                      
              <div class="large-12 columns">          
                  <form class="form-signin" id="in" method="post" action="">
                    <fieldset>                    
                          <legend>
                            <label id="title_sigin_s" class="text-center" >
                              <strong class="text-center">
                                FEX
                              </strong>                  
                            </label>
                          </legend>
                        <label class='label_text_form'><strong>Usuario</strong></label>          
                        <input class="form-control" type='email' name='mail' id="mail" placeholder='arithgrey@gmail.com' required>          
                        <br>
                        <label class='label_text_form'><strong>Password</strong></label>          
                        <label class="label">No recuerdo mi contraseña</label>
                        <input class="form-control" type='password' name='pw' id="pw" required>                          
                        <input type='hidden' name='secret' id="secret"> 
                      <button id="inbutton" class='btn btn-lg btn-login btn-block'>Empezar ahora</button>
                      
                      <label class='large-12 columns' id="reportesession"></label>
                      </form>
                    </fieldset>
                
              </div>
            </section>                   
      </div>
    </div>
   
   

 
   <div class="row">    
    <label></label>
      <label id="createnueva" class="small-6 large-centered columns">
        
        <div class="animated infinite bounce">       
          <a href="<?=base_url('index.php/home/signup')?>">
            <strong><img id="img_start" src="<?=base_url('application/img/general/star83.png')?>"> Registra una cuenta </strong>        
          </a>        
        </div>  

      </label>     
   </div> 
 
   











