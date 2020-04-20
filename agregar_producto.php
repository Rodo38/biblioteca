<?php
include ('sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Agregar productos</title>
    <link rel="stylesheet" href="estilo.css"/>
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
                <?php

                // La siguiente validación verifica el cargo del usuario 
                // para asignar cual será la vista que tendrá del sistema (bodega o adminstración).

                $consulta = "SELECT CARGO FROM PERSONAL WHERE RUT = '$rut' ";
                $ejecutar = $mysqli -> query($consulta);
    
                $fila = $ejecutar->fetch_row();
                $cargo = $fila[0];

                if ($cargo=='Admin') {
                    echo "<a href=principalAdmin.php><center><img src='imagenes/home.png'><br>Home<center></a>";
                }else {
                    echo "<a href=principalBodega.php><img src='imagenes/home.png'><br>Home</a>";
                };

                error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING);
                ?> 
            </div>
            
            <div class="derecha">
                <!-- La siguiente línea corresponde al links con imagen para finalizar sesión, que redirige a la página salir.php con la varible "sal=si" que destruye la sesión y nos 
                    muestra la pagina del login. -->
                    <a href="salir.php?sal=si"><img src="imagenes/cerrar.png"><br>Salir</a>
                </div>
            </div>
            <br><h1 align="center">GESTIÓN DE PRODUCTOS</h1>     

            <div class="formulario">
                <form name="registro" method="post" action="agregar_producto.php" enctype="application/x-www-form-urlencoded">
                    <div class="campo">
                        <label for="codigo">Código del producto:</label>
                        <input type="text" name="codigo" required/>
                    </div>

                    
                    <div class="campo">
                        <label for="nombre">Descripción:</label>
                        <input type="text" name="descripcion" required/>
                    </div>

                    <div class="campo">
                        <label for="stock">Stock:</label>
                        <input type="number" name="stock" required/>
                    </div>
                    

                    <div class="campo">
                        <label for="proveedor">Proveedor:</label>
                        <input type="text" name="proveedor" required/>
                    </div>

                    <div class="campo">
                        <label for="fecha">Fecha ingreso:</label>
                        <input type="date" name="fecha" required/>
                    </div>

                    <div class="botones">
                        <input type="submit" name="crear" value="Agregar producto"/>
                    </div>
                    <?php

                    $codigo = $_POST['codigo'];

                    $consulta = "SELECT * FROM PRODUCTOS WHERE COD_PRODUCTO = ".$codigo;
                        //¿Existen registros?
                    $comprobar_existencia= $mysqli ->query($consulta); 

                    if (mysqli_fetch_array($comprobar_existencia)!=null ) {
                        echo "Ya existe un producto asociado al código ingresado, intentelo nuevamente";
                    }else {

                        //Si no existe el registro, se agregará a la base de datos.
                        $descripcion = $_POST['descripcion'];
                        $stock = $_POST['stock'];
                        $proveedor = $_POST['proveedor'];
                        $fecha = $_POST['fecha'];

                        $consulta = "INSERT INTO PRODUCTOS VALUES 
                        ('$codigo','$descripcion','$stock','$proveedor','$fecha')";
                        $mysqli->query($consulta);    
                    }

                    ?>

                </form>
            </div>

        </div>
    </body>
    </html>