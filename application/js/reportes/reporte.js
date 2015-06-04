$(document).on("ready", function(){

    $( "#Enviar" ).click(reporte);

});

 function reporte()
{
    contenido = $("#reporteForm").serialize();

    url = now + "index.php/api/reporterest/obteniendoDatos/format/json";

    $.post( url, contenido )
        .done(function( data ) {
            if (data == true)
                {
            llenaelementoHTML("#etiquetaA" , "<strong>¡Exito!</strong> <br> Su reporte fue enviado, se solucionara a la brevedad...");
                }
        })
    .fail(function() {
        llenaelementoHTML("#etiquetaA" , "<strong>¡UPS!</strong> <br> Ingrese un correo electrónico valido.");
    });

    return false;
 }