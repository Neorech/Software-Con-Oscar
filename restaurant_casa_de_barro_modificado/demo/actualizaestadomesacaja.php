<?php
	session_start();
    include'config.php';
		
		$hora = new DateTime();
		$hora->setTimezone(new DateTimeZone('America/Bogota'));
		$fecha=date($hora->format('Y/m/d H:i:s'));

		
		
		$id=$_GET['id'];
		$costo=$_GET['costo'];
		$tipo=$_GET['tipo'];
		
		$costovisa=$_GET['costovisa'];
		$costoefectivo=$_GET['costoefectivo'];
		
		
		mysql_connect ($cserver, $cusuario, $cpassword);
		mysql_select_db("restaurante");

		$valor=mysql_query("SELECT vId FROM venta WHERE vMesa=$id order by vId Desc Limit 1");
		while($row = mysql_fetch_array( $valor )) 
		{
		$idventa= $row['vId'];
		}
		echo $idventa;
		echo $fecha;
		if($tipo=='EFECTIVO')
		{
		$sql1=("UPDATE venta SET vFechaCaja = '$fecha' , vCosto='$costo' WHERE vId ='$idventa'");
		mysql_query($sql1);
		}
		if($tipo=='VISA')
		{
		$sql1=("UPDATE venta SET vFechaCaja = '$fecha' , vCostoVisa='$costo' WHERE vId ='$idventa'");
		mysql_query($sql1);	
		}
		if($tipo=='DIVIDIR')
		{
		$sql1=("UPDATE venta SET vFechaCaja = '$fecha' , vCosto='$costoefectivo', vCostoVisa='$costovisa' WHERE vId ='$idventa'");
		mysql_query($sql1);	
		}
		
		
		
		
		$sql=("UPDATE mesa SET mPago='0' WHERE mId =$id ");
		mysql_query($sql);
		//echo "<pre>";
		//echo "Agenda Agregada." ;
		//echo "</pre>";
		echo'<script type="text/javascript">
				window.location="caja.php";
			</script>';
	
?>