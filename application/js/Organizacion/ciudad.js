$(document).on("ready", function(){

    mostrarCiudad(); 
    
});


function mostrarCiudad()
{
    nuevoIdCiudad = $( "#sCiudad" ).val();

    url = now + "index.php/api/organizacioncontrolador/mostrarCiudades/format/json";

    $.get( url )
        .done(function( data ) {
            select = "<select style='direction:ltr' id='sCiudad' name='ciudad'>";

            for(var x in data.listar_todos )
            {
                idCiudad= data.listar_todos[x].idCountry;
                ciudad = data.listar_todos[x].countryName;

                select+="<option id='oCiudad' value= '"+idCiudad+"'>"+ciudad+"</option>";
            }
            //alert(data.listar_uno[0].idCountry);
            select+= "</select>";

            uno = data.listar_uno[0].idCountry;
        
            llenaelementoHTML("#divCiudad" , select);

            $( "#sCiudad" ).change(actualizarCiudad);

            $("#sCiudad > option[value='"+uno+"']").attr('selected', 'selected');

        })
    .fail(function() {
        alert( "error, no listara nada" );
    });
}
function actualizarCiudad()
{
    nuevoIdCiudad = $( "#sCiudad" ).val();

    nuevaCiudad = $("sCiudad").text();

    otro = $("sCiudad").val(nuevaCiudad);

    llenaelementoHTML("#country" , nuevoIdCiudad);

    url = now + "index.php/api/organizacioncontrolador/actualizarCiudades/format/json";

    $.post( url, { "nuevo": nuevoIdCiudad })
        .done(function( data ) {

            for(var x in data )
            {   
                idCiudad= data[x].idCountry;
                if(nuevoIdCiudad == idCiudad)
                {   
                    ciudad = data[x].countryName; 
                    if(otro = ciudad){
                        llenaelementoHTML("#texto" , ciudad);

                    }
                }
                                   
            }   

            //alert("La ciudad fue actualizada correctamente...");
            
            //mostrar1Ciudad();

        })
        .fail(function() {
            alert( "error No mostrara nada" );
        });

}
function mostrar1Ciudad(){
    nuevoIdCiudad = $( "#sCiudad" ).val();

    
    url = now + "index.php/api/organizacioncontrolador/mostrar1Ciudad/format/json";

    $.get( url, { "nuevo": nuevoIdCiudad } )
        .done(function( data ) {
            
            

    })
    .fail(function() {
        alert( "error No mostrara nada" );
    });
}