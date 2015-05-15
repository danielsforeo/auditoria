<?php
	include "../logica/datos_usuario.php";
	class ControlUsu{
		function registrarUsuario($nom, $dir, $tel, $cor, $rol, $estado, $usu, $pass){
			$obj = new DatosUsuario();
			return $obj->registrarUsuario($nom, $dir, $tel, $cor, $rol, $estado, $usu, $pass);
		}
		function validarUsuario($usu, $pass/*, $rol*/){
			$obj = new DatosUsuario();
			return $obj->validar($usu, $pass/*, $rol*/);
		}
	}
?> 