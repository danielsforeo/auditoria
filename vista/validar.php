<?php
	include "../controlador/control_usu.php";
	if(isset($_POST["usu"]) || isset($_POST["pass"])){
		if (trim($_POST["usu"]) == "" || trim($_POST["pass"]) == "" /*|| trim($_POST["rol"]) == ""*/) {
			echo "false";
		}
		else{
			$usuarioCon = new ControlUsu();
			$usuario = $_POST["usu"];
			$contrasena = $_POST["pass"];
			//$rol = $_POST["rol"];
			if($usuarioCon->validarUsuario($usuario, $contrasena/*$rol*/)){
				echo "true";
				//echo $_POST["usu"]."<br>";
				//echo $_POST["pass"]."<br>";
			}else{
				echo "false";
			}
		}
	}
	else{
		echo "false";
	}
?>