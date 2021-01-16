<html>

 <!-- 
 Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: CAPTURA NOMBRE DE ARTICULOS PARA ACTUALIZAR -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tiendas Chocho</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap-tour/css/bootstrap-tour-standalone.min.css">
  <script src="../jquery/jquery-1.8.2.min.js"></script>
  <script src="../bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
  <script src="../ayuda/Ayudacambios.js"></script>
</head>
<body style='background-color:#EFEFEF;'>
<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>
<body style='background-color:#EFEFEF;'>
<div align="center">
<h1>Actualizar un registro</h1>
<br>

<?php 
require '../conexion/conexion.php';

echo '<FORM METHOD="POST" ACTION="chocho_actualizar2.php">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos
$result=mysqli_query($link, "SELECT nombre_producto From productos Order By nombre_producto ");

echo '<select name="nombre_producto">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["nombre_producto"];}
 ?>
</select>

<table border="0">
<tr>
<td><center>Precio</center>
</tr>
<tr>
<td colspan="2"><center><div id="ayudaprecio"><input tyoe="number" name="precio_unitario" style="width:70px"></div></center></td>
</tr>
<tr>
<td colspan="2"><center><div id="ayudaactualizar"><input type="submit" value="Actualizar"></div></center></td>
</tr>
<tr>
<center><td><center><div>Click para obtener<div id="ayudatour" button onclick="Ayudacambios();"><b><u>Ayuda</u></b>  
</div></div></center></td>
</tr>
<tr>
<td>Para regresar a la p&aacutegina principal<BR>
HAGA CLICK EN <a href=tiendas_chocho.php>REGRESAR</a></td>
</tr>
<br>
</div>
</table>
</FORM>
</body>
</html>