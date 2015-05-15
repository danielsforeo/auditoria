<?php
	class Usuario{
		public $id,
			   $nombre,
			   $direccion,
			   $telefono,
			   $correo,
			   $rol,
			   $estado,
			   $usuario,
			   $contrasena;
		function getId(){return $this->$id;}
		function setId($id){$this->id = $id;}
		function getNombre(){return $this->$nombre;}
		function setNombre($nombre){$this->nombre=$nombre;}
		function getDireccion(){return $this->$direccion;}
		function setDireccion($direccion){$this->direccion=$direccion;}
		function getTelefono(){return $this->$telefono;}
		function setTelefono($telefono){$this->telefono = $telefono;}
		function getCorreo(){return $this->$correo;}
		function setCorreo($correo){$this->correo = $correo;}
		function getRol(){return $this->$rol;}
		function setRol($rol){$this->rol = $rol;}
		function getEstado(){return $this->$estado;}
		function setEstado($estado){$this->estado = $estado;}
		function getUsuario(){return $this->$usuario;}
		function setUsuario($usuario){$this->usuario = $usuario;}
		function getContrasena(){return $this->$contrasena;}
		function setContrasena($contrasena){$this->contrasena = $contrasena;}
	}
?>