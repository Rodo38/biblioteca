
<!-- Inclución de archivos requeridos -->
<?php
include ('sesion.php');
?>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Modificar personal</title>
	<link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<body>
	
	<div class="contenedor">
		<div class= "encabezado">
			<div class="izq">

				<?php
				include ('conexion.php');

				$rut = $_SESSION["usuario"];
				$consulta="SELECT * FROM PERSONAL WHERE RUT ='$rut' ";
				$ejecutar= $mysqli ->query($consulta);

				$result = mysqli_fetch_array($ejecutar);
				$nom = $result['nombre'];
				$ape = $result['apellido'];
				?>


				<p>Bienvenido/a:<br><?php echo "$nom $ape"; ?></p>

			</div>

			<div class="centro">
				<a href=principalAdmin.php><center><img src='imagenes/home.png'><br>Home<center></a> 
				</div>
				
				<div class="derecha">
					<a href="salir.php?sal=si"><img src="imagenes/cerrar.png"><br>Salir</a>
				</div>
			</div>
			<br><h1 align='center'>REGISTROS EXISTENTES</h1><br>
			<?php
			include('conexion.php');

			$consulta="SELECT * FROM PERSONAL";
			$ejecutar=$mysqli->query($consulta);
			
			echo "<table  width='80%' align='center'><tr>";	         	  
			echo "<th width='20%'>RUT</th>";
			echo "<th width='20%'>NOMBRE</th>";
			echo "<th width='20%'>APELLIDO</th>";
			echo "<th width='20%'>CARGO</th>";
			echo  "</tr>"; 
			
			while($result=mysqli_fetch_array($ejecutar)){	
				
				echo "<tr>";	         	  
				echo '<td width=20%>'.$result['rut'].'</td>';
				echo '<td width=20%>'.$result['nombre'].'</td>';
				echo '<td width=20%>'. $result['apellido'].'</td>';
				echo '<td width=20%>'.$result['cargo'].'</td>';
				echo "</tr>";
			}
			echo "</table></br>";
			?>


			<div class="encabezado">
				<h1>Modificar personal</h1>
			</div>

			<div class="formulario">
				<form ="registro" method="post" action="" enctype="application/x-www-form-urlencoded">

					<div class="campo">
						<label name="Seleccionar">Ingresa el Rut del registro a modificar:</label>
						<input name='seleccionar' type="text" required>
					</div>

					<div class="campo">
						<div class="en-linea izquierdo">
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre" required/>
						</div>

						<div class="en-linea">
							<label for="apellido">Apellido:</label>
							<input type="text" name="apellido" required/>
						</div>
					</div>

					<div class="campo">
						<label for="cargo">cargo:</label>
						<select name="cargo" required/>
						<option>Admin</option>
						<option>Bodega</option>
					</select>
				</div>

				<div class="botones">
					<input type="submit" name="modificar" value="Modificar"/>
				</div>
			</form>
			<?php
			
				    //verifica el boton modificar
			if (isset($_POST['modificar'])) {

						//recupera el valor
				$seleccionar = $_POST['seleccionar'];

						//No permite modificar admin principal
				if ($seleccionar == '180332403') {
					echo "<script lenguaje='javascript'>alert('Admin general no puede ser modificado');</script>";
				}else {

					$nombre = $_POST['nombre'];
					$apellido = $_POST['apellido'];
					$cargo = $_POST['cargo'];
					
					$sentencia = "UPDATE PERSONAL SET NOMBRE='$nombre' , 
					APELLIDO='$apellido', CARGO='$cargo'WHERE RUT = '$seleccionar' ";
					$mysqli -> query($sentencia);
					
					header('Location:mod_personal.php');
					
				}
			}
			
			?>
		</div>
	</div>
</body>
</html>		