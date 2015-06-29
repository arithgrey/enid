$(document).on("ready", function(){
	
	$("#username").blur(formvalidationuser);
	$("#useremail").blur(formvalidationemail);
	$("#userpassword").blur(formvalidationpass);	
	$(".button_segistro").click(forgeneralvalidator);
	$("#userpassword_confirm").blur(formvalidationpass);


	responseclient = ["Formato incorrecto, redacte un nombre" , "El nombre al menos debe contener 5 letras" ,
	"Registre un email correcto" , "Las contraseñas son distintas" , "La contraseña almenos debe tener 8 caracteres" ,
	"Complete los campos como se indica" , "Registre el nombre de la empresa" , "Podrá tener su cuenta cuando acepte los terminos y condiciones"];
	/**/
	$("#termiinoscondition").click(function(){

		if ($("#termiinoscondition").val() == 0 ) {
			
			$("#termiinoscondition").val(1);
		}else{

			$("#termiinoscondition").val(0); 
		}
	});
	/**/

	
});


function formvalidationuser(){

	user = $("#username").val();
	if (user.length>4) {

			expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (expr.test(user)) {
				llenaelementoHTML("#repo_section" , responseclient[0]);						
				recorrepage("#nombre_lb");
				return 0;		

			}else{

				return 1;		
			}
		
	}else{
		
		llenaelementoHTML("#repo_section" , responseclient[1]);		
		recorrepage("#nombre_lb");
		return 0;
	}
}
function formvalidationemail(){
	
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		mail = $('#useremail').val();		
		if (!expr.test(mail)) {
			llenaelementoHTML("#repo_section" , responseclient[2]);
			recorrepage("#mail_lb");
			return 0;
		}else{
			llenaelementoHTML("#repo_section" , "");
			return 1;
		}				
}


function formvalidationpass(){

	userpassword =  $("#userpassword").val();
	userpasswordfilitro = userpassword.trim();
	userpassword_confirm = $("#userpassword_confirm").val();	

	$("#section_pw_hiden").show();
		if (userpasswordfilitro.length>7){

				llenaelementoHTML("#repo_section" , "");	
				if (userpassword_confirm == userpassword ){
						llenaelementoHTML("#repo_section" , "");	
						return 1; 				

				}else{

						llenaelementoHTML("#repo_section" , responseclient[3]);	
						return 0; 				
				}			
		}else{

			llenaelementoHTML("#repo_section" , responseclient[4]);
			return 0; 				
		}
}	




function forgeneralvalidator(){

	user = formvalidationuser();
	mail = formvalidationemail();
	pass = formvalidationpass();
	

	flag=0;

	if (user != 1 )
		flag =0;
	else 
		if (mail!=1)
			flag =0;
			else
				if (pass!=1)
					flag=0;
				else
					flag=1;




	
	if (flag==1){
		tryrorecord();			
	}else{
		llenaelementoHTML("#repo_section" , responseclient[5]);
	}						
}

function tryrorecord(){


	user = $("#username").val();
	mail = $('#useremail').val();	
	userpassword =  $("#userpassword").val();
	userpasswordfilitro = userpassword.trim();
	pwpost = ""+CryptoJS.SHA1(userpasswordfilitro);

	empresaname = $("#empresaname").val();

	if (empresaname.length<2) {
	
		llenaelementoHTML("#repo_section" , responseclient[6]);		
	}else{



		if ($("#termiinoscondition").val()  ==  1) {


			/*Registramos el elemento */


				url = $(".now").val()+"index.php/api/usergeneralrest/validaterecordusergeneral/format/json/";		
				$.post(url , { "user" : user , "mail" : mail , "pw" : pwpost , "empresaname" : empresaname })
					.done(function(data){



						responsstatus = data.status;	
						if (responsstatus == "1"){

							llenaelementoHTML("#repo_section" , data.infor);
								$.post(data.redirect_url , { "mail" : data.mail , "secret" : data.secret })
								.done(function(data){

									if (data == 1) {
																	
										next  = $(".now").val() + "index.php/sessioncontroller/presentacion";
										redirect(next);

									}else{
										llenaelementoHTML("#repo_section" , data);
									}
									

								}).fail(function(){
									alert("algo falló acceso al sistema");
								});
						}else{				
							llenaelementoHTML("#repo_section" , data.infor);
						}
					


					}).fail(function(){
						alert("algo falló");
					});





			/*terminamos de registrar */


		}else{

			/*No acepto terminos */
			llenaelementoHTML("#repo_section" , responseclient[7]);
		}




			

	}
	

	

}

