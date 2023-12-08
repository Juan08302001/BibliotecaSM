<?php

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "bibliotecasm");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
}

// Obtener el ID del registro a editar
$id = $_GET['id'];

// Si se ha enviado el formulario de edición
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos modificados del formulario
    $nombre=$_POST['nombre'];
    $apepat=$_POST['apellidopat'];
    $apemat=$_POST['apellidomat'];
    $edad=$_POST['edad'];
    $domicilio=$_POST['domicilio'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    // Validar los datos (aquí se pueden agregar más validaciones según sea necesario)
    
        // Construir la consulta SQL UPDATE
        $sql = "UPDATE solicitantes SET nombre='$nombre', apellidopat='$apepat', apellidomat='$apemat', 
        edad='$edad', domicilio='$domicilio', usuario='$usuario', clave='$clave' WHERE idsolicitante=$id";
        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo '<script>
        alert("Se actualizo correctamente");
        window.location.href=
        "./ediusu.php";
    </script>';
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    
} else { // Si no se ha enviado el formulario de edición
    // Obtener los datos del registro que se desea editar
    $sql = "SELECT * FROM solicitantes WHERE idsolicitante=$id";
    $resultado = mysqli_query($conexion, $sql);
    $registro = mysqli_fetch_assoc($resultado);
    // Mostrar un formulario con los datos del registro
    ?>
    <form method="post">
        Nombre: <input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>"><br>
        Apellido paterno: <input type="text" name="apellidopat" value="<?php echo $registro['apellidopat']; ?>"><br>
        Apellido materno: <input type="text" name="apellidomat" value="<?php echo $registro['apellidomat']; ?>"><br>
        Edad: <input type="text" name="edad" value="<?php echo $registro['edad']; ?>"><br>
        Direccion: <input type="text" name="domicilio" value="<?php echo $registro['domicilio']; ?>"><br>
        Usuario: <input type="text" name="usuario" value="<?php echo $registro['usuario']; ?>"><br>
        Clave: <input type="text" name="clave" value="<?php echo $registro['clave']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
    <?php
}

// Cerrar la conexión
mysqli_close($conexion);
?>