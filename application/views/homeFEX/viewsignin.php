<script type="text/javascript" src="<?=base_url()?>application/js/sha1.js"></script>
<script type="text/javascript" src="<?=base_url()?>application/js/session/startsession.js"></script>
<style type="text/css">

#section_white{
	background: white;
}
</style>	



<div id='section_white'>
	<form id="form_siginin" class="form-signin" METHOD="POST" >
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Tu cuenta fex</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" name='usuario' class="form-control" placeholder="Usuario" autofocus>
            <input type="password" name='secret' id='secret' class="form-control" placeholder="Password">
            <input type='hidden' name='secretpassword' id="secretpassword"> 
            <button id="iniciar_session" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check">Iniciar ahora</i>
            </button>
            <div class="registration">
                Not a member yet?
                <a  href="<?=base_url()?>index.php/home/signup">
                    Crear cuenta
                </a>
            </div>
            
        </div>


        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
    </form>
</div>