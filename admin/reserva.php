<?php
session_start();
$id = $_SESSION['username'];
if(!isset($id)){
  header("location: index.php");
}else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/reserva.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Biblioteca Santa Maria</title>
    
    <link rel="shortcut icon" href="img/favicon.ico">
    
</head>
<body bgcolor= "red">
    <header>
        <nav>
            <h1>Biblioteca Santa Maria</h1>
        </nav>
    </header>
        <h2>Consultar reservas</h2>
            <form action="insLog.php" method="post" >
                <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
        </div>
        <div class="col">
                      <span class="fil" id="filtro">Filtrar</span>
                    </div>
      <section>
          <div class="container">
            <div class="row">
              
              <div class="col-md-12 text-center mt-5">
                <form action="DescargarReporte_x_fecha.php" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col">
                      <input type="date" name="fecha_ingreso" class="form-control"  placeholder="Fecha de Inicio" required>
                    </div>
                    <div class="col">
                      <input type="date" name="fechaFin" class="form-control" placeholder="Fecha Final" required>
                    </div>

                  </div>
                </form>
              </div>

              <div class="col-md-12 text-center mt-5">     
                <span id="loaderFiltro">  </span>
              </div>
              
              
            <div class="table-responsive resultadoFiltro">
              <table class="table table-hover" id="tableEmpleados">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Nombre del libro</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Fecha reserva</th>
                  </tr>
                </thead>
              <?php
              include('config.php');
              $sqlTrabajadores = ('SELECT * FROM reserva ORDER BY fecha_reserva ASC');
              $query = mysqli_query($con, $sqlTrabajadores);
              $i =1;
                while ($dataRow = mysqli_fetch_array($query)) { ?>
                <tbody>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $dataRow['nombre'] ; ?></td>
                    <td><?php echo $dataRow['apepat'] ; ?></td>
                    <td><?php echo $dataRow['apemat'] ; ?></td>
                    <td><?php echo '$ '. $dataRow['domicilio'] ; ?></td>
                    <td><?php echo $dataRow['nombrelibro'] ; ?></td>
                    <td><?php echo $dataRow['editorial'] ; ?></td>
                    <td><?php echo $dataRow['fecha_reserva'] ; ?></td>
                </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>

            </div>
          </div>
      </section>







  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/material.min.js"></script>
  <script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);


//FILTRANDO REGISTROS
$("#filtro").on("click", function(e){ 
  e.preventDefault();
  
  loaderF(true);

  var f_ingreso = $('input[name=fecha_ingreso]').val();
  var f_fin = $('input[name=fechaFin]').val();
  console.log(f_ingreso + '' + f_fin);

  if(f_ingreso !="" && f_fin !=""){
    $.post("filtro.php", {f_ingreso, f_fin}, function (data) {
      $("#tableEmpleados").hide();
      $(".resultadoFiltro").html(data);
      loaderF(false);
    });  
  }else{
    $("#loaderFiltro").html('<p style="color:red;  font-weight:bold;">Debe seleccionar ambas fechas</p>');
  }
} );


function loaderF(statusLoader){
    console.log(statusLoader);
    if(statusLoader){
      $("#loaderFiltro").show();
      $("#loaderFiltro").html('<img class="img-fluid" src="assets/img/cargando.svg" style="left:50%; right: 50%; width:50px;">');
    }else{
      $("#loaderFiltro").hide();
    }
  }
});
</script>

                <br><br><br>
                <a href="../admin/pdf/ReporteDeReservas.php" target="_blank" class="btn btn-block ingresar">Exportar</a>
            </center>
            <br><br><br><br><br><br>
 
            <a href="menu.php" class="ol">Regresar</a>
</body>
</html>