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
    <div style="height:170px;width: 114%; background-color: (198,217,241); padding: 0px;top: 142px; position: relative; right: 105px"> <!--inicio del div contenedor de datos y de la foto-->
       <!-- <img src="/usuario.png" style="position: relative; left:100px; width: 15%">-->
      <div style="height: 200px; position: relative; left: 240px; bottom:140px;width: 66%; padding: 0px"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
      
        <div class="row" style="height: 28.5px; background-color: rgb(198,217,241); font-family: Tahoma;font-size: 12px">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white;   text-align: left"> RPE UASLP:
          </div>
          <div class="col-5">
             <label> {{$secretaria->rpe}}</label>
          </div>
          <div class="col-4" style="background-color: rgb(59,64,104); font-family: Tahoma;font-size: 15px; color: white"> Fecha:
          </div>
        </div>
        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white"> Nombre: 
          </div>
          <div class="col-5">
            <label> BIENVENIDO ! : {{$secretaria->nombre}}</label>            
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white">
          </div><!--aqui iba situaciÃ³n-->
        </div>        
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->


    <div class="menu" style="width: 78%; height: 70px; top: -120px; position: relative">
      <ul><!--primer ul--->
        <li class="menuitem" style="width: 210px" >
          <a href="#">Prácticas Profesionales
           </a>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li style=""><a href="/SecretariaRegistroEncargadoPracticas/{{$secretaria->rpe}}">Encargados de Prácticas</li>
          </ul>
            <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaConsultaAlumno/{{$secretaria->rpe}}">Consultar Alumno</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li style="width: 280px"><a href="/autorizacionSolicitudEncargado/{{$secretaria->rpe}}">Autorizaciones Pendientes</a>
              </li> <!----FALTA LA RUTA Y LA VISTA QUE MAYRA HAYA ECHO DE AUTORIZACIONES--> 
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a style="" href="/SecretariaConsAlumnosEnProceso/{{$secretaria->rpe}}">Alumnos en Proceso </a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li style=""><a href="/SecretariaConsAlumnosFinalizaron/{{$secretaria->rpe}}">Alumnos que finalizaron Prácticas</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px;background-color: rgb(36,50,86)">
              <li><a href="/SecretariaRegistraEmpresa/{{$secretaria->rpe}}"> Consultar Empresas a registrar</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaRegistraEmpresa/{{$secretaria->rpe}}">Registrar Nueva Empresa</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaSeleccionaEmpresaGrafica/{{$secretaria->rpe}}">Estdísticas de la Empresa</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaGenerarConstanciaValidacion/{{$secretaria->rpe}}">Generar Constancia</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaVisualizarConstanciaValidacion/{{$secretaria->rpe}}">Consultar Constancias</a>
              </li>  
          </ul>
          <ul class="submenuRegistro" style="padding: 25px;width: 250px; background-color: rgb(36,50,86)">
              <li><a href="/SecretariaVisualizarConstanciaValidacion/{{$secretaria->rpe}}">Consultar Constancias</a>
              </li>  
          </ul>
        </li>

        <li class="menuitem" style="width: 300px">
          <a href="#" style="padding-left: 50px;height: 80px; position: relative">Proceso de Prácticas Profesionales</a>
          <ul class="submenuRegistro" style="background-color: rgb(36,50,86);height: 40px; padding: 15px">
              <li><a href="#" >Diagrama de Proceso</a>
              </li>   
          </ul>
          <ul class="submenuRegistro" style="background-color: rgb(36,50,86);height: 40px; padding: 15px">
              <li><a href="#">Proceso</a>
              </li>   
          </ul>
          <ul class="submenuRegistro" style="background-color: rgb(36,50,86);height: 40px;  padding: 10px">
              <li><a href="#">Preguntas Frecuentes</a>
              </li>   
          </ul>
        </li>
        <li class="menuitem" style="width: 150px">
          <a href="#" style="padding-left: 50px;  position: relative">Ayuda</a>
        </li>
        <li class="menuitem">
          <a href="#" style="padding-left: 50px;height: 50px; position: relative">Cerrar Sesión</a>
        </li>
      </ul><!--fin del primer ul--->
    </div><!--fin div menu--->
 </div>
</body>
</html>