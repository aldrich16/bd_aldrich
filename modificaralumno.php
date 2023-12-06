<?php 

	$conexion=mysqli_connect('localhost','root','','db');

 ?>

<!DOCTYPE html>
<html lang="en">
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    <style>
    /* Estilos para el formulario */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    p {
        font-weight: bold;
        margin-top: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Estilos para el botón Guardar */
    .btn-save {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Estilos para el footer */
    footer {
        width: 100%;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: #29b830;
        padding: 30px;
    }
</style>

  
  </head>
 </head>
 <body >
  <div>

<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">

  <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"><img src="descarga.png" width="50" height="50"></a>
  </li>
  <!-- Button trigger modal -->
  <li class="nav-item">
    <div class="container">
<div class="btn-group">
      </div>
 </div>
 </li>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
  </div>
</div>
  </li>
</ul>
</nav>

<br>
<!-------------------------------------->
  <center>
  <h1> Alumno 
  </h1>
   <br>
   <br></center>
   <div class="container">
   <table class="table">
        <thead>
          <tr>

<?php 
$id = $_GET["id"];
		$sql="SELECT * from alumnos where matricula='$id'";
		$result=mysqli_query($conexion,$sql);

		while($row=mysqli_fetch_array($result)){
		 ?>
<form action="formulario_modalumno.php" method="POST">
    <h1>Alumno</h1>
    <div class="container">
        <div class="form-group">
            <label for="txtmatricula">Matricula</label>
            <input type="text" value="<?php echo $row['matricula'] ?>" name="txtmatricula" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtnombre">Nombre</label>
            <input type="text" value="<?php echo $row['nombre'] ?>" name="txtnombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtapellido">Apellido</label>
            <input type="text" value="<?php echo $row['apellido'] ?>" name="txtapellido" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtdireccion">Direccion</label>
            <input type="text" value="<?php echo $row['direccion'] ?>" name="txtdireccion" class="form-control">
        </div>
        <button type="submit" class="btn btn-save">Guardar</button>

		</tr>

<?php  
}
?>

</table>
<br>
<!-------------------------------------->

<div class="center">
        </div>
</form>
<style>
    footer {
    width: 100%;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #29b830;
    padding: 30px;
    
    }
    </style>
    <footer class="bg-white">
      <font>UTVT</font>
    </footer>

   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
         
 </body>
</html>