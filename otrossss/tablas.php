<?php 
     include "../inc/dbinfo.inc";
$conexion = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
<?php
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
					echo $row['usuario'];
					echo $row['idUsuario'];
	
					
			}
	}
?>

<section class="ftco-section">
<div class="container p-2">
    <div class="row">
<div class="col-md-12">
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                              <th>Cedula usuario</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                              <th>Observaciones</th>
                              <th>idEstado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $sql = "SELECT * FROM Dispositivo";
                         //crear variable para hacer consulta
                         $consulta = mysqli_query($conexion,$sql);
                         while($campos=mysqli_fetch_array($consulta)) {?>
                         <tr>
                         <?php
                         $numCliente = $campos['idCliente']; 
                         $sql1 = "SELECT cedula FROM Cliente WHERE idCliente='$numCliente'";
                         //crear variable para hacer consulta
                         $consulta1 = mysqli_query($conexion,$sql1);
                         $row1=mysqli_fetch_array($consulta1);
                         $cedula=$row1['cedula'];
                         ?>

                             <td><?= $cedula; ?></td>
                             <td><?=$campos['marca']; ?></td>
                             <td><?=$campos['modelo']; ?></td>
                             <td><?=$campos['observaciones']; ?></td>
                             <td><?=$campos['idEstado']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
            </div>
    </div>
                     <div class="row justify-content-md-center">
                     <div  >
                     <form action="SamplePage.php" method="POST" enctype="multipart/form-data">
                        <input type="submit" class="btn btn-warning btn-block" name="salir" value="Salir">
                     </form>
                    </div><br>
                    </div>

</div>
</section>





