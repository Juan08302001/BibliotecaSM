<?php

include("conectar.php");
$con=conectar();

$id = $_GET['id'];

// Construir la consulta SQL DELETE
$sql = "DELETE FROM libros  WHERE idlibro=$id";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>
        alert("Se elimino correctamente");
        window.location.href=
        "./consulta.php";
    </script>';
    }
?>
