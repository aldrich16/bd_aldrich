<?php

  include("conexion.php");
  $matricula= $_REQUEST['matricula'];
  $query="DELETE FROM alumnos
  WHERE matricula='$matricula'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:index.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>