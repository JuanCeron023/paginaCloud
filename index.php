<!DOCTYPE html>
<html lang="en" >
<?php 
    include "lib/conexion.php";
    include "lib/header.php";
?>
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php include "lib/header.php";
include "lib/conexion.php";
?>
<?php
$bool = True;
if (isset($_POST['listo']))
	{
			$nombre=$_POST['nombre'];
			$pass=($_POST['pass']);

			$sql="SELECT * FROM Usuario WHERE usuario='$nombre' AND contrasena='$pass'";
			$consulta=mysqli_query($conexion,$sql);
			if(!$consulta)
			{
				die("consulta fallida".$conexion->connect_error);
			}
			else
			{
					$row=mysqli_fetch_array($consulta);
			if(is_null ($row))
			{
				$bool = False;
	if ($bool==False){ ?> 
	<h4 style="color:red" align='center'>Datos incorrectos</h4>
	<?php } 
			}
			else
			{
			 header("Location: tablas.php");
			}
	
	
					
			}
	}
?>


<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1 style="color:white">Bienvenido</h1>
		
		<form class="form" action="index.php" method="POST" >
			<input name="nombre" type="text" placeholder="Usuario">
			<input name="pass" type="password" placeholder="Contraseña">
			<button name="listo" type="submit" id="login-button">Login</button>
		</form>

	</div>
	
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
<?php include "lib/footer.php";
?>
</body>
</html>
