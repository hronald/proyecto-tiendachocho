<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: RECIBE ALTA DE ARTICULOS */

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";
//Variables donde se guardan los datos que se toman del formulario
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$unidad=$_POST['unidad'];
$perecedero=$_POST['perecedero'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

//Cambio de tipo de dato 'INT' a 'TEXT' del combo box 'unidad'
switch ($unidad){
case 0:
$v_unidad="Kilo";
break;
case 1:
$v_unidad="Pieza";
break;
case 2:
$v_unidad="Gramos";
break;
}
echo "<center>";
//Impresión de los campos que se tomaron del formulario
echo "<br><br>";
echo "<h2>Datos del producto ingresado<h2>";
echo "
<table border='1'>
<tr>
<td> Clave: 
<td> $clave
</tr>
<tr>
<td>Nombre:
<td>$nombre
</tr>
<tr>
<td>Marca:
<td>$marca
</tr>
<tr>
<td> Unidad:
<td> $v_unidad
</tr>
<tr>
<td> Perecedero: 
<td> $perecedero
</tr>
<tr>
<td> Cantidad: 
<td> $cantidad
</tr>
<tr>
<td> Precio : $ 
<td> $precio
</tr>
</table>
";


// Mensaje de error al no conectarse con DB
if (!$link){
echo "ERROR al abrir la base de datos"."Vuelve a intentar";
exit();
}
// Conexión con la DB 'tiendas_chocho'

//Insertando registros en la DB 'tiendas_chocho' y en la tabla 'productos'
$meter="INSERT INTO productos(clave_producto,nombre_producto,marca,unidad,perecedero,cantidad,precio_unitario) VALUES ('$clave','$nombre','$marca','$v_unidad','$perecedero','$cantidad','$precio')";

$result = mysqli_query($link,$meter);
echo "<h3> Datos registrados con exito </h3>";
//Cerrando conexión con la DB
mysqli_close($link);
echo "<BR>Para regresar a la p&aacutegina principal<BR>";
echo "HAGA CLICK EN <a href=tiendas_chocho.php>REGRESAR</a>";
echo "</center>";
echo "</body>";
?>