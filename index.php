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
  </head>
 </head>
 <body >
  <div>

<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">

  <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"></a>
  </li>

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
<th>Matricula</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<tr>

<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($row=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $row['matricula'] ?></td>
			<td><?php echo $row['nombre'] ?></td>
			<td><?php echo $row['apellido'] ?></td>
			<td><?php echo $row['direccion'] ?></td>
       <td>
      <a href="modificaralumno.php?id=<?php echo $row['matricula'];?>" >  
      <img src="https://cdn5.dibujos.net/dibujos/pintados/201125/f2db30b527a16bfea022e7c6e9dcb93f.png"width="50px" height="50px">

    
  </a>
</td>
<td>
<a type="submit" class="btn btn-outline-success" href="eliminaralumno.php?matricula=<?php echo $row['matricula'];?>">
    <img src="https://www.vippng.com/png/detail/480-4804163_utiles-escolares-animados-escolar-animado-goma-de-borrar.png"width="50px" height="50px">
  </a>
</td>
</tr>
		</tr>
	


<?php  
}
?>
<a type="submit" class="btn btn-outline-success" href="agregaralumno.php">Agregar Alumno

   </a>
</table>
<br>
<!-------------------------------------->
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