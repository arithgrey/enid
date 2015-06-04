$(document).on("ready", function(){

    mostrarDescripcion(); 
    
});


function mostrarDescripcion()
{
    subido = $( "#divDocumento" ).val();

    url = now + "index.php/api/uploadcontrolador/datos/format/json";

    $.get( url )
        .done(function( data ) {
            
            llenaelementoHTML("#documento" , select);
        })
    .fail(function() {
        //alert( "error, no mostrara nada" );
    });
}