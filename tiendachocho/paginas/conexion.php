<?php

/ **
 * Una breve historia de los comentarios de estilo.
 * *
* Este es el comentario típico de estilo C de JavaDoc. Comienza con dos
 * asteriscos
 * *
* @version 1.0
 * /



 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: CONECTAR A LA BASE DE DATOS
  */
 
/*
@brief Conectar a la base de datos
*/
$host ="localhost";
$user = "root";
$clave = "";
$bd = "tiendas_chocho";

$link = mysqli_connect($host, $user, $clave, $bd);
?>