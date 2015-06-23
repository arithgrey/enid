$(document).on("ready", function(){
	
	$("footer").ready(getRepo);

});



function getRepo(){
	URL = now + "index.php/api/repororestcontroller/getReportegeneral/format/json/"; 

	$.get(URL).done(function(data){
				

				numeroMorales = data.numeropersonamoral;
				numeroFisicas = data.numeropersonasfisicas;
				total = data.totalclientes;
				alertasMorales = data.numeroalertasmorales;	
				alertasFisicas = data.numeroalertasfisicas;
				totalAlertas = data.TotalAlertas;
				expedientesMorales = data.ExpedientesPersonasMorales;
				expedientesFisicos = data.ExpedientesPersonasFisicas;
				totalExpedientes = data.TotalExpedientes;

				llenaelementoHTML( "#personasMorales", numeroMorales );
				llenaelementoHTML( "#personasFisicas", numeroFisicas );
				llenaelementoHTML( "#numeroclientes", total );
				llenaelementoHTML( "#alertasMorales", alertasMorales );
				llenaelementoHTML( "#alertasFisicas", alertasFisicas );
				llenaelementoHTML( "#numeroAlertas", totalAlertas );
				llenaelementoHTML( "#expedientesMorales", expedientesMorales );
				llenaelementoHTML( "#expedientesFisicas", expedientesFisicos );
				llenaelementoHTML( "#totalExpedientes", totalExpedientes );
				

				getGraph(numeroMorales , numeroFisicas , total, alertasMorales , alertasFisicas, totalAlertas, expedientesMorales , expedientesFisicos , totalExpedientes );


		}).fail(function(){

			alert("error al cargar cantidad de personas morales");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});

}/*Termina la función */


function getGraph(numeroMorales , numeroFisicas , total, alertasMorales , alertasFisicas, totalAlertas, expedientesMorales , expedientesFisicos , totalExpedientes ){


	graph ="<section class='panel'><div class='panel-body'>";
	graph +="<div style='position: relative;' id='graph-bar'><svg style='overflow: hidden; position: relative; top: -0.75px;'  xmlns='' width='1203' version='1.1' height='342'>"; 
	graph +="<desc></desc><defs></defs>";
	graph +="<rect  fill='#788ba0'  height='"+numeroMorales+10 +"' width='15' y='-200' x='0'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+numeroFisicas+10+"' width='15' y='-200' x='25'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+total+10+"' width='15' y='-200' x='50'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+alertasMorales+10+"' width='15' y='-200' x='75'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+alertasFisicas+10+"' width='15' y='-200' x='100'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+totalAlertas+10+"' width='15' y='-200' x='125'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+expedientesMorales+10+"' width='15' y='-200' x='150'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+expedientesFisicos+10+"' width='15' y='-200' x='175'></rect>";
	graph +="<rect fill='#6dc5a3' ry='0' rx='0' r='0' height='"+totalExpedientes+10+"' width='15' y='-200' x='200'></rect>";
		
	 
	 

	graph +="</div></div></div></section>";
	llenaelementoHTML("#newgraph" , graph);
	
}
/**********************************************************************************************/
