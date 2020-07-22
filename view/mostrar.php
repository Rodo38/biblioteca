<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Libros</title>
</head>
<body  background="..//img/biblio.png">
    <center>
        <br>
    <h2 style="color:white;"> LISTADO DE LIBROS </h2>
        </center>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
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
    <center>
    <br>
    <br>
	<table border=1>
		<head>
			<td style="color:white;">Nombre</td>
			<td style="color:white;">Autor</td>
			<td style="color:white;">Edicion</td>
            <td style="color:white;">Paginas</td>
			<td style="color:white;">Actualizar</td>
			<td style="color:white;">Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td style="color:white;"><?php echo $libro->getNombre() ?></td>
				<td style="color:white;"><?php echo $libro->getAutor() ?></td>
				<td style="color:white;"><?php echo $libro->getAnio_edicion()?> </td>
                <td style="color:white;"><?php echo $libro->getPagina()?> </td>
				<td style="color:white;"><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a" style="color:white;">Actualizar</a> </td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e" style="color:white;">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
        </center>
    <center>
    <br>
	<a href="index.php" style="color:white;">Volver</a>
        </center>
</body>
</html>