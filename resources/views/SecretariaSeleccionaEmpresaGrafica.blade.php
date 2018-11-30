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

   
   <!-------------------------------------------------------------------------------------------->
   <!------REGISTRO DE una nueva empresa por parte dek encargado de practcaia-------------------->
   <!-------------------------------------------------------------------------------------------->
   <form action="" style="top: 200px; position: relative">
      <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86); width: 78%; top: -190px; left: 122px; position: relative">
        <p>ESTADÍSTICAS DE LA EMPRESA</p>
       
      </div><!--DIV TITULO DATOS ASESOR-->  
       <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86); width: 78%; top: -185px; left: 122px; position: relative; margin-bottom: 10px">
        <p> CÁTALOGO DE EMPRESAS</p>
       
      </div><!--DIV TITULO DATOS ASESOR--> 
        <!--DIV que contiene los datos que se le piden al asesor-->
        <div class="Asesor" style="height: 300px; width: 78%; position: relative;top:-190px; left: 122px">
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row1-->
            <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre:</p>
            </div>
            <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
               <select class="form-control" name="" id="">
               <option value="">Selecciona una opci&oacuten</option>
               <option value=""> </option>
               <option value=""></option>
              </select>
            </div>   
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 0px"><!--DIV row1-->
            <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Empresa:</p>
            </div>
            <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
              <input type="text" class="form-control input-sm" required>
            </div>   
          </div><!--DIV row1-->
         
           
           <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row5-->
            <div class="col-7 inputCargoAs -sm" style="top:50px; left: 50%; padding: 0px">
              <button type="button" class="btn btn-info"> Ver Gráfica</button>
            </div>                  
          </div><!--DIV row5--->         
        </div>  <!--DIV Asesor--> 

        <div class="piePagina" style="top: -230px">
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