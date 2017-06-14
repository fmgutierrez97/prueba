<!DOCTYPE html>
<html lang="es" class="bg-black">
<head>
	<meta charset="UTF-8">
	<title>Registro de Usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css/AdminLTE.css" type="text/css" />
</head>
<body class="bg-black">
	<div class="form-box" id="login-box">
		<div class="header">Registro de usuarios</div>
		<form action="RegistrarUsuarios.php" method="post">
			<div class="body bg-gray">
				<div class="form-group">
					<input type="text" name="name" required="" class="form-control" placeholder="Nombre Completo"/> 
				</div>
				<div class="form-group">
					<input type="text" name="email" required="" class="form-control" placeholder="Email"/>
				</div>
			</div>
			<div class="footer">
				<button id="BtnRegistrar" type="submit" class="btn bg-olive btn-block">Enviar</button>
			</div>
		</form>
	</div>
	
	<script src="js/jquery-ui-1.10.3.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
</body>

</html>