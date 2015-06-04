
<script type="text/javascript" src="<?= base_url('application/js/sha1.js')?>"></script>
<script type="text/javascript" src="<?= base_url('application/js/MiCuenta/principal.js')?>"></script>
<script type="text/javascript" src="<?= base_url('application/js/MiCuenta/password.js')?>"></script>
<style type="text/css">

    #nomPersona:hover{
        font-size: 1.2em;
        cursor:pointer;
    }
    #designation:hover{
        font-size: 1.1em;
        cursor:pointer;
    }
    #texto:hover{
        font-size: 1.1em;
        cursor:pointer;
        /*color:yellow;*/
    }
    .oculto{
        display: none;
        width: 200px;
    }
    #ocultoTA1{
        display: none;
    }
    #ocultoTA2{
        display: none;
    }
    #alertaError{
        display: none;
        color: red;
    }
    #alertaExito{
        display: none;
        color: #00FF00;
    }
    .error{
        background-color: #eaeaec;
    } 
    .panel-title, .collapsed {
        color: white;
    }
    .page-header{
        display: none;
    }
    /*Fin Estilo para el html*/  
</style>
</style>

<br>

           <div class="row">
                <div class ="col-md-10">

                <div class="col-md-4">
                   




<!---inicia -->
            <!--collapse start-->
                    <div class="panel-group " id="accordion">
                        
                        
                        <div class="panel blue-box twt-info">
                            <!-- Inicio Panel Cambio de Contraseña-->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Seguridad
                                    </a>
                                </h4>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!--collapse end-->
                
 

<!---termina -->













                </div>
                <div class="col-md-8">






<div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">



                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Cambio de contraseña  
                                </div>
                                
                            </div>
                                                        




                                <div class="panel-body">
                                    
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <center>


<div class="input-group">

    <span class="input-group-addon">   
        <label for="inputPassword1" class="control-label">
             Contraseña Anterior
        </label>
    </span>
    <input type="password" class="form-control" id="anteriorP" placeholder="Anterior">
    
</div>

<div class="input-group">
<span class="input-group-addon">   
       <label for="inputPassword1" class="control-label">
         Contraseña Nueva
        </label>
</span>

    <input type="password" class="form-control" id="nuevoP" placeholder="Nuevo">

</div>                                                   
                                                     


<div class="input-group">
<span class="input-group-addon">   
       
        <label for="inputPassword1" class="control-label">
            Verifica Contraseña Nueva
         </label>
</span>


    <input type="password" class="form-control" id="verificaP" placeholder="Verifica">
                                              
</div>                                                    
                                                   
                                                    
                                                                                                       
                                                    <br>
                                                    <button class="btn btn-primary pull-right" type="button" id = "botoncito">
                                                        Cambiar
                                                    </button>
                                                    
                                                    <div class="alert alert-block alert-danger fade in" id ="alertaError">                                                        
                                                    </div>
                                                    <div class="alert alert-success alert-block fade in" id ="alertaExito">                                                        
                                                    </div>
                                                </center>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Fin Apartado Cambio De Contraseña -->
                                </div>
                            </div>











                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="profile-desk">
                                        <h1 id="nomPersona"></h1>
                                        <center>
                                        <input class="oculto" type="text" />
                                        </center>
                                        </div>
                                        <span id="designation"></span>
                                        <BR>
                                        <textarea rows="5" cols="50" id="ocultoTA1" type="text"></textarea>
                                        <p id="texto"></p>
                                        
                                        <textarea rows="5" cols="50" id="ocultoTA2" type="text">
                                        </textarea>

                                        <ul class="p-social-link pull-right">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        



                    </div>
                    
                            
                        </div>
                    </div>
                </div>  
                  








<!---->












