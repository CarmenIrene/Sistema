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

   

   
     
   <!----------------------------------------------------------------------------------------------->
   <!----------------------------------REGISTRO DEL ENCARGADO DE PRACTICAS----------------------->
   <!----------------------------------------------------------------------------------------------->
   <form action="" style="top: 200px; position: relative; top: 20px; width: 78%; left: 122px">
      <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86)">
        <p>BUSCAR ALUMNO</p>
      </div><!--DIV TITULO DATOS ASESOR-->  
        <!--DIV que contiene los datos que se le piden al asesor-->
        <div class="Asesor" style="height: 900px">
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 20px">
             <p style="left: 30%; position: relative"> Seleccione la búsqueda por clave o nombre del alumno</p>
          </div>
          <!--DIV row3-->
          <div class="row" style="width: 78%; margin-left:30px; margin-top: 5px; margin-bottom: 5px; bottom: 30px; position: relative"><!--DIV row3-->
            <div class="col-5 columCargoAs -sm" style="text-align: left; background-color:rgb(198,217,241)" >
              <select class="form-control" name="" id="" style="background-color:rgb(26,50,86);color:white">
               <option value="">Selecciona una opci&oacuten</option>
               <option value="">Clave</option>
               <option value="">Nombre</option>
               
              </select>
            </div>
            <div class="col-7 inputCargoAs -sm" style="padding: 0px; left: 40px; top: 44px">
                <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row3-->

          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row5-->
            <div class="col-6 inputCargoAs -sm" style="top:60px; left: 320px; padding: 0px; top: 23px">
              <button type="button" class="btn btn-info"> Buscar </button>
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