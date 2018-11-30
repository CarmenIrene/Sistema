<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="encabezado" style="position: relative; left:120px">
      <img src="/logoRojo.jpg" alt="">
      </div><!--DIV ENCABEZADO-->
    <!--DIV de los datos generales del alumno-->
    <div style="height:170px;width: 114%; background-color: (198,217,241); padding: 0px;top: 142px; position: relative; right: 105px"> <!--inicio del div contenedor de datos y de la foto-->
       <!-- <img src="/usuario.png" style="position: relative; left:100px; width: 15%">-->
      <div style="height: 200px; position: relative; left: 240px; bottom:140px;width: 66%; padding: 0px"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
      
        <div class="row" style="height: 28.5px; background-color: rgb(198,217,241); font-family: Tahoma;font-size: 12px">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white;   text-align: left"> RPE:
          </div>
          <div class="col-5">
           
          </div>
          <div class="col-4" style="background-color: rgb(59,64,104); font-family: Tahoma;font-size: 15px; color: white"> Fecha:
          </div>
        </div>
        <div class="row">
          <div class="col-3" style="background-color: rgb(36,50,86); font-family: Tahoma;font-size: 15px; color: white"> BIENVENIDO ! :
          </div>
          <div class="col-5">
                      
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white">
          </div><!--aqui iba situaciÃ³n-->
        </div>        
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->
  <!--FIN DEL DIV QUE CONTIENE EL REPORTE-->
    <div style="position: relative;height: 400px; background-color: white; left: 120px; border-color: blue">
        <p>Aqui se visualizará el reporte del alumno seleccionado antes</p>
    </div>
   
      
    <!--Comentarios-->
     <div class="contenedorComentario" style="top: -87px; position: relative;background-color: rgb(26,50,86); height: 39px;left: 122px;   width: 78%;">
     
        <p style="color: white;text-align: center;font-size: 22px; position:relative;height:28px;width: 78%; left: 80px; align-self: center;">AUTORIZACIÓN DE SOLICITUD DE PRÁCTICAS PROFESIONALES</p>
    </div>
    <div class="contenedorComentario" style="top: -87px; position: relative;background-color: rgb(26,50,86); height: 39px;left: 122px;   width: 78%;">
     
        <p style="color: white;text-align: center;font-size: 22px; position:relative;height:28px;width: 78%; left: 80px; align-self: center;">Comentarios</p>
    </div>
    <div class="Comentario" style="width: 78%; position: relative; background-color: rgb(198,217,241);top: -87px; height: 450px; left: 122px;">
        <div class="row" style="width: 78%;  margin-left:30px; margin-bottom: 5px"><!--DIV row4-->
            <div class="col-3 columTel -sm" style="text-align: left;  height: 50px; background-color:rgb(26,50,86); color: white; top: 20px" >
              <p>Fecha de autorizacion:</p>
            </div>
            <div class="col-4 inputTel -sm" style="padding: 0px; left:24px; top: 30px;">
              <input name="fechaAutorizacionSolicitudTutor" type="date" class="form-control input-sm" required>
            </div>     
        </div><!--DIV row4-->



           <p style="color:blue;text-align: center; font-size: 18px;height:28px;width: 78%; left: 0px; align-self: center;"></p>
        <textarea type="text" name="Comentarios" style="height: 200px; width: 81%; position: relative; left: 90px; top: 50px;"></textarea>
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