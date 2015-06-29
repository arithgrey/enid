
<script type="text/javascript">
	
	$(document).on("ready" , function(){

		$("footer").ready(mycuestionario);
	});


	function mycuestionario(){

			
			url = now + "index.php/api/archivorest/getcuestionario/format/json/";
			$.get(url , $("#documentacion").serialize() ).done(function(data){

				lista = "<table class='table'><thead><th>#</th><th>Pregunta solicitada</th></thead>";		

				for(var x in data){

					idpregunta = data[x].idpregunta;
					pregunta =  data[x].pregunta;
					lista+= "<tr><td>"+idpregunta+"</td><td>"+pregunta+"</td></tr>";

				}
				lista +="</table>";
				llenaelementoHTML("#cuestionarioefectivo" , lista);	
			}).fail(function(){
				alert("Error");
			});
	}
</script>

<div class='row'>

<div class='col-sm-10'>
	<div id="cuestionarioefectivo">
</div>

	</div>
	<form method='post' id="documentacion">
		<input type='hidden' id='iddocumentosolicitado' name='midocumento' value="<?=$documentosolicitado;?>">
	</form>
</div>

