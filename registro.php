
<?php
include ('conexion.php');


if (isset($_POST['boton-enviar'])) {
	$rut = $_POST['rut'];

	$consult = "SELECT * FROM PERSONAL WHERE RUT = '".$rut."'";

	$cons= $mysqli ->query($consult); //se usa para comprobar registros.

	if (mysqli_num_rows($cons)== 0) {

		if ($_POST['contrasena1']==$_POST['contrasena2']) {
			
			$rut = $_POST['rut'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$cargo = $_POST['cargo'];
			$contraseña = md5($_POST['contrasena2']);

			$consulta = "INSERT INTO PERSONAL VALUES ('$rut','$nombre','$apellido','$cargo','$contraseña')";
			$mysqli->query($consulta) or die("No se pudo crear registro.");
			
			header("Location:crear_personal.php?valida=si");
			
		} else {
			header("Location:crear_personal.php?errornea=si");
		}
		
	}else {
		header("Location:crear_personal.php?yaexiste=si");

	}
}

?>