<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="/css/estilos.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
    <div class="encabezado">
      <img src="/logoRojo.jpg" alt="">
    </div><!--DIV ENCABEZADO-->
    <!--DIV de los datos generales del alumno-->
    <div style="height:170px; background-color: (198,217,241); padding: 0px"> <!--inicio del div contenedor de datos y de la foto-->
        <img src="/usuario.png" style="position: relative; left:100px; width: 15%">
      <div style="height: 200px; position: relative; left: 240px; bottom:140px;width: 66%; padding: 0px"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
        <div class="row" style="height: 28.5px; background-color: rgb(198,217,241); font-family: Tahoma;font-size: 12px">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white; text-align: left"> Clave UASLP:</div>
          <div class="col-5">
            <label>{{$alumno->clave}}</label>
          </div>
          <div class="col-4" style="background-color: rgb(59,64,104); font-family: Tahoma;font-size: 15px; color: white">Fecha: </div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white">Clave Ingenier&iacutea:</div>
          <div class="col-5">
            <label>{{$alumno->claveIngenieria}}</label>            
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white"> Nombre: </div>
          <div class="col-5">
            <label>{{$alumno->nombre}}</label>            
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba situaciÃ³n-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white">Carrera: </div>
          <div class="col-5">
            <label>{{$alumno->carrera}}</label>            
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white">Asesor: </div>
          <div class="col-5">
            <label>{{$alumno->asesor}}</label>            
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba condicion-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white">Ciclo Escolar: </div>
          <div class="col-5">
            <label>{{$alumno->ciclo_escolar}}</label>            
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white; height: 30px">Semestre: </div>
          <div class="col-5">
            <label>{{$alumno->semestre}}</label>            
          </div>
          <div class="col-4"></div>
        </div>
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->


    <div class="menu" style="width: 78%">
      <ul><!--primer ul--->
        <li class="menuitem" >
          <a href="#" >Registro</a>
          <ul class="submenuRegistro" style="padding: 30px; background-color: rgb(36,50,86)">
              <li><a href="/llenarSolicitud/{{$alumno->clave}}">Llenar Solicitud </li>
          </ul>
            <ul class="submenuRegistro" style="padding: 30px; background-color: rgb(36,50,86)">
              <li><a href="/AlumnoAutorizaciones/{{$alumno->clave}}">Autorizaciones</a>
              </li>  
          </ul>
        </li>
        <li class="menuitem">
          <a href="#" style="padding-left: 0px; left: -40px; position: relative">Reportes</a>
          <ul class="submenuRegistro">
              <li><a href="/subirReportesAlumno/{{$alumno->clave}}">Subir Reportes</a>
              </li>   
          </ul>
        </li>
        <li class="menuitem" style="width: 150px">
          <a href="#" style="padding-left: 0px; left: -80px; position: relative">Estadísticas  por Empresa </a>
          <ul class="submenuRegistro" style="padding: 30px; background-color: rgb(36,50,86)">
               <li><a href="/AlumnoSeleccionaEstadisticasEmpresa/{{$alumno->clave}}">Estadistícas</a>
              </li> 
          </ul>
        </li>
        <li class="menuitem" style="width: 230px; padding-left: 30px">
          <a href="#" style="padding-left: 0px; left: -80px; position: relative">Reportes de Alumnos por Empresa</a>
          <ul class="submenuRegistro" style="background-color: rgb(36,50,86)">
               <li><a href="/AlumnoSeleccionaReportesEmpresa/{{$alumno->clave}}">Reportes por Empresa</a>
              </li> 
          </ul>
        </li>
        <li class="menuitem">
          <a href="#" style="padding-left: 0px; left: -50px; position: relative">Ayuda</a>
          <ul class="submenuRegistro">
                
          </ul>
        </li>
        <li class="menuitem" style="width: 40px;position: relative">
          <a href="#" style="padding-left: 0px; left: -110px; position: relative">Cerrar Sesión</a>
          <ul class="submenuRegistro">
                
          </ul>
        </li>
      </ul><!--fin del primer ul--->
    </div>
  </div>
</body>
</html>