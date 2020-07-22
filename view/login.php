
<html>
<head>
 <title>Formulario Login</title>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,maximun-scale=1,minimun-scale=1">
    <link rel="stylesheet" href="estilos.css">
 </head> 
  <body background="..//img/libros.png">
     
   <style>
 input[type=text], select { 
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
}
input[type=password], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
       }

input[type=submit] {
   width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid green;
    border-radius: 4px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
      <br>
      <br>
      <br>
      <center>
   <form action="validar.php" method="post">
    <h1 style="color:white;"> FORMULARIO LOGIN  BIBLIOTECA</h1>  
     <input type="text" placeholder="&#128272;Usuario"  name="usuario" >
       <input type="password" placeholder="&#128272;Contraseña" name="clave">
     <input type="submit" value="Ingresar">
      </form> 
      </center>        
     </body> 
    </html>

