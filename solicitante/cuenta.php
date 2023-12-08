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
        <h2>Crear cuenta</h2>
        <br>
        <form action="crearC.php" method="post" >
        <input class="controls1" type="text" name="nombre" value="" placeholder="Ingrese su Nombre" required>
        <br>
        <input class="controls" type="text" name="apePat" value="" placeholder="Ingrese su Apellido Paterno" required>
        <input class="controls" type="text" name="apeMat" value="" placeholder="Ingrese su Apellido Materno" required>
        <input class="controls1" type="text" name="edad" value="" placeholder="Ingrese su Edad" required>
        <input class="controls1" type="text" name="direccion" value="" placeholder="Ingrese su Domicilio" required>
        <br>
        <input class="controls1" type="text" name="usuario" value="" placeholder="Ingrese su usuario" required>
        <br>
        <input class="controls" type="password" name="clave" value="" placeholder="Ingrese su clave" required>
        <input class="controls" type="password" name="clave" value="" placeholder="Confirme su clave" required>
        <center>
        <input type="submit" class="btn btn-block ingresar" value="Crear">
  </center>
  <br>
        <p><a href="index.php" class="ol">Regresar</a></p>
      </section>
</body>
</html>