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
        <p>SOLICITUD DE PR&AacuteCTICAS PROFESIONALES</p>
      </div><!--DIV titulo-->
      <div class="tituloDatosAlumno " style="width: 78%; position: relative; left: 122px;background-color:rgb(26,50,86) /*color azul marino*/">
        <p>Datos de Pr&aacutecticas Profesionales</p>
      </div>
     
        <!--DIV que contiene los datos que se le piden al alumno-->
      <form method="POST" action="/GuardaSolicitud/{{$alumno->clave}}" style="width: 78%; position: relative; left: 122px">
        @csrf
        <div class="Alumno">
          <div class="row" style="width: 78%; margin-left:30px;  height: 50px"><!--DIV row1-->
            <div class="col-2 colum1 -sm" style="margin-bottom: 20px;text-align: left;background-color:rgb(26,50,86); height: 43px" >
              <p>Tipo de Pr&aacutecticas :</p>
            </div>
            <div class="col-10 -sm" style="top:15px; left:20px">
             <select class="form-control" name="tipoPracticas" id="" style="background-color:rgb(26,50,86);color:white">
               <option value="">Selecciona una opci&oacuten</option>
               <option value="" name="tipoPracticas">Prácticas Profesionales I</option>
               <option value="" name="tipoPracticas">Prácticas Profesionales II</option>
               
              </select>
            </div>       
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px;  margin-bottom:20px;height: 30px"><!--DIV row2-->
            <div class="col-2 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)">
              <p>Horario :</p>
            </div>
            <div class="col-2 hora -sm" style="left:34px; top:20px; padding:0px; text-align: left">
             <p>Hora entrada:</p>
            </div>
            <div class="col-3 horainput -sm" style="left:20px">
              <input type="time" class="form-control input-sm" name="horaEntrada" required>
            </div>
            <div class="col-2 hora -sm" style="left:20px; top:20px; padding:0px; text-align: left">
              <p>Hora de salida:</p>
            </div>
            <div class="col-3 horainput -sm" style="left:3px">
              <input type="time" class="form-control input-sm" name="horaSalida" required>
            </div>       
          </div><!--DIV row2-->

          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px"><!--DIV row3-->
            <div class="col-2 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)" >
              <p>Per&iacuteodo :</p>
            </div>
            <div class="col-2 fecha1 -sm" style="left:35px; padding:0px; text-align: left">
              <p>Fecha Inicio :</p>
            </div>
            <div class="col-3 fechainput1 -sm " style="left:35px; padding:0px">
              <input type="date" class="form-control input-sm" name="fechaInicio" required>
            </div>
            <div class="col-2 fecha2 -sm" style="left:45px; padding:0px; text-align: left ">
              <p>Fecha Fin :</p>
            </div>
            <div class="col-3 fechainput2 -sm" style="left:10px; padding:0px">
              <input type="date" class="form-control input-sm" name="fechaFin" required>
            </div>
          </div><!--DIV row3-->

          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px; padding: 0px"><!--DIV row4-->
            <div class="col-3 colum11 -sm" style="height: 44px; left:20px; text-align: left; background-color:rgb(26,50,86)" >
              <p>Actividades que realizar&aacute:</p>
            </div>
            <div class="col-9 actividades -sm" style="top:30px">
              <textarea class="form-control" name="acts" rows="3"></textarea>
            </div>
          </div><!--DIV row4-->                    
        </div>  <!--DIV Alumno-->

   <!----------------------------------------------------------------------------------------------->
   <!----------------------------------DATOS EMPRESA----------------------------------------------->
   <!----------------------------------------------------------------------------------------------->
        <div class="tituloDatosEmpresa" style="background-color:rgb(26,50,86)">
          <p>Datos de la Empresa</p>
        </div>
          <!--DIV que contiene los datos que se le piden a la empresa-->
        <div class="Empresa" style="height: 500px">
          <p class="parrafoAltaEmpresa" style="font-size: 18px; padding: 10px; margin-bottom: 30px; text-align: justify">  
          <b>NOTA:</b>Si la empresa no se encuentra dentro de la lista del cat&aacutelogo, seleccione la opci&oacuten <em> Registrar Empresa </em>. Si la empresa si se encuentra con sus datos seleccione la opci&oacuten <em>Guardar.</em></p>
          <div class="row"  style="width: 78%; margin-left:30px; top: 60px; margin-bottom: 10px"><!--DIV row1-->
            <div class="col-3 colum111 -sm" style="height: 50px; text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre de la empresa: </p>
            </div>
            <div class="col-9 inputNombreEm -sm" style="top: 57px; padding: 0px; left:40px">
              <select class="form-control" name="nombre_Empresa">
                <option>Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option>{{$emp->Nombre}}</option>
                 @endforeach
              </select>
            </div>   
          </div><!--DIV row1-->

          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row2-->
            <div class="col-3 colum2 -sm" style="text-align: left; background-color:rgb(26,50,86);" >
              <p>Direcci&oacuten:</p>
            </div>
            <div class="col-9 seleccionarEmpresa -sm" style="padding: 0px; left:40px">
              <select class="form-control" name="direccion" id="">
                @foreach($empresa as $emp)
                  <option>{{$emp->direccion}}</option>
                @endforeach
              </select>
            </div>     
          </div><!--DIV row2-->
          
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row3-->
            <div class="col-3 columRamo -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Ramo:</p>
            </div>
            <div class="col-9 inputRamo -sm" style="left:34px; padding: 0px; left:40px">
              <select class="form-control" name="ramo">
                <option>Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option>{{$emp->ramo}}</option>
                 @endforeach
              </select>
             </div>     
          </div><!--DIV row3-->

          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row4-->
            <div class="col-3 columTel -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Tel&eacutefono:</p>
            </div>
            <div class="col-9 inputTel -sm" style="padding: 0px; left:40px">
              <select class="form-control" name="telefonoEmpresa">
                <option>Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option>{{$emp->telefono}}</option>
                 @endforeach
              </select>
            </div>     
          </div><!--DIV row4-->

          <div class="row" style="width: 78%; margin-left:30px"><!--DIV row5-->
            <div class="col-6 inputTel  -sm" style="top:130px; left:20%; padding: 0px;" >
              <button data-toggle="modal" data-target="#altaEmpresa" class="btn btn-primary" style="position: relative;top: 4px;left: 45px">Agregar Empresa</button>
            </div>
            <div class="col-6 inputTel  -sm" style="top:130px; left:20%; padding: 0px;" >
              <button data-toggle="modal" data-target="#altaEmpresayDireccion" class="btn btn-primary" style="position: relative;top: 4px;left: 15px">Agregar Empresa y Direccion</button>
            </div>

          </div><!--DIV row5-->             
        </div>  <!--DIV Empresa-->
     

   <!----------------------------------------------------------------------------------------------->
   <!----------------------------------DATOS ASESOR EXTERNO---------------------------------------->
   <!----------------------------------------------------------------------------------------------->
        <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86)">
          <p>Datos del asesor de la Empresa</p>
        </div><!--DIV TITULO DATOS ASESOR-->  
        <!--DIV que contiene los datos que se le piden al asesor-->
        <div class="Asesor">
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 0px"><!--DIV row1-->
            <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre:</p>
            </div>
            <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" name="nombreAsesor" required>
            </div>   
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row2-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Cargo:</p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" name="cargo" required>
            </div>   
          </div><!--DIV row2-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row3-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Tel&eacutefono: </p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" name="telefonoAsesor" required>
            </div>   
          </div><!--DIV row3-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row4-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Email: </p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" name="emailAsesor" required>
            </div>   
          </div><!--DIV row4-->
          <input class="btn btn-success botonEnviar" type="submit" value="Enviar Datos" style="margin-left: 350px; margin-top: 55px">
        </div>  <!--DIV Asesor-->    
    </form>
      
  </div><!--container-->
  <div class="modal fade" id="altaEmpresa" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
                <h1>Alta Empresa</h1>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
           <div class="modal-body">
          <form method="POST" action="/GuardaEmpresa">
            @csrf
            <label>Nombre: </label>
            <input type="text" placeholder="Nombre" name="nombreEmpresa"><br><br>
            <br>                
            <label>Direcci&oacuten:</label>
            <input type="text" placeholder="Direccion" name="direccion"><br><br>
            <label>Telefono:</label>
            <input type="text" name="telefono">
            <label>Ramo:</label>
            <input type="text" name="ramo"><br>
             <div class="modal-footer">
                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  <input class="btn btn-primary" type="submit" name="Agregar" value="Agregar">
            </div>
          </form>
          </div>  
      </div>
    </div>
  </div><!--DIV MODAL-->

  <div class="modal fade" id="altaEmpresayDireccion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
                <h1>Alta Empresa y Direcci&oacuten</h1>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
           <div class="modal-body">
          <form method="POST" action="/GuardaEmpresaDireccion">
            @csrf
            <label>Empresa: </label>
            <select class="form-control" name="nombreEmpresa">
              @foreach($empresa as $emp)
                <option>{{$emp->Nombre}}</option>
              @endforeach
            </select>
            <br>                
            <label>Direcci&oacuten:</label>
            <input type="text" placeholder="Direccion" name="direccion"><br><br>
            <label>Telefono:</label>
            <input type="text" name="telefono">
            <label>Ramo:</label>
            <input type="text" name="ramo"><br>
            <div class="modal-footer">
                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  <input class="btn btn-primary" type="submit" name="Agregar" value="Agregar">
            </div>
          </form>
        </div>  
      </div>
    </div>
  </div><!--DIV MODAL-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>