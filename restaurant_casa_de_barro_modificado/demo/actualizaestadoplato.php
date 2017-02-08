<?php
	session_start();
    include'config.php';
		$id=$_GET['id'];
		$estado=$_GET['estado'];
		if ($estado=='1')
		{
			$estado=0;
		}
		else
		{	
			$estado=1;
		}
		mysql_connect ($cserver, $cusuario, $cpassword);
		mysql_select_db("restaurante");

		$sql=("UPDATE venta_detalle SET vd_Estado =$estado WHERE vdId =$id ");
		mysql_query($sql);
		/*echo "<pre>";
		echo "Agenda Agregada.";
		echo "</pre>";
		*/
?>