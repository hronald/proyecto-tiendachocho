<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tiendas Chocho</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap-tour/css/bootstrap-tour-standalone.min.css">
  <script src="../jquery/jquery-1.8.2.min.js"></script>
  <script src="../bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
  <script src="../ayuda/Ayudaventas1.js"></script>
</head>
<CENTER><img src=https://elabcdelmarketing.com/wp-content/uploads/2017/06/tienda-online-banner.png width=800 height=180></CENTER>
<body style='background-color:#EFEFEF;'>
<center><h1>Sistemas de Ventas</h1></center>

	<?php 
	require '../conexion/conexion.php';


	date_default_timezone_set("America/Metlakatla");
    $date = date ("d-n-Y");

    //Creamos la sentencia SQL y la ejecutamos
    $result=mysqli_query($link, "SELECT nombre_producto From productos Order By nombre_producto ");

 ?>


 		<FORM action= chocho_ventas2.php method=POST>
		<p></p>
		<center>
		<table border = 2 > <h3>Ventas Tiendas Chocho</h3>
		<p></p>
		<tr>
		<td colspan="3"><?php echo "Fecha: <input type='text'name='fecha_venta' value='$date' size=5"; ?></td>
		<tr>	
		<tr>
		<td>Sucursal:<div id="ayudasucursal"> <select name= sucursal style='width:120px' > 
		<option value=0>Mérida</option>
		<option value=1>Tizimin</option>
		<option value=2>Valladolid</option>
		</selected></div> <br>	
		<td> Vendedor: <div id="ayudavendedor"> <select name=vendedor style='width:100px'>
		<option value=0>Vendedor 1</option>
		<option value=1>Vendedor 2</option>
		<option value=2>Vendedor 3</option>
		</selected></div> <br>
		</tr>
		<tr>
		<td><div id="ayudaproducto">
		<?php echo "Producto: ";
		   $result=mysqli_query($link, "SELECT nombre_producto From productos Order By nombre_producto ");
			echo '<select name="nombre_producto1">';
			//Generamos el menu desplegable
		while ($row=mysqli_fetch_array($result))
		{echo '<option>'.$row["nombre_producto"];}
		echo "</select>";
		 ?>	
		</div></td>			
		<td> <div id="ayudaprecio">
		<?php echo "Precio: ";
		   $result2=mysqli_query($link, "SELECT precio_unitario From productos Order By precio_unitario ");
			echo '<select name="precio_unitario1">';
			//Generamos el menu desplegable
		while ($row=mysqli_fetch_array($result2))
		{echo '<option>'.$row["precio_unitario"];}
		echo "</select>";
		 ?>		
		</div></td>
		
		<td> Cantidad: <div id="ayudacantidad"><input type='number'size=5 name='cantidad_producto1'></div></td>
		</tr>
		<tr>
		<td>
		<?php echo "Producto: ";
		   $result=mysqli_query($link, "SELECT nombre_producto From productos Order By nombre_producto ");
			echo '<select name="nombre_producto2">';
			//Generamos el menu desplegable
		while ($row=mysqli_fetch_array($result))
		{echo '<option>'.$row["nombre_producto"];}
		echo "</select>";
		 ?>	
		</td>			
		<td> 
		<?php echo "Precio: ";
		   $result2=mysqli_query($link, "SELECT precio_unitario From productos Order By precio_unitario ");
			echo '<select name="precio_unitario2">';
			//Generamos el menu desplegable
		while ($row=mysqli_fetch_array($result2))
		{echo '<option>'.$row["precio_unitario"];}
		echo "</select>";
		 ?>		
		</td>
		
		<td> Cantidad: <input type='number'size=5 name='cantidad_producto2'>
		</tr>
		<tr>
		</tr>	
		<td colspan="3"> <div id="ayudatipopago">Tipo de pago: <center><select name= tipo_pago style='width:120px' > 
		<option value=0>Efectivo</option>
		<option value=1>Tarjeta bancaria</option>
		<option value=2>Vales</option>
		</selected></center></div>
		</td>
		 <br>
		</table> </center>
		<p></p>
		<center>
		<table>
		<tr>
		<td><div id="ayudacobrar"><input type=submit value='Cobrar'></div>
		<td align = center><div id="ayudaborrar"><input type = reset value='Borrar'></div>
		</table> </center>
		</FORM>
		<center>


 <center><div>Click para obtener<div id="ayudatour" button onclick="Ayudaventas1();"><b><u>Ayuda</u></b>  
</div></div></center>
 <br>
<center>Para regresar a la p&aacutegina principal<BR>Click en <a href=tiendas_chocho.php>MENU</a></center>
</body>
</html>
</body>
</html>