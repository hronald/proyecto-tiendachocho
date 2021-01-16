<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: ACTUALIZAR PRECIO DE ARTICULOS */

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";

$nombre_producto=$_POST['nombre_producto'];
$precio_unitario=$_POST['precio_unitario'];

//Creamos la sentencia SQL y la ejecutamos
$actualizar="UPDATE productos SET precio_unitario='$precio_unitario' WHERE nombre_producto='$nombre_producto'";

$result = mysqli_query($link,$actualizar);
echo "<center>";
echo "<h3> Registro Actualizado </h3>";
echo "<BR>Para regresar a la p&aacutegina principal<BR>";
echo "HAGA CLICK EN <a href=tiendas_chocho.php>REGRESAR</a>";
echo "</center>";
echo "</body>";
?>
