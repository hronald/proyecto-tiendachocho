<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: REALIZA BAJA DE ARTICULOS POR FOLIO*/

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";


//Variable donde se guardan los datos que se toman del formulario
$clave_producto=$_POST['clave_producto'];
echo "<center>";
echo "<b>Producto con clave: </b>" .$clave_producto."<br>";
// Mensaje de error al no conectarse con DB
if (!$link){
echo "ERROR al abrir la base de datos"."Vuelve a intentar";
exit();
}
// Conexión con la DB 'tiendas_chocho'

//Realizando la eliminación de un registro en la DB 'tiendas_chocho' y en la tabla 'clave_producto'
$result = mysqli_query($link,"SELECT * FROM productos WHERE clave_producto = $clave_producto");
//Arreglo para presentar los registros eliminados
if($row=mysqli_fetch_array($result)){
echo "<table border='1'> \n";
echo "<tr>";
echo "<td><b>CLAVE</b></td>";
echo "<td><b>NOMBRE</b></td>";
echo "<td><b>MARCA</b></td>";
echo "<td><b>UNIDAD</b></td>";
echo "<td><b>PERECEDERO</b></td>";
echo "<td><b>CANTIDAD</b></td>";
echo "<td><b>PRECIO UNITARIO</b></td>";
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
mysqli_query($link,"DELETE FROM productos WHERE clave_producto = $clave_producto");
echo "<center> <h3> Registro eliminado con exito!"." </h3></center>";
}
while($row=mysqli_fetch_array($result));
echo "</table>";
}
else
{
echo "<center> <h3>El producto con clave ".$clave_producto." no existe!"."</center> </h3";
}
echo "<BR>Para regresar a la p&aacutegina principal<BR>";
echo "HAGA CLICK EN <a href=tiendas_chocho.php>REGRESAR</a>";
echo "</center>";
echo "</body>";
?>