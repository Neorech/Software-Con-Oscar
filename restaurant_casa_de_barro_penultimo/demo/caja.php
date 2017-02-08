<? 
//include '../login/permisos.php';
?>
<style type="text/css">
.info, .exito, .alerta, .error {
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
border: 1px solid;
margin: 10px 8px;
padding:15px 10px 15px 10px;
background-repeat: no-repeat;
background-position: 10px rigth;
position:relative;
width: 336px;
float:left;
}
.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/info.png');
}
.exito {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/exito.png');
}
.alerta {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/alerta.png');
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/error.png');
}
.producto0 {
    border: 1px solid #b1b1b1;
	background:#fff;
	font-size: 16px;
    text-align: left;
	
    /*white-space: nowrap;*/
}
.producto1 {
    border: 1px solid #b1b1b1;
	background:none repeat scroll 0 0 #d1d1d1;
	font-size: 16px;
    text-align: left;
	/*text-decoration:line-through; 
	color: red
	*/
    /*white-space: nowrap;*/
	text-decoration:none;
}
.producto1 a{
color:#999;
text-decoration:none;
}

.producto0 a{
color:#333;
text-decoration:none;
}
th {
    padding: 12px;
}
.testgrid{
    background: none repeat scroll 0 0 #d1d1d1;
    border: 1px solid #b1b1b1;
}

.info {
       color: #00529B;
       background-color: #BDE5F8;
       background-image: url('imagenes/info.png');
	   width: 80%;
	   margin: 10px 0;
    padding: 15px 10px 15px 50px;
}
#botonpedido{
	
	background:#fff;
	color: #333;
	border:1px solid #c2c2c2;
	padding: 12px;
	text-decoration: blink;
	}
#dividirformulario{
	background:#FFF;
	width:100%;
	border:3px solid #F00;
	
	}
.input {
  border-radius: 0 !important;
  box-shadow: none;
  border-color: #d2d6de;
}
	
