$(document).on("ready", function(){

    $( "#Suscribirse" ).click(suscripcionNL);

});

 function suscripcionNL()
{
    //alert($("#newsletterForm").serialize());
    miemail =  $("#newsletterEmail").val();    

    if (valEmail( miemail) ==  true) {

    url = now + "index.php/api/newslettercontrolador/registrarCorreo/format/json";

    $.post( url, $("#newsletterForm").serialize() )
        .done(function( data ) {
            if (data == true)
                {
                    llenaelementoHTML("#etiquetaA" , "<strong>Exito!</strong> <br> Usted se ha sido añadido a nuestra lista de correo electrónico.");
                }else{
                     llenaelementoHTML("#etiquetaA" , "<strong>¡UPS!</strong> <br> Algo ocurrió reporte al adnimistrador. no se pudo registrar su correo");
                }   
        })
    .fail(function() {
        llenaelementoHTML("#etiquetaA" , "<strong>¡UPS!</strong> <br> Algo ocurrió reporte al adnimistrador.");
    });

    }else{
           llenaelementoHTML("#etiquetaA" , "<strong>¡UPS!</strong> <br>registre un correo electronico correcto"); 
    }
    return false;
 }

