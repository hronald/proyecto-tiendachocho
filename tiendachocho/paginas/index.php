<?php 
 /*Autor:EQUIPO COCOMS
 Fecha:09/05/2020
 Funcion: LOGIN DE USUARIO
 USUARIO: usuario
 PASSWORD: usuario */
 ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Tienda Chocho</title>
   <link rel="stylesheet" type="text/css" href="bootstrap-tour/css/bootstrap-tour-standalone.min.css">
   <script src="jquery/jquery-1.8.2.min.js"></script>
   <script src="bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
   <script src="ayuda/Ayudalogin.js"></script>
</head>

<body>
<form action="index.php" method="POST">
	<center><img src="https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png" width=800 height=180>
			<br><br>
			<center><font face="Arial" size=20>Bienvenido</font>
		<br><br>
		    
		    <table>
		    <tr>
			<th>Usuario :</th>
			<th> 
				<div id="ayuuser"><input  type="text" name="user"></div>
			</th>		
		    </tr>
		    <tr>
		    <th> Constraseña :</th>
		    <th> 
		    <div  id="ayupassword"><input type="password" name= "password"></div>
		    </th> 
	         <tr>
	         <tr>	
	         <th>
	         </th>
		    <center> <th colspan="2"><div id="ayuiniciar">  <input  type="submit" value="Iniciar Sesión" name="submit"></div>
		     </th></center>
		     </tr>
		      </table>
		     </center>
		     </form>
		     <center> <div > Click para obtener<div id="ayudatour" button onclick="Ayuda1();"><b><u>Ayuda</u></b> </div></div>
		 
		 


<?php

/***********************************************************************
*@Fecha 23/05/2020
 */

include("conexion/conexion.php");
$user="";
$password="";

if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$password=$_POST['password'];
	$bandera=FALSE;

	if ($result = mysqli_query($link, "SELECT * FROM usuarios where usuario='".$user."'")){
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				if ($row['password']==$password) {
					$bandera = TRUE;
					
				}
			}
			
		}
	}
	if ($bandera == TRUE){
		header('location:paginas/tiendas_chocho.php');
	}else{echo "<H1>Acceso denegado</H1>"; }
	mysqli_close($link);
}
?>
</body>
</html>