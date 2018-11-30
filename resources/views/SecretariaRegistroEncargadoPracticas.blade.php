<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/estilos.css">
   <link rel="stylesheet" href="easyui-datagrid.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="encabezado">
        <img src="/logoRojo.jpg" alt="">
    </div><!--DIV ENCABEZADO-->

     
        <!--DIV que contiene los datos de los encargados-->
        <form method="POST" action="/GuardaRegistroEncargados" style="width: 78%; position: relative; left: 122px; height: 700px">
        <div class="Asesor"><!--div encargado datos-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 0px"><!--DIV row1-->
            <div class="col-2 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px">
              <p>RPE: </p>
            </div>
            <div class="col-2 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px"> <p>Nombre: </p>
            </div>
            <div class="col-2 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px ">
              <p>Área:</p>
            </div>
            <div class="col-2 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px ">
              <p>Carrera: </p>
            </div>
            <div class="col-1 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px ">
              <p>Ver</p>
            </div>
            <div class="col-2 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86); margin-right: 5px ">
              <p>Eliminar</p>
            </div>
                 
        </div>  <!--DIV Asesor-->    
    </form>

   <!----------------------------------------------------------------------------------------------->
   <!----------------------------------REGISTRO DEL ENCARGADO DE PRACTICAS----------------------->
   <!----------------------------------------------------------------------------------------------->
   <form action="" style="top: 200px; position: relative">
      <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86)">
        <p>REGISTRO DE ENCARGADO DE PRÁCTICAS</p>
      </div><!--DIV TITULO DATOS ASESOR-->  
        <!--DIV que contiene los datos que se le piden al asesor-->
        <div class="Asesor" style="height: 500px">
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row1-->
            <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>RPE:</p>
            </div>
            <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 0px"><!--DIV row1-->
            <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre:</p>
            </div>
            <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row2-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Cargo:</p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row2-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row3-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Carrera: </p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
             <select class="form-control" name="" id="">
               <option value="">Selecciona una opci&oacuten</option>
               <option value="">Ingeniería Civil</option>
               <option value="">Ingeniería en Computación</option>
               <option value="">Ingeniería en Informática</option>
               <option value="">Ingeniería en Sistemas Inteligentes/option>
               <option value="">Ingeniería Mecatrónica</option>
               <option value="">Ingeniería Agroindustrial</option>
               <option value="">Ingeniería en Elecricidad y Automatización</option>
               <option value="">Ingeniería en Geología</option>
               <option value="">Ingeniería Mecánica y Eléctrica</option>
               <option value="">Ingeniería Mécanica</option>
               <option value="">Ingeniería Mécanica Administrativa</option>
               <option value="">Ingeniería Ambiental</option>
               <option value="">Ingeniería Metalúrgica y de Materiales</option>
               <option value="">Ingeniería en Topografía y Construcción</option>
               <option value="">Ingeniería en Geomática</option>
               <option value="">Ingeniería en GeoInformática</option>
              </select>
            </div>   
          </div><!--DIV row3-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row4-->
            <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Email: </p>
            </div>
            <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row4-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row5-->
            <div class="col-6 inputCargoAs -sm" style="top:60px; left: 210px; padding: 0px">
              <button type="button" class="btn btn-info"> Registrar</button>
            </div>    
            <div class="col-6 inputCargoAs -sm" style="top:60px; left: 10px; padding: 0px">
              <button type="button" class="btn btn-info"> Modificar</button>
            </div>                  
          </div><!--DIV row5--->          
        </div>  <!--DIV Asesor--> 

        <div class="piePagina" style="top: -90px">
      <p class="texto">Facultad de Ingeniería, UASLP <br>
      Dr. Manuel Nava # 8, Zona Universitaria poniente <br>
         Tels. (444) 826.2330 al 2339
         http://ingenieria.uaslp.mx    
   </p>
      
    </div>   
    </form>

  </div><!--container-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>