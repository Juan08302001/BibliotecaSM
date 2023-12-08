<?php

session_start();
$id = $_SESSION['username'];
if(!isset($id)){
    header("location: index.php");
}else{
    'No tiene autorizacion';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/libros.css">
    <title>Biblioteca Santa Maria</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="estilos_mensajes_retro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
    function Bien(){
       $(window).load(function(){
         $(".Bien").fadeIn("slow");
         $(".Cierre").click(function(){
              $(".Bien").fadeOut("slow",function(){
                   window.location="login.php";
              });
              
          });
       });

     }
    </script>
</head>
<body>
<div class="Retro Bien">
       <div class="Mensaje">
            <div class="Desc_Men">
              <p style="font-size: 150%;">¡Usuario no existe!</p>
              <p><button class="Cierre" style="left: 0;
                     width: 30%;
                     text-decoration: none;
                     padding: 10px;
                     font-weight: 600;
                     font-size: 15px;
                     color: #ffffff;
                     background-color: #0E62CD;
                     border-radius: 6px;
                     border: 2px solid #ffffff;">Aceptar</button></p>
            </div>
       </div>
    </div>
    <header>
        <nav>
            <h1>Biblioteca Santa Maria</h1>
        </nav>
    </header>
    <section class="cuadro">
        <h2>Registro nuevo libro</h2>
        <section class="form-login"> 
            <form action="insLibro.php" method="post" >
                <br>
                <input class="controls" type="text" name="nomlib" placeholder="Ingrese el Nombre del libro" required>
                <select class="controls" type="text" name="editorial" placeholder="in">
                <option value="0">Seleccione la editorial</option>
                <option>Editorial Sudamericana</option>
                <option>Penguin Books</option>
                <option>Minotauro</option>
                <option>Scribner</option>
                <option>Vintage Books</option>
                <option>Editorial Castalia</option>
                <option>RBA Libros</option>
                <option>Salamandra</option>
                <option>HarperOne</option>
                <option>Penguin Random House</option>
                <option>Penguin Clásicos</option>
                <option>Puffin Books</option>
                <option>Debate</option>
                <option>Vintage Español</option>
                <option>Gaia Ediciones</option>
                <option>Plaza & Janés</option>
                <option>Planeta</option>
                <option>Scribner</option>
    </select>
    <select class="controls" type="text" name="edicion">
                <option value="0">Seleccione la edicion</option>
                <option>50 aniversario</option>
                <option>1ª edición</option>
                <option>Edición especial</option>
                <option>Edición de lujo</option>
                <option>Edición aniversario</option>
                <option>Edición crítica</option>
                <option>25 aniversario</option>
                <option>Edición ilustrada</option>
                <option>Edición anotada</option>
                <option>Edición ampliada</option>
                <option>10ª edición</option>
                <option>Edición de bolsillo</option>
    </select>
                <input class="controls" type="text" name="pag" placeholder="Ingrese el numero de paginas" required>
                <input class="controls" type="text" name="desc" placeholder="Ingrese descriptores" required>
                <br>
                <input class="controls" type="textarea" name="obser" placeholder="Ingrese sus observaciones" required>
                <center>
                <input type="submit" class="btn btn-block ingresar" value="Crear">
          </center>
          
        <p><a href="menu.php" class="ol">Regresar</a></p>
        </section>
    </section>
</body>
</html>