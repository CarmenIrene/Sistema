<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Alumno</title>
</head>
<body>
	<div class="container">
    	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
	        <div class="modal-dialog">
    	    	<div class="modal-content">
    	    	   <div class="modal-header">
                      <h3>Requisitos para Realizar Prácticas Profesionales</h3>
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    	       </div>
    		       <div class="modal-body">
					<form method="POST" action="/GuardaAlumno">
						@csrf
			       		<label>Clave Alumno: </label>
						<input type="text" placeholder="Clave" name="clave" required="required">
						<br>	
			       		<label>Nombre Alumno: </label>
						<input type="text" placeholder="Nombre" name="nombre" required="required">
						<br>
			       		<label>Contraseña: </label>
						<input type="text" placeholder="Contraseña" name="contrasena" required="required"><br><br>
						<br>      	      	
						<label>Carrera:</label>
						<input type="text" placeholder="Carrera" name="carrera" required="required">
						<br>
						<label>Nombre Asesor:</label>
						<input type="text" name="asesor" required="required">
						<br>
			        	<label>Clave Ingenieria: </label>
			        	<input type="text" name="claveIngenieria" required="required">
						<br>
			        	<label>Ciclo Escolar: </label>
			        	<input type="text" name="cicloEscolar" required="required">
						<br>
			        	<label>Semestre: </label>
			        	<input type="text" name="semestre" required="required">
			        	<br>
			        	<label>Condicion: </label>
			        	<input type="text" name="condicion" required="required">
			        	<br>
			        	<label>Situacion: </label>
			        	<input type="text" name="situacion" required="required">
						<br>
			    		<div class="modal-footer">
			        		<a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
			        		<input class="btn btn-primary" type="submit" name="Agregar" value="Agregar">
				 		</div>
					</form>
		    	   </div>
        		   <div class="modal-footer">
			          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
	        	   </div>
      			</div>
   			</div>
		</div><!--DIV MODAL-->	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</div>
</body>
</html>