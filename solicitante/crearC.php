<?php
include("conectar.php");
$con=conectar();
$id=_POST['id'];
$nom=$_POST['nombre'];
$apePat=$_POST['apePat'];
$apeMat=$_POST['apeMat'];
$edad=$_POST['edad'];
$dire=$_POST['direccion'];
$usu=$_POST['usuario'];
$cla=$_POST['clave'];

$sql="INSERT INTO solicitantes values('$id','$nom', '$apePat', '$apeMat', '$edad', '$dire', '$usu', '$cla')";

$query= mysqli_query($con,$sql);

if($query){
    echo '<script>
    alert("Se creo cuenta correctamente");
    window.location.href=
    "./cuenta.php";
</script>';
    
}else {
    echo "no se creo la cuenta";
}
?>