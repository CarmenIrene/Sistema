<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/estilos.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   	<script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>
</head>
<body>
	<div class="container">
		<div class="encabezado">
			<img src="/logoRojo.jpg" alt="">
		</div><!--DIV ENCABEZADO-->

		<div class="menu" style="width: 78%">
			<ul style="background-color: rgb(26,50,86)">
				<li class="menuitem">
					<br>
					<br>
					<br>
					<form method="POST" action="GuardaSesion" >
						@csrf
			       		<label>Clave Unica: </label>
						<input type="text" placeholder="Clave" name="clave"><br>
						<br>
	                	<label>Password: </label>
	                	<input type="password" name="contrasena">
	                	<br>
	                	<br>
	                	<br>
			    		<input class="btn btn-primary" type="submit" name="Agregar" value="Iniciar">
        	 		</form>

				</li>
			</ul>
		</div><!--DIV MENU-->
	</div><!--DIV CONTAINER-->	
</body>
</html>