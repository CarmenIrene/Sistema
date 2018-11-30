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
    </div>  <!--fin del div contenedor de datos y de la foto-->

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
  </div><!--DIV MENU--> 
    <!---FIN DIV MENU---> 
      <!--DIV PARA EL LLENADO DE LA SOLICITUD-->
          <div class="tituloDatosAlumno" style="width: 78%; position: relative; left: 120px;background-color:rgb(26,50,86) ;margin: 2px">
              <p style="right: 50%; position: relative; color: white">AUTORIZACIONES</p>
         </div><!--DIV titulo-->
          <div class="tituloDatosAlumno " style="width: 78%;left:122px; position: relative;background-color:rgb(26,50,86) /*color azul marino*/">
          <p style="left: 300px">ASESOR ACADÉMICO</p>
            </div>
          <!--DIV que contiene los datos que se le piden al alumno para subir el reporte-->
          <div class="Alumno" style="height: 700px; width: 78%; left: 122px;position: relative">
            <div class="row" style="width: 78%; margin-left:30px; padding: 0px; margin-bottom:20px"><!--DIV row1-->
                    <div class="col-3 colum1 -sm"  style="background-color: rgb(26,50,86)">Fecha de Autorización: </div>
                      <div class="col-5"></div>
                     
               </div><!--DIV row1-->
        
                <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px"><!--DIV row4-->
                    <div class="col-3 colum11 -sm" style="height: 44px; left: 20px; text-align: left;background-color: rgb(26,50,86)" >
                  <p>Comentarios: </p>
                    </div>
                     <div class="col-9 actividades -sm">
                         <textarea name="actividades" class="form-control" rows="2"></textarea>
                    </div>
                </div><!--DIV row4--> 

          <div class="tituloDatosAlumno " style="width: 100%; position: relative;background-color:rgb(26,50,86) /*color azul marino*/">
          <p>ASESOR ACADÉMICO</p>
            </div>
          <!--DIV que contiene los datos que se le piden al alumno para subir el reporte-->
          <div class="Alumno" style="width: 100%;position: relative">
          <div class="row" style="width: 78%; margin-left:30px; padding: 0px; margin-bottom:20px"><!--DIV row1-->
                    <div class="col-3 colum1 -sm"  style="background-color: rgb(26,50,86)">Fecha de Autorización: </div>
                     
               </div><!--DIV row1-->
        
                <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px"><!--DIV row4-->
                    <div class="col-3 colum11 -sm" style="height: 44px; left: 20px; text-align: left;background-color: rgb(26,50,86)" >
                  <p>Comentarios: </p>
                    </div>
                     <div class="col-9 actividades -sm">
                         <textarea name="actividades" class="form-control" rows="2"></textarea>
                    </div>
                </div><!--DIV row4--> 

          <div class="tituloDatosAlumno " style="width: 100%; position: relative;background-color:rgb(26,50,86) /*color azul marino*/">
          <p>SECRETARIA ACADÉMICA</p>
            </div>
          <!--DIV que contiene los datos que se le piden al alumno para subir el reporte-->
          <div class="Alumno" style="width: 100%;position: relative">
          <div class="row" style="width: 78%; margin-left:30px; padding: 0px; margin-bottom:20px"><!--DIV row1-->
                    <div class="col-3 colum1 -sm"  style="background-color: rgb(26,50,86)">Fecha de Autorización: </div>
                     
               </div><!--DIV row1-->
        
                <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px"><!--DIV row4-->
                    <div class="col-3 colum11 -sm" style="height: 44px; left: 20px; text-align: left;background-color: rgb(26,50,86)" >
                  <p>Comentarios: </p>
                    </div>
                     <div class="col-9 actividades -sm">
                         <textarea name="actividades" class="form-control" rows="2"></textarea>
                    </div>
                </div><!--DIV row4-->

           </form>
                              
        </div>  <!--DIV Alumno-->
          

  </div><!--container-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>