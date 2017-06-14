<!DOCTYPE html>
<html lang="es" class="bg-black">
	<head>
		<meta charset="UTF-8">
		<title>Usuario Registrado</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
		<link rel="stylesheet" href="css/AdminLTE.css" type="text/css" />
	</head>

	<body class="bg-black">

		 <div class="form-box" id="login-box">
		 	<div class="header">Usuario Registrado</div>
		 	<div class="body bg-gray" align="center">
		 		<h2>Felicitaciones te haz registrado correctamente</h2>
		 	</div>

		 	<div class="footer">

		 		<a href="tcpdf/generador/FichaAcreditacion.php?email=<?php echo $_GET['email']."&nombre=". $_GET['nombre'];?>"><button class="btn btn-success btn-block"><b>Descargar ficha de acreditacion</b></button>
		 		</a>
				
				<hr>
				<a href="index.php">Registrar otro usuario</a>
				<br>
				<a href="ListaUsuarios.php">Ver inscritos</a>

		 	</div>
		 	
		 </div>

		<script src="js/jquery-ui-1.10.3.js"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>

	</body>
</html>