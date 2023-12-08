<?php
include("conectar.php");
$con=conectar();
$nom=$_POST['nom'];
$apePat=$_POST['apepat'];
$apeMat=$_POST['apemat'];
$dire=$_POST['direccion'];
$usu=$_POST['libro'];
$cla=$_POST['editorial'];
$fecha=$_POST['calendario'];

$sql="INSERT INTO `reserva` (`idreserva`, `nombre`, `apepat`, `apemat`, `domicilio`, `nombrelibro`, `editorial`, `fecha_reserva`) VALUES 
(NULL, '$nom', '$apePat', '$apeMat', '$dire', '$usu', '$cla', '$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    echo '<script>
    alert("Se registro la reserva");
    window.location.href=
    "./reserva.php";
</script>';
    
}else {
    echo "no se creo la reserva";
}
?>