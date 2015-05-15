$(document).ready(ini);
function ini(){
	$("#b_registrar").click(enviarDatos);
	$("#btn_validar").click(validar);
}	
/*function enviarDatos(){
	var usuario = $("#usuario").val();
	var pasword = $("#pass").val();
	$.ajax({
		url:"insertar.php",
		success:function(result){
			if(result.trim() == "true"){
				$("#resultado").html("siiiii se púedo registrar el usuario");
			}else{
				$("#resultado").html("no se púedo registrar el usuario");
			}
			console.log(result);
		},
		data:{
			usu:usuario,
			pass:pasword
		},
		type:"POST"
	});


}*/
function validar(){
	var usuario = $("#usuario").val();
	var pasword = $("#pass").val();
	$.ajax({
		url:"validar.php",
		success:function(result){
			if(result.trim() == "true"){
				$("#resultado").html("<div style='background:green'>acceso correcto</div>");
			}else{
				$("#resultado").html("<div style='background:red'>no se encuentra el usuario</div>");
			}
			console.log(result);
		},
		data:{
			usu:usuario,
			pass:pasword
		},
		type:"POST"
	});


}
function enviarDatos(){
	var nombre = $("#nom").val();
	var direccion = $("#dir").val();
	var telefono = $("#tel").val();
	var correo = $("#cor").val();
	var rol =  1;
	var estado =  1;
	var usuario = $("#usu").val();
	var clave = $("#pass").val();

	$.ajax({
		url:"registrar.php",
		success:function(result){
			if(result.trim() == "true"){
				$("#resultado").html("siiiii se púedo registrar el usuario");
			}else{
				$("#resultado").html("no se púedo registrar el usuario");
			}
			console.log(result);
		},
		data:{
			nom:nombre,
			dir:direccion,
			tel:telefono,
			cor:correo,
			ro:rol,
			est:estado,
			user:usuario,
			pass:clave
		},
		type:"POST"
	});
} 