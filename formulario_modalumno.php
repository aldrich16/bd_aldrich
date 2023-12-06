<?php
include ('conexion.php');
$matricula= $_POST ['txtmatricula'];
$nombre= $_POST ['txtnombre'];
$apellido= $_POST ['txtapellido'];
$direccion= $_POST ['txtdireccion'];

mysqli_query($conexion, "UPDATE `alumnos` SET `nombre` = '$nombre', `apellido` = '$apellido', `direccion` = '$direccion' WHERE `matricula` = '$matricula'") or die("error de actualizar");
mysqli_close($conexion);
header("location:index.php");
?>
