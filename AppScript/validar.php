<?php 
include_once('../configuracion/conexion.php');
	$con=conectar();

	$Email = $_POST['Email'];

	$Consulta = "SELECT IdUsuario, Nombre FROM Usuario WHERE Email = '$Email'";
	$res_Consulta = mysql_query($Consulta);
	$row_Consulta = mysql_fetch_assoc($res_Consulta);

	if (!is_null($row_Consulta['IdUsuario'])) {

		$data = array('Rpta' => 1 ,'Nombre' => $row_Consulta['Nombre'] );

		print(json_encode($data));

		$Validado = "UPDATE Usuarios SET Estado = 1 WHERE Email = '$Email'";
		mysql_query($Validado);
	}else{
		$data = array('Rpta' => 0);
		print(json_encode($data));

	}



 ?>