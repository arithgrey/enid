$(document).on("ready" , function(){

	$("#free").click(showsectionfree);
	$("#basico").click(showsectionbasic);
	$("#profesional").click(showsectionprofesional);
	$("#exampleCheckboxSwitch").click(defineplan);
});

/*Define plan*/
function defineplan(){
	
	url = $(".now").val()+"index.php/api/perfilrestcontroller/estableceperfil/format/json/";
		$.post( url , $("#formusuarioeleccion").serialize()).done(function(data){
			
			if (data == true) {

				next =$(".now").val();
				redirect(next );
			}else{
				alert("Error al definir el perfil en el modelo o el controlador");
			}

		}).fail(function(){
			alert("Error al definir perfil");
		});
}
/*Oculta secciones menos la básica*/
function showsectionbasic(){

	$("#section_free").hide();
	$("#section_basico").show();
	$("#section_profesional").hide();
}
/*Oculta secciones menos la free*/
function showsectionfree(){

	$("#section_free").show();
	$("#section_basico").hide();
	$("#section_profesional").hide();
	
}
/*Oculta secciones menos la profesional*/
function showsectionprofesional(){
	$("#section_free").hide();
	$("#section_basico").hide();
	$("#section_profesional").show();
}