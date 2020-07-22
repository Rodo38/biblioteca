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
	<title>Mostrar Random</title>
</head>
<body  background="..//img/adn1.png">
    <center>
        <br>
    <h2 style="color:blue;">CADENA ADN</h2>
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
			<td style="color:blue;">Id_adn</td>
			<td style="color:blue;">Adn</td>
			<td style="color:blue;">Tipoadn</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td style="color:blue;"><?php echo $libro->getId_adn() ?></td>
				<td style="color:blue;"><?php echo $libro->getAdn() ?></td>
				<td style="color:blue;"><?php echo $libro->getTipoadn()?> </td>
			<?php }?>
		</body>
	</table>
        </center>
    <center>
    <br>
	<a href="index.php" style="color:blue;">Volver</a>
        </center>
</body>
</html>