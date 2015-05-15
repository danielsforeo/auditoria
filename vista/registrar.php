<?php
	include "../controlador/control_usu.php";
	$nomb=trim($_POST["nom"]);
		$dire=trim($_POST["dir"]);
		$tele=trim($_POST["tel"]);
		$corr=trim($_POST["cor"]);
		$rol = trim($_POST["ro"]);
		$estado = trim($_POST["est"]);
		$usua=trim($_POST["user"]);
		$clave=trim($_POST["pass"]);
		$usuarioCon = new ControlUsu();
		if($usuarioCon->registrarUsuario($nomb, $dire, $tele, $corr, $rol, $estado, $usua, $clave)){
			echo "true";
		}else{
			echo "false";
		}
	/*if(isset($_POST["nom"]) || isset($_POST["dir"]) || isset($_POST["tel"]) || isset($_POST["cor"]) || isset($_POST["ro"] || isset($_POST["est"] || isset($_POST["user"])  || isset($_POST["pass"])){
		

	}else{
		echo "false";
	}*/
?>