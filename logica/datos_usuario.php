<?php
	include "conexion.php";
	include "../entidad/usuario.php";
	session_start();
	class DatosUsuario{
		function validar($usu, $pass/*,rol*/){
			$con =  new Conexion();
			$con = $con->conectar();

			$user = new Usuario();
			$user->usuario = $usu;
			$user->contrasena = $pass;

			mysql_select_db("audisoft", $con);
			$sql = "SELECT * FROM usuario WHERE nick='".$user->usuario."' and clave='".$user->contrasena."'";/*"' and clave='".$user->contrasena."'"*/
			$consulta = mysql_query($sql, $con);
			$fila = mysql_fetch_array($consulta);
			if ($fila>0) {
				if($fila["nick"] == $user->usuario && $fila["clave"] == $user->contrasena){
					/*$_SESSION['id_usuario'] =$fila["id"];
					$_SESSION['usuario'] =$fila["nick"];
					$_SESSION['clave'] =$fila["clave"];
					$_SESSION['rol'] =$fila["rol"];
					echo "usuario: ".$_SESSION['usuario']."clave: ".$_SESSION['clave']."id: ".$_SESSION['id_usuario']." rol= ".$_SESSION['rol'];
					*/return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		function registrarUsuario($nom, $dir, $tel, $cor, $rol, $estado, $usu, $pass){
			$con =  new Conexion();
			$con = $con->conectar();
			$user1 = new Usuario();

			$user1->setNombre($nom);
			$user1->setDireccion($dir);
			$user1->setTelefono($tel);
			$user1->setCorreo($cor);
			$user1->setRol($rol);
			$user1->setEstado($estado);
			$user1->setUsuario($usu);
			$user1->setContrasena($pass);

			mysql_select_db("audisoft", $con);
			$sql = "INSERT INTO usuario(nombre, direccion, telefono, correo, rol, estado, nick, clave) VALUES(
				'".$user1->nombre."',
				'".$user1->direccion."',
				".$user1->telefono.",
				'".$user1->correo."', 
				".$user1->rol.", 
				".$user1->estado.", 
				'".$user1->usuario."',   
				'".$user1->contrasena."'
				)";
			if(mysql_query($sql, $con)){
				return true;
			}else{
				return false;
			}
			mysql_close($con);
			/*$sql = "INSERT INTO usuario(nombre, direccion, telefono, correo, rol, estado, nick, clave) VALUES(
				'".$user1->getNombre()."',
				'".$user1->getDireccion()."',
				".$user1->getTelefono().",
				'".$user1->getCorreo()."', 
				".$user1->getRol().", 
				".$user1->getEstado().", 
				'".$user1->getUsuario()."',   
				'".$user1->getContrasena()."'
				)";*/
		}
	}

	//$dts = new DatosUsuario();
	//$dts = $dts->validar("libardo", "12345");
?> 