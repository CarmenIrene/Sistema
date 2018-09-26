<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="encabezado">
			<img src="/logoUniversidad.jpg" alt="">
		</div><!--DIV ENCABEZADO-->
		<div class="imagen">
			<img src="/inicioSesion.jpg" alt="">
		</div>
		<div class="datos">
			<p>SISTEMA DE CONTROL DE PRACTICAS PROFESIONALES</p>
			<br><br>
			<form method="POST" action="/GuardaIngreso">
				<input type="text" placeholder="Clave">
				<br><br>
				<input type="text" placeholder="Contraseña" name="contrasena">
				<br><br>
				<input type="button" name="Entrar" value="Entrar">
			</form>
		</div>
		<div class="piePagina">
			<p class="texto">Facultad de Ingeniería, UASLP <br>
			Dr. Manuel Nava # 8, Zona Universitaria poniente <br>
			   Tels. (444) 826.2330 al 2339
			</p>
			<p class="pagina">http://ingenieria.uaslp.mx</p>

		</div>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</div>
</body>

</html>