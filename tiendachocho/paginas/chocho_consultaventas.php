<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: CONSULTAR VENTAS POR FOLIO DE VENTA*/

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";


//Variable donde se guardan los datos que se toman del formulario
$folio_venta=$_POST['folio_venta'];
//Verificador de los valores que se toman.
echo "<center>";
echo "<br><br>";
echo "Datos de la venta con folio: ".$folio_venta."<br><br>";
// Mensaje de error al no conectarse con DB
if (!$link){
echo "ERROR al abrir la base de datos"."Vuelve a intentar";
exit();
}
// Conexión con la DB 'tiendas_chocho'

//Realizando la consulta en la DB 'tiendas_chocho' y en la tabla 'folio_venta'
$result = mysqli_query($link,"SELECT * FROM ventas WHERE folio_venta = $folio_venta");
//Arreglo para presentar los registros devueltos por la consulta
if($row=mysqli_fetch_array($result)){
echo "<table border='1'> \n";
echo "<tr>";
echo "<td><b>FOLIO VENTA</b></td>";
echo "<td><b>FECHA</b></td>";
echo "<td><b>SUCURSAL</b></td>";
echo "<td><b>VENDEDOR</b></td>";
echo "<td><b>TOTAL VENTA</b></td>";
echo "<td><b>TIPO DE PAGO</b></td>";
echo "</tr>";
do{
echo "<td align=center>".$row["folio_venta"]."</td>";
echo "<td>".$row["fecha_venta"]."</td> \n";
echo "<td align=center>".$row["sucursal"]."</td> \n";
echo "<td align=center>".$row["nombre_vendedor"]."</td> \n";
echo "<td align=center>".$row["total_venta"]."</td> \n";
echo "<td align=center>".$row["tipo_pago"]."</td> \n";
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