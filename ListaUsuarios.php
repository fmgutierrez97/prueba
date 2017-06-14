<?php 

include('configuracion/conexion.php');
$con=conectar();

$Usuarios = "SELECT * FROM Usuarios ";
$res_Usuarios = mysql_query($Usuarios);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de usuarios </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css/AdminLTE.css" type="text/css" />

</head>
<body>
	<h1 align="center">Usuarios registrados</h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="box-body table-responsive no-padding">
					<table class="table">
						<tbody>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Estado</th>
							</tr>
						<?php 
							$cont = 1;
							while ($row_Usuario = mysql_fetch_assoc($res_Usuarios)) {
							?>
								<tr>
									<td><?php echo $cont; ?></td>
									<td><?php echo $row_Usuario['Nombre'] ?></td>
									<td><?php echo $row_Usuario['Email'] ?></td>
									<td><?php if (!strcmp($row_Usuario['Estado'], '1')){ ?><i style="color: green" class="fa fa-check-circle fa-2x"></i><?php }else{ ?> <i style="color: red" class="fa fa-times fa-2x"></i><?php
									} ?></td>
								</tr>

							<?php
								$cont = $cont + 1;
							}
						?>
						</tbody>
					</table>
				</div>				
			</div>			
		</div>		
	</div>

	<script src="js/jquery-ui-1.10.3.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

</body>
</html>