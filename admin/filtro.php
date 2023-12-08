<?php
sleep(1);
include('config.php');



$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM reserva WHERE  'fecha_reserva' BETWEEN '$fechaInit' AND '$fechaFin'  ORDER BY fecha_reserva ASC");
$query = mysqli_query($con, $sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Nombre del libro</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Fecha reserva</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
            <td><?php echo $i++; ?></td>
                    <td><?php echo $dataRow['nombre'] ; ?></td>
                    <td><?php echo $dataRow['apepat'] ; ?></td>
                    <td><?php echo $dataRow['apemat'] ; ?></td>
                    <td><?php echo '$ '. $dataRow['domicilio'] ; ?></td>
                    <td><?php echo $dataRow['nombrelibro'] ; ?></td>
                    <td><?php echo $dataRow['editorial'] ; ?></td>
                    <td><?php echo $dataRow['fecha_reserva'] ; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>