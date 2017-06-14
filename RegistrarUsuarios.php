<?php 
	/* INCLUIR LA CONEXION A LA BASE DE DATOS */
	include_once('configuracion/conexion.php');
	$con=conectar();

	
	/* INCLUIR LIBRERIA PARA CODIGOS QR */
	include_once('lib/phpqrcode/qrlib.php');

	$Nombre = $_POST["name"];
	$Email	= $_POST["email"];

	$filename = "QRUsuarios/".$Email.".png";
	$tamCodeQR = 10;
	$CorrectionError = "L"; // M Q (H MEJOR)
	
		QRcode::png($Email, $filename, $CorrectionError, $tamCodeQR, 2);

	$UsuarioNuevo = "INSERT INTO usuarios (Nombre, Email) values ('$Nombre', '$Email')";
	mysql_query($UsuarioNuevo);

	header("Location:UsuarioRegistrado.php?email=".$Email. "&nombre=".$Nombre);

 ?> 