<?php
include("conectar.php");
$con=conectar();
$usu=$_POST['usuario'];
$cla=$_POST['clave'];

$sql="update solicitantes set clave='$cla' where usuario='$usu'";
$query= mysqli_query($con,$sql);

if($query){
    echo '<script>
    alert("Se restauro su clave");
    window.location.href=
    "./olvide.php";
</script>';
    
}else {
    echo '<script>
    alert("No se restauro su clave");
    window.location.href=
    "./olvide.php";
</script>';
}
?>