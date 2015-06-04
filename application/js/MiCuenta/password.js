$(document).on("ready", function(){

	$("#botoncito").click(function(){
		trychange();
		$( "#botoncito" ).blur(trychange);
	});
});



function trychange(){
	a = $("#anteriorP").val();
	b = $("#nuevoP").val();
	c = $("#verificaP").val();

	anterior = "" +CryptoJS.SHA1(a);
	nuevo = "" +CryptoJS.SHA1(b);
	confirma = "" +CryptoJS.SHA1(c);

	if((a == null || a == "")||(b == null || b == "")||(c == null || c == ""))
	{
		$( "#alertaError" ).show();
		llenaelementoHTML("#alertaError" , "<strong>¡OH NO!</strong><br>No se permite campos vacios...");
	}
	else
	{
		url = now + "index.php/api/cambiopasswordcontrolador/actualizarPassword/format/json";
		$.post( url, { "nuevo": nuevo, "anterior": anterior, "confirma": confirma })
	 		.done(function( data ) {
	 			if (data == true)
	 			{
	 				$( "#alertaError" ).hide();
	 				$( "#alertaExito" ).show();
	 				llenaelementoHTML("#alertaExito" , "<strong>¡CONTRASEÑA CAMBIADA!</strong><br>Espere por favor, se reiniciara sesion en 5 segundos....<br>Ingrese con su nueva contraseña...");
    				setTimeout ("redireccionar()", 5000);
    			}
	 			else
	 			{
	 				$( "#alertaError" ).show();
    				llenaelementoHTML("#alertaError" , data);
	 			}
    			//alert(data);
		  	})
		 	.fail(function() {
		 		$( "#alertaError" ).show();
    			llenaelementoHTML("#alertaError" , "error" );
		    	//alert( "error" );
			});	
	}

	



	//url = now + "index.php/api/cambiopasswordcontrolador/mostrarPassword/format/json";
	
	//llenaelementoHTML("#etiquetaNombre" , anterior + "<br>" + nuevo + "<br>" + confirma + "<br>");

}
function redireccionar() 
{
	location.href=now + "index.php/sessioncontroller/logout";
} 
