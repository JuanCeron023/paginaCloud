<!DOCTYPE html> <html lang="en" > <?php include "../inc/dbinfo.inc"; ?> 
<head>
  <meta charset="UTF-8"> <title>login</title> </head> <body> <?php $bool 
= True;

  $conexion = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);




 if (isset($_POST['listo']))
	{  $nombre=$_POST['nombre']; $pass=($_POST['pass']); $sql="SELECT 
			* FROM Usuario WHERE usuario='$nombre' AND 
			contrasena='$pass'"; 
			$consulta=mysqli_query($conexion,$sql); 
			if(!$consulta) {
				die("consulta 
				fallida".$conexion->connect_error);
			}
			else { $row=mysqli_fetch_array($consulta); 
			if(is_null ($row)) {
				$bool = False; if ($bool==False){ ?> <h4 
	style="color:red" align='center'>Datos incorrectos</h4> <?php }
			}
			else { header("Location: tablas.php");
			}
	
	
					
			}
	}
?> <!-- partial:index.partial.html --> <div class="wrapper"> <div 
	class="container">
		<h1 style="color:white">Bienvenido</h1>
		
		<form class="form" action="SamplePage.php" method="POST" > 
			<input name="nombre" type="text" 
			placeholder="Usuario"> <input name="pass" 
			type="password" placeholder="Contraseña"> 
			<button name="listo" type="submit" 
			id="login-button">Login</button>
		</form> </div>
	
	
	<ul class="bg-bubbles"> <li></li> <li></li> <li></li> <li></li> 
		<li></li> <li></li> <li></li> <li></li> <li></li> 
		<li></li>
	</ul> </div> <!-- partial --> </body>
</html>
