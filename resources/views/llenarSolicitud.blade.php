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
    <!--DIV de los datos generales del alumno-->
   		 <div class="datosGenerales" >
     
      		<table>
       			 <tr>
          			<td>
            			<img src="usuario.png" height="120" border="1">
          			</td>
       			</tr>
       
     	 	</table>
    	</div>

   		 <div class="menu">
     		 <ul>
        		<li class="menuitem">
          			<a href="#">Registro</a>
          			<ul class="submenuRegistro">
            		<li><a href="/llenarSolicitud"></a>Llenar Solicitud</li>   
          			</ul>
       			 </li>
      		</ul>

      <!--DIV PARA EL LLENADO DE LA SOLICITUD-->
      		<div class="titulo">
      			<p>SOLICITUD DE PRÁCTICAS PROFESIONALES</p>
     		 </div><!--DIV titulo-->
      		<div class="tituloDatosAlumno ">
     			<p>Datos del Alumno </p>
     			<!--DIV que contiene los datos que se le piden al alumno-->
      		<div class="Alumno">
      			<div class="row"><!--DIV row1-->
                    <div class="col-3 colum1 -sm" >
            			<p>Tipo de Prácticas :</p>
                    </div>
                    <div class="col-5 -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		 </div><!--DIV row1-->

           		<div class="row"><!--DIV row2-->
                    <div class="col-3 colum1 -sm" >
            			<p>Horario :</p>
                    </div>
                    <div class="col-2 hora -sm">
                         <p>Hora de entrada :</p>
                    </div>
                     <div class="col-2 horainput -sm ">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                    <div class="col-2 hora -sm">
                         <p>Hora de salida :</p>
                    </div>
                     <div class="col-2 horainput -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row2-->

           		<div class="row"><!--DIV row3-->
                    <div class="col-2 colum1 -sm" >
            			<p>Período :</p>
                    </div>
                    <div class="col-2 fecha1 -sm">
                         <p>Fecha de Inicio :</p>
                    </div>
                     <div class="col-3 fechainput1 -sm ">
                         <input type="date" class="form-control input-sm" required>
                    </div>
                    <div class="col-2 fecha2 -sm">
                         <p>Fecha de Fin :</p>
                    </div>
                     <div class="col-3 fechainput2 -sm">
                         <input type="date" class="form-control input-sm" required>
                    </div>
                </div><!--DIV row3-->

                <div class="row"><!--DIV row4-->
                    <div class="col-3 colum11 -sm" >
            			<p>Actividades que realizará:</p>
                    </div>
                     <div class="col-6 actividades -sm">
                         <textarea class="form-control" rows="2"></textarea>
                    </div>
                </div><!--DIV row4-->                    
        </div>  <!--DIV Alumno-->
				
 <!----------------------------------------------------------------------------------------------->
 <!----------------------------------DATOS EMPRESA----------------------------------------------->
 <!----------------------------------------------------------------------------------------------->
        <div class="tituloDatosEmpresa">
     				<p>Datos de la Empresa</p>
     	<!--DIV que contiene los datos que se le piden a la empresa-->
      			<div class="Empresa">
      				<p class="parrafoAltaEmpresa">	
      					<b>NOTA:</b>Si la empresa que solicita no se autocompleta o no esta dentro de la lista, seleccione la opcion <em>Solicitar Alta de Dirección y Empresa </em>. Si la empresa si se autocompleta y es la que usted solicita, pero la dirección no es donde usted realizará las Prácticas Profesionales, seleccione la opción <em>Solicitar Alta de Dirección.</em>
      				</p>

      			<div class="row"><!--DIV row1-->
                    <div class="col-3 colum111 -sm" >
            			<p>Nombre de la empresa:</p>
                    </div>
                     <div class="col-6 inputNombreEm -sm">
                         <select class="form-control" name="" id="">
            				<option value="">Selecciona una opción</option>
            				<option value=""></option>
           					 <option value=""></option>
       					 </select>
                    </div>
                     
           		</div><!--DIV row1-->

           		<div class="row"><!--DIV row2-->
                    <div class="col-3 colum2 -sm" >
            			<p>Dirección:</p>
                    </div>
                    <div class="col-6 seleccionarEmpresa -sm">
                         <select class="form-control" name="" id="">
            				<option value="">Selecciona una opción</option>
            				<option value=""></option>
           					 <option value=""></option>
       					 </select>
                    </div>
                     
           		</div><!--DIV row2-->

           		<div class="row"><!--DIV row3-->
                    <div class="col-3 columRamo -sm" >
            			<p>Ramo:</p>
                    </div>
                    <div class="col-6 inputRamo -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row3-->

           		<div class="row"><!--DIV row4-->
                    <div class="col-3 columTel -sm" >
            			<p>Telefono:</p>
                    </div>
                    <div class="col-6 inputTel -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row4-->

           		<div class="row"><!--DIV row5-->
                    <div class="col-6 inputTel  -sm" >
            			 <button>Alta de Empresa</button>
                    </div>
                    <div class="col-6 inputTel -sm">
                        <button> Alta de Empresa y Dirección</button>
                    </div>
                     
           		</div><!--DIV row5-->
      			              
        		</div>  <!--DIV Empresa-->


 <!----------------------------------------------------------------------------------------------->
 <!----------------------------------DATOS ASESOR EXTERNO---------------------------------------->
 <!----------------------------------------------------------------------------------------------->
        <div class="tituloDatosAsesor">
     				<p>Datos del asesor de la Empresa</p>
     	<!--DIV que contiene los datos que se le piden al asesor-->
      			<div class="Asesor">
      				<div class="row"><!--DIV row1-->
                    <div class="col-3 columNomAs -sm" >
            			<p>Nombre:</p>
                    </div>
                    <div class="col-6 inputNomAs -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row1-->

           		<div class="row"><!--DIV row2-->
                    <div class="col-3 columCargoAs -sm" >
            			<p>Cargo:</p>
                    </div>
                    <div class="col-6 inputCargoAs -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row2-->

           		<div class="row"><!--DIV row3-->
                    <div class="col-3 columCargoAs -sm" >
            			<p>Telefono</p>
                    </div>
                    <div class="col-6 inputCargoAs -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row3-->

           		<div class="row"><!--DIV row4-->
                    <div class="col-3 columCargoAs -sm" >
            			<p>Email</p>
                    </div>
                    <div class="col-6 inputCargoAs -sm">
                         <input type="text" class="form-control input-sm" required>
                    </div>
                     
           		</div><!--DIV row4-->


           		<div class="row"><!--DIV row5-->
                   <div class="col-6 inputCargoAs -sm">
                        <button> Alta de Empresa y Dirección</button>
                    </div>                    
           		</div><!--DIV row5--->
      			              
        		</div>  <!--DIV Asesor-->
      		
    </div><!--DIV MENU-->    
	</div><!--container-->
 		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>