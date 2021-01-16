<?php
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: FUNCION PARA CERRAR SESION */

session_start();
session_destroy();
header('location:../index.php');
?>