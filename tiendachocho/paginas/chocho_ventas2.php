<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: REALIZAR VENTAS */

//Conecta a MYSQL
require '../conexion/conexion.php';

print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";
//Variables donde se guardan los datos que se toman del formulario
$fecha_venta=$_POST['fecha_venta'];
$sucursal=$_POST['sucursal'];
$vendedor=$_POST['vendedor'];

$nombre_producto1=$_POST['nombre_producto1'];
$cantidad_producto1=$_POST['cantidad_producto1'];
$precio_unitario1=$_POST['precio_unitario1'];

$nombre_producto2=$_POST['nombre_producto2'];
$cantidad_producto2=$_POST['cantidad_producto2'];
$precio_unitario2=$_POST['precio_unitario2'];


$total_vproducto1=$cantidad_producto1*$precio_unitario1;
$total_vproducto2=$cantidad_producto2*$precio_unitario2;

$total_venta=($total_vproducto1+$total_vproducto2);

$tipo_pago=$_POST['tipo_pago'];



//Cambio de tipo de dato 'INT' a 'TEXT' del combo box 'unidad'
switch ($vendedor){
case 0:
$v_vendedor="Vendedor1";
break;
case 1:
$v_vendedor="Vendedor2";
break;
case 2:
$v_vendedor="Vendedor3";
break;
}

//Cambio de tipo de dato 'INT' a 'TEXT' del combo box 'sucursal'
switch ($sucursal){
case 0:
$v_sucursal="Merida";
break;
case 1:
$v_sucursal="Tizimin";
break;
case 2:
$v_sucursal="Valladolid";
break;
}

//Cambio de tipo de dato 'INT' a 'TEXT' del combo box 'tipo_pago'
switch ($tipo_pago){
case 0:
$v_tipo_pago="Efectivo";
break;
case 1:
$v_tipo_pago="Tarjeta bancaria";
break;
case 2:
$v_tipo_pago="Vales";
break;
}
echo "<center>";
//Impresión de los campos que se tomaron del formulario
echo "
<table>
<tr> 
<td><H3>Ticket de Compra</H3>
</tr>
<table>
<tr> 
<td>Fecha: $fecha_venta
<td>Sucursal: $v_sucursal
</tr>
<tr> 
<td>Vendedor: $v_vendedor
</tr>
<tr>
<td><B>Producto
<td><B>Cantidad
<td><B>Precio Unitario
<td><B>Total
</tr>
<tr>
<td>$nombre_producto1
<td>$cantidad_producto1
<td>$precio_unitario1
<td>$total_vproducto1
</tr>
<tr>
<td>$nombre_producto2
<td>$cantidad_producto2
<td>$precio_unitario2
<td>$total_vproducto2
</tr>
<tr>
<td colspan='2'>Forma de pago: $v_tipo_pago
<td>
<tdcolspan='2'>TOTAL: $total_venta
<td>
</tr>

</table>



";

 // Mensaje de error al no conectarse con DB
if (!$link){
echo "ERROR al abrir la base de datos"."Vuelve a intentar";
exit();
}
// Conexión con la DB 'tiendas_chocho'

//Insertando registros en la DB 'tiendas_chocho' y en la tabla 'ventas'
$meter_venta="INSERT INTO ventas(folio_venta,fecha_venta,sucursal,nombre_vendedor,total_venta,tipo_pago) VALUES ('','$fecha_venta','$v_sucursal','$v_vendedor','$total_venta','$v_tipo_pago')";

$meter_detalleventas="INSERT INTO detalleventas(folio_venta,clave_producto,nombre_producto,cantidad,precio_unitario,compra_total) VALUES ('','','$nombre_producto1','$cantidad_producto1','$precio_unitario1','$total_vproducto1')";

//Descuenta la cantidad en la DB 'relojeria' y en la tabla 'cantidad' de acuerdo al nombre del articulo
$actualizar_inventario="UPDATE productos SET cantidad=(cantidad-$cantidad_producto1) WHERE nombre_producto='$nombre_producto1'";



$result = mysqli_query($link,$meter_venta);
$result1 = mysqli_query($link,$meter_detalleventas);
$result2 = mysqli_query($link,$actualizar_inventario);


echo "<h3> Venta realizada con exito </h3>";
//Cerrando conexión con la DB
mysqli_close($link); 
echo "Para otra venta Click en <a href=chocho_ventas1.php>COBRAR</a><BR><BR>";
echo "Para regresar Click en <a href=tiendas_chocho.php>REGRESAR</a>"; 
echo "</center>";
echo "</body>";
?>