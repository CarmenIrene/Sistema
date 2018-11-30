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


    <div class="menu" style="width: 78%; height: 39px; background-position: center; position: relative;
    left: 122px;background-color: rgb(26,50,86);top:0px;">
      <ul>
            <li class="menuitem"><a href="#">Solicitud</a></li>
           <li class="menuitem"><a href="#">Reportes</a> </li>
           <li class="menuitem"><a href="#">Evaluación</a> </li>
           <li class="menuitem"><a href="#">Estado de solicitud</a> </li>
           <li class="menuitem"><a href="#">Autorizaciones</a> </li>
            <ul class="submenuRegistro">
                <li><a href="/autorizacionSolicitudTutor">Tutor académico</a></li>   
                <li><a href="/autorizacionSolicitudCoordinador">Coordinador</a></li>
                <li><a href="/autorizacionSolicitudEncargado">Encargado de prácticas</a></li>  
            </ul>
         
      </ul>
    </div>
    
      <div class="titulo" style="width: 78%; position: relative; left: 122px">
        <p>SOLICITUD DE PR&AacuteCTICAS PROFESIONALES</p>
      </div><!--DIV titulo-->
      <div class="tituloDatosAlumno " style="width: 78%; position: relative; left: 122px;background-color:rgb(26,50,86) /*color azul marino*/">
        <p>Datos del Alumno </p>
      </div>
     
        <!--DIV que contiene los datos que se le piden al alumno-->
        <form method="POST" action="/GuardaSolicitud" style="width: 78%; position: relative; left: 122px">
           @csrf
        <div class="Alumno">
          <div class="row" style="width: 78%; margin-left:30px;  height: 50px"><!--DIV row1-->
            <div class="col-3 colum1 -sm" style="margin-bottom: 20px;text-align: left;background-color:rgb(26,50,86)" >
              <p>Tipo de Pr&aacutecticas :</p>
            </div>
            <div class="col-9 -sm" style="top:15px; left:20px">
              <input type="text" class="form-control input-sm" required>
            </div>       
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px;  margin-bottom:20px;height: 30px"><!--DIV row2-->
            <div class="col-3 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)">
              <p>Horario :</p>
            </div>
            <div class="col-2 hora -sm" style="left:34px; top:20px; padding:0px; text-align: left">
             <p>Hora entrada:</p>
            </div>
            <div class="col-2 horainput -sm" style="left:20px">
              <input type="text" class="form-control input-sm" required>
            </div>
            <div class="col-2 hora -sm" style="left:20px; top:20px; padding:0px; text-align: left">
              <p>Hora de salida:</p>
            </div>
            <div class="col-2 horainput -sm" style="left:20px">
              <input type="text" class="form-control input-sm" required>
            </div>       
          </div><!--DIV row2-->
          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px"><!--DIV row3-->
            <div class="col-3 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)" >
              <p>Per&iacuteodo :</p>
            </div>
            <div class="col-2 fecha1 -sm" style="left:35px; padding:0px; text-align: left">
              <p>Fecha de Inicio :</p>
            </div>
            <div class="col-2 fechainput1 -sm " style="left:50px; padding:0px">
              <input type="date" class="form-control input-sm" required>
            </div>
            <div class="col-2 fecha2 -sm" style="left:65px; padding:0px; text-align: left ">
              <p>Fecha de Fin :</p>
            </div>
            <div class="col-2 fechainput2 -sm" style="left:60px; padding:0px">
              <input type="date" class="form-control input-sm" required>
            </div>
          </div><!--DIV row3-->
          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px; padding: 0px"><!--DIV row4-->
            <div class="col-3 colum11 -sm" style="height: 44px; left:20px; text-align: left; background-color:rgb(26,50,86)" >
              <p>Actividades que realizar&aacute:</p>
            </div>
            <div class="col-9 actividades -sm" style="top:30px">
              <textarea class="form-control" rows="3"></textarea>
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
        <p class="parrafoAltaEmpresa" style="font-size: 18px; padding: 10px; margin-bottom: 30px; text-align: justify"  
          </p>
        <div class="row"  style="width: 78%; margin-left:30px; top: 60px; margin-bottom: 10px"><!--DIV row1-->
            <div class="col-3 colum111 -sm" style="height: 50px; text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre de la empresa: </p>
            </div>
            <div class="col-9 inputNombreEm -sm" style="top: 57px; padding: 0px; left:40px">
              <select class="form-control" name="" id="">
               <option value="">Selecciona una opci&oacuten</option>
               <option value=""></option>
               <option value=""></option>
              </select>
            </div>   
        </div><!--DIV row1-->
        <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row2-->
            <div class="col-3 colum2 -sm" style="text-align: left; background-color:rgb(26,50,86);" >
              <p>Direcci&oacuten:</p>
            </div>
            <div class="col-9 seleccionarEmpresa -sm" style="padding: 0px; left:40px"">
              <select class="form-control" name="" id="">
               <option value="">Selecciona una opci&oacuten</option>
               <option value=""></option>
               <option value=""></option>
              </select>
            </div>     
        </div><!--DIV row2-->
        <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row3-->
            <div class="col-3 columRamo -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Ramo:</p>
            </div>
            <div class="col-9 inputRamo -sm" style="left:34px; padding: 0px; left:40px">
              <input type="text" class="form-control input-sm" required>
            </div>     
        </div><!--DIV row3-->
        <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row4-->
            <div class="col-3 columTel -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Tel&eacutefono:</p>
            </div>
            <div class="col-9 inputTel -sm" style="padding: 0px; left:40px">
              <input type="text" class="form-control input-sm" required>
            </div>     
        </div><!--DIV row4-->
        <div class="row" style="width: 78%; margin-left:30px"><!--DIV row5-->
            <div class="col-6 inputTel  -sm" style="top:130px; left:25%; padding: 0px" >
             <button type="button" class="btn btn-info"> Alta de Empresa</button>
            </div>
            <div class="col-6 inputTel -sm" style="top:130px; left: 20%; padding: 0px">
              <button type="button" class="btn btn-info"> Alta de Empresa y Direcci&oacuten</button>
            </div>           
        </div><!--DIV row5-->             
    </div>  <!--DIV Empresa-->     


    <!--Comentarios-->
    <div class="contenedorComentario" style="top: 0px; position: relative;background-color: rgb(26,50,86);
    height: 39px;left: 0px;   width: 100%;">
     
        <p style="color: white;text-align: center;font-size: 22px;;
    height:28px;width: 78%; left: 90px; align-self: center;">Comentarios</p>
    </div>
    <div class="Comentario" style="width: 100%; position: relative; background-color: rgb(198,217,241); top: 0px; height: 450px; left: 0px;">
        <div class="row" style="width: 78%;  margin-left:30px; margin-bottom: 5px"><!--DIV row4-->
            <div class="col-3 columTel -sm" style="text-align: left;  height: 50px; background-color:rgb(26,50,86)" >
              <p>Fecha de autorizacion:</p>
            </div>
            <div class="col-9 inputTel -sm" style="padding: 0px; left:40px; top: 80px;">
              <input type="text" class="form-control input-sm" required>
            </div>     
        </div><!--DIV row4-->



           <p style="color:blue;text-align: center; font-size: 18px;height:28px;width: 78%; left: 0px; align-self: center;"></p>
        <input type="text" name="Comentarios" style="height: 200px; width: 81%; position: relative; left: 50px; top: 50px;">
        <div class="Autoriza">
            <input type="radio" aria-label="Radio button for following text input"  style="position: relative; left:80px; top:60px;">    
                <label style="position: relative;left: 80px; top: 59px;">Autorizar</label>
            <input type="radio" aria-label="Radio button for following text input"  style="position: relative; left:100px; top:62px;">    
            <label style="position: relative;left: 100px; top: 61px;">No autorizar</label>
            <button type="button" class="btn btn-info" style="top: 90px; position: relative; left: 485px;"> Enviar</button>
        </div>    
    </div>

</div>
</body>
</html>