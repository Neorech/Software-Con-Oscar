<?
	session_start();
	mysql_connect ("localhost", "root", "123456");
	mysql_select_db("restaurante");
	$observacion= $_GET["observaciones"];
	$hora = new DateTime();
	$hora->setTimezone(new DateTimeZone('America/Bogota'));
	$fecha=date($hora->format('Y/m/d H:i:s'));

	$idpersona=$_SESSION['persona'];
	$idmesa=$_SESSION['mesa'];
	if ($idpersona==null) {
		echo '<div id="10668"><div id="alerta" >Seleccione una persona</div></div>';
		exit;
	}

	if ($idmesa==null) {
		echo '<div id="10668"><div id="alerta" >Seleccione una mesa</div></div>';
		exit;
	}
	
	/*foreach ($_SESSION["arr"] as $i => $value){
	//$costototal=$arr[$i][costo] + $costototal;
	//echo $i." --- ".$costototal."---".$arr[$i][costo];	
	$contadorplatos = 1;
	}*/
	$crp=count ($_SESSION["arr"]);
	//echo "///////////////////////////////////".$crp;
	if ($crp<=0) {
	echo '<div id="10668"><div id="alerta" >Seleccione el / los platos</div></div>';
	exit;
	}
	

	$rsmesa = mysql_query("SELECT
							mPago
						FROM 
							mesa
						WHERE mId='$idmesa'");

	mysql_query("UPDATE
					mesa
				SET
					mEstado= '1',
					mPago = '1'
				WHERE mId =".$idmesa." ;");

	if ($rowmesa = mysql_fetch_row($rsmesa)) {
		$idmesaestado = trim($rowmesa[0]);
	}
	echo "mesa estado: ".$idmesaestado;

	$rspedidomesa = mysql_query("SELECT
									vId,
									vCantidadProducto,
									vFecha,
									vIdpersona,
									vIdTiket,
									vMesa,
									vEstado
								FROM `venta`
								WHERE
									vMesa = '$idmesa'
								order by vId
								desc limit 1");
	//insertar pedido extra
	if ($idmesaestado==1) {
		if ($rowpedidomesa = mysql_fetch_row($rspedidomesa)) {
			$idpedidomesa = trim($rowpedidomesa[0]);
		}
		echo "mesa pedido mesa: ".$idpedidomesa;

		foreach ($_SESSION["arr"] as $valor) {
			//Actualiza Almacen 
			//mysql_query("update mesa set mFecha='$fecha' where mId='$idmesa'");	
			$resultalmacen = mysql_query("SELECT
											idProductoAlmacen,
											idProducto,
											idAlmacen,
											paCantidad
										FROM
											productoalmacen
										WHERE idProducto='".$valor['id']."'");
			//debemos verificar que hay stock
			// para cada idProducto nos fijamos en almacen si la cantidad demandada - cantidad en almacen es mayor a cero
			//si alguna falla, entonces hacemos un echo + exit;

			if ($rowalmacen = mysql_fetch_array($resultalmacen)) { 
				do {
				//echo 'id Producto : '.$rowalmacen["idProducto"].'  '.$rowalmacen["idAlmacen"].'  '.$rowalmacen["paCantidad"].'<br/>';
				mysql_query("UPDATE
								almacen
							SET
								aCantidad = aCantidad - ".($rowalmacen["paCantidad"]*$valor['cantidad'])." where idAlmacen =".$rowalmacen["idAlmacen"]." ");
				}
				while ($rowalmacen = mysql_fetch_array($resultalmacen)); 
			}

			//echo 'id: '. $valor['id'].'id: '. $valor['cantidad'].'<br/>';

			echo '//////////'.$idventatiempo=$valor['id'];
			mysql_query("UPDATE
							venta
						SET
							vTimbre = 1,
							vFecha ='$fecha'
						WHERE vId=$idpedidomesa");


			mysql_query("INSERT INTO
							venta_detalle
								(vId,
								vd_idProducto,
								vd_Cantidad,
								vd_Costo)
						VALUES ('$idpedidomesa',
								'".$valor['id']."',
								'".$valor['cantidad']."',
								'".$valor['costo']."')");


			//Actualiza Almacen 
			//mysql_query("UPDATE venta SET vCantidadProducto = '20', vFecha= '16/09/1986' ,vIdusuario='1',vIdTiket='5'");
		}
		echo "<div id='10668'>Pedido Realizado</div>"; 
		echo "<script languaje='javascript'>alert('pedido registrado. ')</script>";
		session_destroy();
		echo'<script type="text/javascript">
		window.location="inicio.php";
		</script>';
	}
	//insertar pedido extra
	else {
		//echo "persona" .$idpersona;
		mysql_query("UPDATE
						mesa
					SET
						mFecha='$fecha',
						mEstado='1'
					WHERE
						mId='$idmesa'");


		mysql_query("INSERT INTO
						venta
							(vCantidadProducto,
							vFecha,
							vIdpersona,
							vMesa,
							vObservacion,
							vTimbre)
					VALUES ('20',
							'$fecha',
							'$idpersona',
							'$idmesa',
							'$observacion',
							'1')");

		$rs = mysql_query("SELECT
								MAX(vId) AS id
							FROM venta");

		if ($row = mysql_fetch_row($rs)) {
			$idultimo = trim($row[0]);
		}

		//echo $idultimo;

		foreach ($_SESSION["arr"] as $valor) {
			//echo 'id: '. $valor['id'].'id: '. $valor['cantidad'].'<br/>';
			mysql_query("INSERT INTO
							venta_detalle
								(vId,
								vd_idProducto,
								vd_Cantidad,
								vd_Costo)
						VALUES ('$idultimo',
								'".$valor['id']."',
								'".$valor['cantidad']."',
								'".$valor['costo']."')");

			//Actualiza Almacen 
			//mysql_query("update mesa set mFecha='$fecha' where mId='$idmesa'");	
			$resultalmacen = mysql_query("SELECT
											idProductoAlmacen,
											idProducto,
											idAlmacen,
											paCantidad
										FROM
											productoalmacen
										WHERE
											idProducto='".$valor['id']."'");

			if ($rowalmacen = mysql_fetch_array($resultalmacen)) { 
				do { 
		   			//echo 'id Producto : '.$rowalmacen["idProducto"].'  '.$rowalmacen["idAlmacen"].'  '.$rowalmacen["paCantidad"].'<br/>';
					mysql_query("UPDATE
									almacen
								SET
									aCantidad = aCantidad - ".($rowalmacen["paCantidad"]*$valor['cantidad'])." where idAlmacen =".$rowalmacen["idAlmacen"]." ");
				}
				while ($rowalmacen = mysql_fetch_array($resultalmacen)); 
		    }
			//Actualiza Almacen 
			//mysql_query("UPDATE venta SET vCantidadProducto = '20', vFecha= '16/09/1986' ,vIdusuario='1',vIdTiket='5'");
		}
		 echo "<div id='10668'>Pedido Realizado</div>"; 
		 echo "<script languaje='javascript'>alert('pedido registrado. ')</script>";
		 session_destroy();
		 /*sleep(2);
		 header('Location: http://localhost/restaurant/demo/inicio.php');
		*/
		/*echo'<script type="text/javascript">
		window.location="inicio.php";
		</script>';*/
	
	}


	$rstop = mysql_query("SELECT
							vId
						FROM
							venta
						order by vId desc limit 1");

	//mysql_query("UPDATE mesa SET mEstado= '0', mPago = '1' where mId =".$idmesa." ;");
	if ($rowtop = mysql_fetch_row($rstop)) {
		$topuno = trim($rowtop[0]);
	}
	//echo "____________________________________".$topuno;

	echo '<a onClick="abrir_ventana_bar(\''.$topuno.'\'); return false;" href="#">';
	/*echo '<script type="text/javascript">window.print();</script>';*/
	echo "<script>document.location = 'impresion_ticketera_bar.php?id=$topuno';</script>";

	//echo '<a onClick="abrir_ventana_cocina(\''.$topuno.'\'); return false;" href="#">';
	//echo "<script>document.location = 'impresion_ticketera_cocina.php?id=$topuno';</script>";

?>

Imprimir Boucher
<img width="64" height="64" alt="img" src="img/printer-9.png">
</a>

<script language="javascript">
<!--
	function abrir_ventana_bar(varid) {
		propiedades = "width=400, height=500";
		window.open("impresion_ticketera_bar.php?id="+varid,"_blank",propiedades);
	}

	function abrir_ventana_cocina(varid) {
		propiedades = "width=400, height=500";
		window.open("impresion_ticketera_cocina.php?id="+varid,"_blank",propiedades);
	}
//-->
</script>