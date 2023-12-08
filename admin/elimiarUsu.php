<?php

include("conectar.php");
$con=conectar();

$id = $_GET['id'];

// Construir la consulta SQL DELETE
$sql = "DELETE FROM solicitantes  WHERE idsolicitante=$id";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>
        alert("Se elimino correctamente");
        window.location.href=
        "./ediusu.php";
    </script>';
    }
?>
