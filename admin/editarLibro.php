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
    $nombre=$_POST['nomlib'];
    $editorial=$_POST['editorial'];
    $edicion=$_POST['edicion'];
    $numpag=$_POST['numpag'];
    $descriptores=$_POST['descriptores'];
    $observaciones=$_POST['observaciones'];
    // Validar los datos (aquí se pueden agregar más validaciones según sea necesario)
    
        // Construir la consulta SQL UPDATE
        $sql = "UPDATE libros SET nombre='$nombre', editorial='$editorial', edicion='$edicion', numpag='$numpag', descriptores='$descriptores', observaciones='$observaciones' WHERE idlibro=$id";
        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo '<script>
            alert("Registro actualizado correctamente");
            window.location.href=
            "./consulta.php";
        </script>';
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    
} else { // Si no se ha enviado el formulario de edición
    // Obtener los datos del registro que se desea editar
    $sql = "SELECT * FROM libros WHERE idlibro=$id";
    $resultado = mysqli_query($conexion, $sql);
    $registro = mysqli_fetch_assoc($resultado);
    // Mostrar un formulario con los datos del registro
    ?>
    <form method="post">
        Nombre: <input type="text" name="nomlib" value="<?php echo $registro['nombre']; ?>"><br>
        Editorial: <input type="text" name="editorial" value="<?php echo $registro['editorial']; ?>"><br>
        Edicion: <input type="text" name="edicion" value="<?php echo $registro['edicion']; ?>"><br>
        Numero de paginas: <input type="text" name="numpag" value="<?php echo $registro['numpag']; ?>"><br>
        Descriptores: <input type="text" name="descriptores" value="<?php echo $registro['descriptores']; ?>"><br>
        Observaciones: <input type="text" name="observaciones" value="<?php echo $registro['observaciones']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
    <?php
}

// Cerrar la conexión
mysqli_close($conexion);
?>