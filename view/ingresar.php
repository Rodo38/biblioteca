<html>
<head>
    
	<title> Ingresar Libro</title>
</head>
 <body background="..//img/biblioteca.png">   
<header>
    <center>
<br>
  <br>
     <br>
        <h2 style="color:white;">INGRESAR DATOS DEL LIBRO</h2>
        </center>
</header>
<form action='administrar_libro.php' method='post'>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 25%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

</style>
    <br>
    <center>
	<table>
		<tr>
			<td style="color:white;" >Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td style="color:white;">Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td style="color:white;">Fecha Edición:</td>
			<td><input type='text' name='edicion' ></td>
		</tr>
        <td style="color:white;">Pagina:</td>
			<td><input type='text' name='pagina' ></td>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
        </center>
    <center>
        <br>
	<input type='submit' value='Guardar'>
	<a href="index.php" style="color:white;">Volver</a>
        </center>
</form>
    </body> 
</html>