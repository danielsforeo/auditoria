<?php
	class Conexion{
		function conectar(){
			return mysql_connect("localhost", "root", "");
		}
	}

?>