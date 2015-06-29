

<div id="formulario_reg_section">
<div class='row'>      
  <div class="">
<fieldset>
  
        <div class="large-12 columns">          
        <form action='' method='POST'>
        <div class="row">
          <div class="large-12 columns" >                
                <label class="large-12 columns "><img src="<?=base_url('application/img/general/business133.png')?>"> Nombre(s) </label>                                           
                <input type='text' name='nombre' placeholder='Jonathan' required class="large-12 columns">                
           </div>               
          </div>
        </div>    

        <div class="row">
          <div class="large-12 columns">
                   <div class="large-6 columns" >              
                        <label class="large-12 columns">Apellido paterno</label>            
                        <input class="large-12 columns" type='text' name='primer_apellido' placeholder='Medrano'>              
                    </div>          
                    <div class="large-6 columns" >              
                        <label class="large-12 columns">Apellido Materno</label>
                        <input class="large-12 columns" type='text' name='segundo_apellido' placeholder='Salazar' >        
                    </div>  
          </div>          
        </div>  


        <div class="row">
          <div class="large-12 columns"> 
            <div class="large-6 columns"> 
                <label class="large-12 columns"><img src="<?=base_url('application/img/general/email131.png')?>">  Email</label>
                <input type='text' name='correo' placeholder='arithgrey@gmail.com' required class="large-12 columns">
            </div>
            <div class="large-6 columns"> 

                  <label class="large-12">Edad</label>      
                  <span id="sliderOutput" class="large-12 columns"></span>                
                  <div class="range-slider" data-slider data-options="display_selector: #sliderOutput;">
                    <span class="range-slider-handle"></span>
                    <span class="range-slider-active-segment "></span>
                    <input type="hidden" name='Edad'>
                  </div>                  
            </div> 
          </div>
        </div>




      <div class="row">
         <div class="large-12 columns" >            
                  <div class="large-3 columns" >            
                    <label class="large-12 columns"><img src="<?=base_url('application/img/general/password13.png')?>">  Password:</label>            
                  </div> 
                  <div class="large-9 columns" >            
                    <span class="label">  Ejemplo s3c3tPaSsW0Rd.1</span>
                    <input type='password' name='pw'required class="large-12 columns">
                  </div> 
         </div>               
      </div>

        <div class="row">
          <div class="large-12 columns" >            
            <div class="large-3 columns" >            
              <label class="large-12 columns"> <img src="<?=base_url('application/img/general/password13.png')?>">Confirmación</label>
            </div>  
            <div class="large-9 columns" >            
              <input type='password' name='pw_c'required class="large-12 columns">          
            </div>    
          </div>  
        </div>


        <div class="row">
          <div class="large-10 columns" >
            <label>
          Al hacer clic en "Regístrate", 
          usted acepta nuestros Términos de servicio 
          y la política de privacidad. </label>

          </div>
          <div class="large-2 columns" >            
            <div class="switch">
            <input id="exampleCheckboxSwitch" type="checkbox" name='acuerdo'>
            <label for="exampleCheckboxSwitch"></label>
          </div>  
        </div>
      </div>  
  <button type='submit'>&raquo; Registrar &raquo;</button>
    </form>
  </div>
  </fieldset>  
</div>
</div>
</div>

        
          
              
              
              
              
              
          
