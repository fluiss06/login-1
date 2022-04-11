<?php

	$conexion = mysqli("localhost", "root", "", "login_register_db");
	

	if($conexion){
		echo 'conectado a la base de datos';
	}
	else{
		echo "no conectado a la base de datos";
	}

?>