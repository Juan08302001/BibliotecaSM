<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'root', '', 'bibliotecasm');
?>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilioteca Santa Maria</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/crearcuenta.css">
</head>
<body>
    <section class="form-login"> 
        <h2>Solicitar reserva</h2>
        <br>
        <form action="crearReserva.php" method="post" >
        <input class="controls1" type="text" name="nom" value="" placeholder="Ingrese su Nombre" required>
        <input class="controls" type="text" name="apepat" value="" placeholder="Ingrese su Apellido Paterno" required>
        <input class="controls" type="text" name="apemat" value="" placeholder="Ingrese su Apellido Materno" required>
        <input class="controls1" type="text" name="direccion" value="" placeholder="Ingrese su Domicilio" required>
        <select class="controls1" name="libro" >
        <option value="0">Seleccione el nombre del libro</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM libros");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[idlibro].'">'.$valores[nombre].'</option>';
          }
        ?>
      </select>
    <select class="controls1" name="editorial" >
    <option value="0">Seleccione la editorial del libro</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM libros");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[idlibro].'">'.$valores[editorial].'</option>';
          }
        ?>
      </select>

       


        <input class="controls1" type="date"  name="calendario" >
        <center>
        <input type="submit" class="btn btn-block ingresar" value="Crear">
        </form>
  </center>
  <br>
        <p><a href="menu.php" class="ol">Regresar</a></p>
      </section>
</body>
</html>