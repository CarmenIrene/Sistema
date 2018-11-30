<!DOCTYPE html>
<html lang="en">
<head>
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
    <div style="height:170px;background-color: (198,217,241); padding: 0px"> <!--inicio del div contenedor de datos y de la foto-->
        <img src="/usuario.png" style="position: relative; left:100px; width: 15%">
      <div style="height: 200px; position: relative; left: 240px; bottom:140px;width: 66%; padding: 0px"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
        <div class="row" style="height: 28.5px; background-color: rgb(198,217,241); font-family: Tahoma;font-size: 12px">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white; text-align: left"> Clave UASLP:</div>
          <div class="col-5">
              <label name="clave">{{$alumno->clave}}</label>
          </div>
          <div class="col-4" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Fecha: </div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Clave Ingenier&iacutea:</div>
          <div class="col-5">
              <label>{{$alumno->claveIngenieria}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white"> Nombre:
          </div>
          <div class="col-5">
              <label name="nombre">{{$alumno->nombre}}</label>
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba situaciÃ³n-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color:rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Carrera: </div>
          <div class="col-5">
              <label name="carrera">{{$alumno->carrera}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Asesor: </div>
          <div class="col-5">
              <label>{{$alumno->asesor}}</label>
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba condicion-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Ciclo Escolar: </div>
          <div class="col-5">
              <label>{{$alumno->ciclo_escolar}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white; height: 30px">Semestre: </div>
          <div class="col-5">
              <label>{{$alumno->semestre}}</label>
          </div>
          <div class="col-4"></div>
        </div>
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->

    <!---INICIO MENU--->
     <div class="menu" style="width: 78%">
      <ul><!--primer ul--->
        <li class="menuitem" >
          <a href="#" >Registro</a>
          <ul class="submenuRegistro" style="padding: 30px; background-color: rgb(36,50,86)">
              <li><a href="/llenarSolicitud/{{$alumno->clave}}">Llenar Solicitud
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
    <!---FIN DIV MENU---> 
      <!--DIV PARA EL LLENADO DE LA SOLICITUD-->
          <div class="titulo" style="width: 78%; position: relative; left: 122px">
            <p>REPORTES</p>
         </div><!--DIV titulo-->
          <div class="tituloDatosAlumno " style="width: 78%; position: relative; left: 122px;background-color:rgb(26,50,86) /*color azul marino*/">
          <p>DATOS DEL REPORTE MENSUAL DE ACTIVIDADES</p>
          <!--DIV que contiene los datos que se le piden al alumno para subir el reporte-->
          <div class="Alumno">
            <div class="row" style="width: 78%; margin-left:30px; padding: 0px; margin-bottom:20px"><!--DIV row1-->
                    <div class="col-2 colum1 -sm"  style="background-color: rgb(26,50,86); height: 48px">
                      <p style="text-align: left">N&uacutemero de reporte :</p>
                    </div>
                    <div class="col-10 -sm" style="left:20px; top:15px">
                         <select class="form-control" name="numReporte" id="">
                            <option value="">Selecciona una opci&oacuten</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                      </select>
                    </div>
                     
               </div><!--DIV row1-->

              <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px"><!--DIV row3-->
                    <div class="col-2 colum1 -sm" style="height:70px/*altura*/; text-align: left; background-color: rgb(26,50,86)">
                  <p>Per&iacuteodo que comprende el reporte :</p>
                    </div>
                    <div class="col-2 fecha1 -sm" style="margin:0; padding:0px;left: 36px; top: 60px">
                         <p>Fecha Inicio :</p>
                    </div>
                     <div class="col-3 fechainput1 " style="left:32px; padding: 0px; top:45px ">
                         <input name="fechaInicio" type="date" class="form-control input-sm" required>
                    </div>
                    <div class="col-2 fecha2 -sm" style="left:20px; padding:0;top: 60px">
                         <p>Fecha Fin :</p>
                    </div>
                     <div class="col-3 fechainput2 -sm" style="left:5px; padding:0px; top:45px">
                         <input  name="fechaFin" type="date" class="form-control input-sm" required>
                    </div>
                </div><!--DIV row3-->
                <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px"><!--DIV row4-->
                    <div class="col-3 colum11 -sm" style="height: 44px; left: 20px; text-align: left;background-color: rgb(26,50,86)" >
                  <p>Actividades que realizar&aacute:</p>
                    </div>
                     <div class="col-9 actividades -sm">
                         <textarea name="actividades" class="form-control" rows="2"></textarea>
                    </div>
                </div><!--DIV row4--> 

                <div class="row" style="width: 100%; height:130px; margin:0px; padding:0px"><!--DIV row5-->
                    <div class="col-9 colum11 -sm" style="height: 30px; left:48px; padding: 0px; background-color: rgb(26,50,86)" >
                  <p>Agregar archivo</p>
                    </div>
                     <div class="col-12 actividades -sm" style="top:20px; left:-45px">
                        <form action="..." method="" enctype="" target="" style="color:black; font-family: tahoma; font-size: 14px">
                          <input class="btn btn-primary" style="font-family: tahoma; font-size: 14px;margin-right: 30px" type="file" name="archivosubido">
                          <input class="btn btn-primary" type="submit" value="Enviar datos" style="font-family: tahoma; font-size: 14px; margin-right: 30px">
                          <button type="button" class="btn btn-primary" style="font-family: tahoma; font-size: 14px; margin-right: 30px">Modificar Archivo</button>

                        </form>
                        
                        
                    </div>
                </div><!--DIV row5-->                   
        </div>  <!--DIV Alumno-->
          
    </div><!--DIV MENU-->    
  </div><!--container-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>