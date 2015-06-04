$(document).on("ready", function(){

    $( "#enviar" ).click(function() {
           recuperarPassword();
    });

});



function recuperarPassword()
{
    correo = $("#email").val();

    expr= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(expr.test(correo)){

        url = now + "index.php/api/mailrest/recuperarPassword/format/json";

        $.get( url , {"email": correo} )
            .done(function( data ) {
            
                llenaelementoHTML("#divPass" , "Tu contraseña se envió a tu correo electrónico");
                

        })
        .fail(function() {
            alert( "error" );
        });

    }
    else{

        llenaelementoHTML("#divPass" , "Error: La direccion de correo " + correo + " es incorrecta.");
        
    }
       
 }
