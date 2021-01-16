<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: MUESTRA MENU */
 echo "<title>Tiendas Chocho</title>";
print "<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>";
echo "<body style='background-color:#EFEFEF;'>";
//Función creado como mensaje de bienvenida.
class promocional{
function marquesina($imagen){
echo "
<marquee> $imagen </marquee>";
}
//Función creada para mostrar nombre de la tienda
function nombre_chocho(){
echo "<H1><CENTER>";
echo "Tiendas Chocho";
echo "</center></h1>";
}}
$objpromocional = new promocional();
$objpromocional -> nombre_chocho();;

// Genera el menu del sistema
$Reporte ="<form action='chocho_reporte.html'><input type='submit' value='REPORTE DE ARTICULOS'/></form>";
$Altas = "<form action='chocho_altas.html'><input type='submit' value='ALTA DE ARTICULOS'/></form>";
$Modificar ="<form action='chocho_actualizar1.php'><input type='submit' value='CAMBIO DE PRECIOS'/></form>";
$Bajas = "<form action='chocho_bajas.html'><input type='submit' value='BAJA DE ARTICULOS'/></form>";
$Ventas ="<form action='chocho_ventas1.php'><input type='submit' value='REALIZAR UNA VENTA'/></form>";
$Consultar_Ventas ="<form action='chocho_consultaventas.html'><input type='submit' value='CONSULTA DE VENTAS'/></form>";
//Arreglo creado para presentar las diferentes acciones que realiza el sistema en pantalla.
$opciones = array ($Reporte, $Altas, $Modificar, $Bajas, $Ventas, $Consultar_Ventas);
for ($i = 0; $i < 6; $i++) {
echo "<CENTER>";
echo $opciones[$i];
echo "</CENTER>";
}
echo "</body>";

/**
 * @brief Descripción resumida
 * Aqui sigue siendo un resumen
 *
 * Esto ya es la descripción detallada
 */
echo "
<P ALIGN=center>Para cerrar sesi&oacute;n<BR>
HAGA CLICK EN <a href=salir.php>SALIR</a><P ALIGN=center>
";
echo "<br>";
$objpromocional -> marquesina("<img src= ../imagenes/cocoms.png width=400 height=100></CENTER>");
?>


