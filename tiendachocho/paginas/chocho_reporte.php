<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: GENERA REPORTE POR UNIDAD */

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";


//Variable donde se guardan los datos que se toman del formulario
$unidad=$_POST['unidad'];

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
echo "<br>";
echo "<br>";
echo "<b>Tipo de Unidad:</b> ".$v_unidad."<br><br>";
// Mensaje de error al no conectarse con DB
if (!$link){
echo "ERROR al abrir la base de datos"."Vuelve a intentar";
exit();
}
// Conexión con la DB 'tiendas_chocho'

//Realizando la consulta en la DB 'tiendas_chocho' y en la tabla 'productos'
$result=mysqli_query($link, "SELECT * FROM productos WHERE unidad = '$v_unidad' ");
//Arreglo para presentar los registros devueltos por la consulta

if($row=mysqli_fetch_array($result)){
echo "<table border='1'> \n";
echo "<tr>";
echo "<td><b>CLAVE</b></td>";
echo "<td><b>NOMBRE</b></td>";
echo "<td><b>MARCA</b></td>";
echo "<td><b>UNIDAD</b></td>";
echo "<td><b>PERECEDERO</b></td>";
echo "<td><b>CANTIDAD</b></td>";
echo "<td><b>PRECIO $$</b></td>";
echo "</tr>";
do{
echo "<td align=center>".$row["clave_producto"]."</td>";
echo "<td>".$row["nombre_producto"]."</td> \n";
echo "<td align=center>".$row["marca"]."</td> \n";
echo "<td align=center>".$row["unidad"]."</td> \n";
echo "<td align=center>".$row["perecedero"]."</td> \n";
echo "<td align=center>".$row["cantidad"]."</td> \n";
echo "<td align=center>".$row["precio_unitario"]."</td> \n";
echo "<tr>";
}while($row=mysqli_fetch_array($result));
echo "</table>";
}else
// Mensaje de error si la tabla no devuelve información
{
echo "<h3>No se encontraron coincidencias en la base de datos.</h3>";
}
echo "<BR>Para regresar a la p&aacutegina principal<BR>";
echo "HAGA CLICK EN <a href=tiendas_chocho.php>REGRESAR</a>";
echo "</center>";
echo "</body>";
?>