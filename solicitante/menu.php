<?php
session_start();
$id = $_SESSION['username'];
$mensajeBienvenida = "¡Bienvenido, " . $id . "!";
if(!isset($id)){
    header("location: index.php");
}else{
// Pasar el mensaje personalizado a JavaScript utilizando una variable en HTML
echo '<input type="hidden" id="mensaje-bienvenida" value="' . $mensajeBienvenida . '">';

// Mostrar el mensaje personalizado en una alerta utilizando JavaScript
echo '<script>
        var mensajeBienvenida = document.getElementById("mensaje-bienvenida").value;
        alert(mensajeBienvenida);
    </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/menu.css">
    <title>Biblioteca Santa Maria</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <h1>Biblioteca Santa Maria</h1>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="consulta.php">Consultar libro</a></li>
                <!--
                <li><a href="ediusu.php">Editar informacion</a></li>-->
                <li><a href="reserva.php">Reservar</a></li>
                <li><a href="cerrarsesion.php" onclick="cerrarSesion()">Salir</a></li>
            </ul>
        </nav>
    </header>
    <article class="inf">
        
    </article>
    <script>
		function cerrarSesion() {
			// Utilizamos la función confirm() para mostrar el mensaje y pedir la confirmación del usuario
			if (confirm("¿Está seguro de que desea cerrar sesión?")) {
				// Si el usuario confirma, redirigimos a la página de cierre de sesión
				window.location.replace("menu.php");
			}
		}
	</script>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                    <img src="./img/logo.JPG" alt="Logo de Biblioteca">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una oranizacion que se preocupa por tu bienestar.</p>
                <p>Esperamos atender todas tus comodidades.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/people/Biblioteca-Publica-Primo-Feliciano-Velazquez-1961/100071004656381/" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.547973693482!2d-100.7376474!3d21.797748899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ac97347cb273d%3A0xab8f939a006a7e61!2sBiblioteca%20Mpal%20Primo%20Feliciano%20Vel%C3%A1zquez!5e0!3m2!1ses!2smx!4v1683439862519!5m2!1ses!2smx" width="100%" height="200px" style="border:0;"></iframe>
  
        </div>
     

        <div class="grupo-2">
            <small>&copy; 2023 <b>Biblioteca Santa Maria</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>