</style>
<script src="js/jquery.tools.min.js"></script>
<script>
function actualizaestadomesa(mesa,costo,tipo)
{
		//alert('mensaje'+mesa);
		confirmar=confirm('Desea Confirmar el pago de la mesa: ' +mesa+ 'con ' +tipo  ); 
		if (confirmar) 
		{
			//alert('Has dicho que si');
			$(estadomesa).load('actualizaestadomesacaja.php?id='+ mesa+'&costo='+ costo+'&tipo='+ tipo);
		}
		else 
		{
			//alert('Acción Cancelada'); 
		}
		
		
		//var activ = '#' + div;
		//var idproducto = desde;
		//$(activ).load('personapedido.php?id='+ desde);
		//$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}





function actualizaestadoplato(plato,estado)
{
		//alert('mensaje'+plato);
		
		if(estado!='1') 
		{
		$(estadoplato).load('actualizaestadoplato.php?id='+ plato+'&estado='+estado);
		var activ = '#' + plato;
		$(activ).removeAttr('class');
		$(activ).addClass('producto1');
		alert('if');
		}
		else
		{
		$(estadoplato).load('actualizaestadoplato.php?id='+ plato+'&estado='+estado);
		var activ = '#' + plato;
		$(activ).removeAttr('class');
		$(activ).addClass('producto0');
		alert('else if');
		}
		
		//$('#1973').removeAttr('class');
		//$('#1973').addClass('producto1');
		
		
		//var activ = '#' + div;
		//var idproducto = desde;
		//$(activ).load('personapedido.php?id='+ desde);
		//$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}



function actualizaestadomesadividir(mesa,costo,tipo)
{
		//alert('mensaje'+mesa);
		
		//confirmar=confirm('Desea Confirmar el pago de la mesa: ' +mesa+ 'con ' +tipo  ); 
		
			$(dividirformulario).load('formulariodividir.php?id='+ mesa+'&costo='+ costo+'&tipo='+ tipo);
		
		/*if (confirmar) 
		{
			//alert('Has dicho que si');
			$(dividirformulario).load('formulariodividir.php?id='+ mesa+'&costo='+ costo+'&tipo='+ tipo);
		}
		else 
		{
			//alert('Acción Cancelada'); 
		}*/
		
		
		//var activ = '#' + div;
		//var idproducto = desde;
		//$(activ).load('personapedido.php?id='+ desde);
		//$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}


function guardardividircuentas()
{
		var id=document.getElementById("id").value;
		var total=document.getElementById("total").value;
		var mesa=id;
		var efectivo=document.getElementById("efectivo").value;
		var visa=document.getElementById("visa").value;
		var tipo='DIVIDIR';
		//alert('mensaje' + efectivo +' ' + visa+' '+id +' '+total);
		
		//alert('actualizaestadomesacaja.php?id='+ id+'&costo='+total+'&tipo='+tipo+'&costovisa='+visa+'&costoefectivo='+efectivo);
		//$(dividirformulario).load('formulariodividir.php?id='+ mesa+'&costo='+ costo+'&tipo='+ tipo);
		confirmar=confirm('Desea Confirmar el pago de la mesa: ' +mesa); 
		if (confirmar) 
		{
			//alert('Has dicho que si');
			$(estadomesa).load('actualizaestadomesacaja.php?id='+ id+'&costo='+ total+'&tipo=DIVIDIR&costovisa='+visa+'&costoefectivo='+efectivo);
		}
		else 
		{
			//alert('Acción Cancelada'); 
		}
		
}

</script>

<script>

                  function impresionticket(ifecha,ffecha)
				  {
				  //alert('impresion');
				  window.open("impresion_ticketera.php?id="+ifecha+"","VENTAS","width=360,height=600")
				  //window.open("pagina.html","miventana","width=900,height=200,menubar=no")
				  }
                  
</script>

	<?
    include 'menu.php';
	?>
    
    
	<?
require_once('model.php');
$idx =$_GET[id];
$getEstadoMesaCajas = getEstadoMesaCajas($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha_b=date($hora->format('Y/m/d H:i:s'));
//echo $fecha_b;



 function minutos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}

//echo "________________";	
echo '<div id="listacaja">';
include'caja/productobase.php';
//echo 'lista cajas';

echo '</div>';


 foreach($getEstadoMesaCajas as $getEstadoMesaCaja):
	$idx=$getEstadoMesaCaja['nVenta'];
	//echo $idx; 
  if($idx==null)
  {
	}
	else
	{
  $fecha_a= $getEstadoMesaCaja['mFecha'];
  
  $tiempo =minutos_transcurridos($fecha_a,$fecha_b); 
 	if ($tiempo<=3) 
 	{
		$clase='exito';
	}
	else
	{
		$clase='error';
	}
 	//echo "<div id='789'>";
	echo "<div class=".$clase.">";
	//echo "Tiempo: ".$tiempo.'<p>'; 
	
	
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getEstadoMesaCaja['mFecha'].'<p><h2>Mesa: '.$getEstadoMesaCaja['mNumero']. '    Tiempo: '.$tiempo.' <a href="#" onclick="javascript:impresionticket(\''.$idx.'\',\'2015-05-17\'); return false;">
<img width="40" height="40" src="img/printer-9.png" alt="Buscar"></a></h2><p>' ;
	//echo '<div class='.$getEstadoMesa['mNumero'].'>realizado'.$getEstadoMesa['nVenta'].'</div>';
	echo '<div class='.$getEstadoMesaCaja['mNumero'].'></div>';
	//echo '<a href="#" onclick="javascript:impresionticket(\''.$idx.'\',\'2015-05-17\'); return false;"><img width="40" height="40" src="../images/printer.png" alt="Buscar"></a>';
	//echo '<div class="info"> <a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesaCaja['mNumero']. '\'); return false;" href="#">Completo </a></div>';

	
	
	include 'impresion_lista_caja.php';
	echo '</div>';
	
	
	}
 	endforeach; 
	echo '<div id="estadomesa"> </div>'; 
?>