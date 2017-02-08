<? 
//include 'http://localhost/restaurant/login/permisos.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PEDIDOS - EL CONQUISTADOR</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
// Requiring the model
require_once('model.php');
// Retrieving the list of posts
?>

<div id="caja1_cuadros">
	<div id="informacion">
    <a href="http://localhost/restaurant/demo/caja.php">Administración</a> </div>
</div> 
<div id="caja2_cuadros"><? include 'tabs.php' ?></div>
<div id="caja3_cuadros">

	<div class="lista_productos_contenedor">    
    <div id="10668"> </div>
    </div>


</div>
<div id="caja4_cuadros"><? include 'demo01.php' ?></div>
<div id="caja5_cuadros">




<div id="servicio">
<a href="#" onclick="javascript:realizarpedido('10668','3'); return false;"><img src="img/check.png" width="64" height="64" alt="img"></a>

</div>
<!--<div id="servicio">
<img src="img/lupa.png" width="64" height="64" alt="img">
</div>-->
<div id="servicio">

<a href="#" onclick="javascript:personapedido('10668','3'); return false;">Selec mozo<img src="img/usuario.png" width="64" height="64" alt="img"></a>

</div>
<div id="servicio">
<a href="#" onclick="javascript:mesalista('10668','3'); return false;">Selec mesa<img src="img/mesa1.png" width="64" height="64" alt="img"></a>
</div>
<div id="servicio">
Cancelar
<a href="inicio.php"><img src="imagenes/cancelarb.ico"  alt="img"></a>
</div>
<!--<div id="servicio">
<img src="img/cambio.png" width="64" height="64" alt="img">
</div>
<div id="servicio">
<a href="#" onclick="javascript:mesalista('10668','3'); return false;"><img src="img/pedido.png" width="64" height="64" alt="img"></a>
</div>
<div id="servicio">
<img src="img/reserva.png" width="64" height="64" alt="img">
</div>
<div id="servicio">
<img src="img/pagar.png" width="64" height="64" alt="img">
</div>
<div id="servicio">
<img src="img/dividir.png" width="64" height="64" alt="img">
</div>-->
<p><p/>
<p><p/><p><p/><br><br/><br><br/><br><br/>
Pedido detalle
 
<div id="idmesa"><div class="lista_productos"><img width="80" height="76" alt="img" src="imagenes/mesa/mesa1.png"></div></div>
<div id="idpersona"><div class="lista_productos"><img width="64" height="64" alt="img" src="img/usuario.png"></div></div>

<div id="servicio">
<a href="#" onclick="javascript:mesalistapedido('10668','3'); return false;">Agregar<img src="img/mesa1.png" width="64" height="64" alt="img"></a>
</div>
<!--<div id="idpersona"><div class="lista_productos"><img width="64" height="64" alt="img" src="img/mesa1.png"></div></div>
-->


</div> 
<div id="caja6_cuadros">4</div>



</body>
</html>
