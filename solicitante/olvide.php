<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilioteca Santa Maria</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/olvide.css">
</head>
<body>
    <section class="form-login"> 
        <h2>Recuperar cuenta</h2>
        <br>
        <form action="restablecer.php" method="post" >
        <input class="controls1" type="text" name="usuario" value="" placeholder="Ingrese su usuario" required>
        <br>
        <input class="controls" type="password" name="clave" value="" placeholder="Ingrese su clave" required>
        <input class="controls" type="password" name="clave" value="" placeholder="Confirme su clave" required>
        <center>
        <input type="submit" class="btn btn-block ingresar" value="Restablecer">
  </center>
  <br>
        <p><a href="index.php" class="ol">Regresar</a></p>
      </section>
</body>
</html>