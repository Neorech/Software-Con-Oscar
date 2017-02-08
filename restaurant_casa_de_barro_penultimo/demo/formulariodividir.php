<?
	//echo 'formulario';


		$id=$_GET['id'];
		$costo=$_GET['costo'];
		$tipo=$_GET['tipo'];
	echo '<h2>Costo Total: '.$costo.'</h2>';
	echo '
	 		
			<input type="hidden" name="id" id="id" class="form-control" value="'.$id.'">
			<input type="hidden" name="total" id="total" class="form-control" value="'.$costo.'">
			
			<label>Efectivo<br></label>
            <input type="text" name="efectivo" id="efectivo" class="form-control" value="">
			<label><br>Visa<br></label>
            <input type="text" name="visa" id="visa" class="form-control" value="">
			<br>		  
	
	';	
	
	echo '<a onclick="javascript:guardardividircuentas(); return false;" href="#"><img src="imagenes/icono/dividir.png" width="60" height="60" alt="visa"></a>';
		
		
?>