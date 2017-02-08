<?php
	session_start();
    include'config.php';
		$id=$_GET['id'];
		mysql_connect ($cserver, $cusuario, $cpassword);
		mysql_select_db("restaurante");

		$sql=("UPDATE mesa SET mEstado = '0' WHERE mId =$id ");
		mysql_query($sql);
		echo "<pre>";
		echo "Agenda Agregada.";
		echo "</pre>";
	
?>