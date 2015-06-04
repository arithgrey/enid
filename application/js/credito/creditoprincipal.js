$(document).on("ready", function(){

	$("footer").ready(cargarcreditobyempresa);
});


function cargarcreditobyempresa(){

	url  = now + "index.php/api/creditorest/listinfocreditobyempresa/format/json/";

	$.get(url).done(function(data){

		

		l ="<select class='form-control' >"; 		
		for(var x  in data){

			idcredito =  data[x].idarchivo;
			nombrecredito = data[x].nombre;
			l+="<option value='"+idcredito+"'> "+nombrecredito+"</option>";
		}
		l +="</select>";
		llenaelementoHTML("#creditosolicitado" , l);


	}).fail(function(){
		alert("fail");
	});
}