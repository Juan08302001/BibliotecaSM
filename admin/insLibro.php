<?php
include("conectar.php");
$con=conectar();
$nombre=$_POST['nomlib'];
$editorial=$_POST['editorial'];
$edicion=$_POST['edicion'];
$numpag=$_POST['pag'];
$descriptores=$_POST['desc'];
$observaciones=$_POST['obser'];
$sql="insert into libros values('default','$nombre','$editorial',
'$edicion','$numpag','$descriptores','$observaciones')";
$query= mysqli_query($con,$sql);

if($query){
    
    echo '<script>
        alert("Se registro correctamente");
        window.location.href=
        "./libro.php";
    </script>';
}else {
    echo "No registro";
}
?>

