<link href="smart_cart.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script>
function cargar(div, desde, estado)
{
		var activ = '#' + div;
		var idproducto = desde;

		//var pnombre = 	"<?  ?>"+ "jyk";
		$(activ).load('add_item.php?id='+ desde+'&tipo='+estado);
			//$('#10662').html("REALIZADO");
			//$('#resultmsg').addClass('ResultError');
            //$('#resultmsg').html("resul 99 787987897")           
		//alert("demos" + pnombre);
     //	$(div).load(desde);
	 //$(activ).addClass('ResultError');
	 //$(activ).html("<div id='10663'>contenido nuevo</div><div class='scProducts'><div class='scPDiv1'></div><div class='scPDiv2'><strong>"+pnombre+"</strong></div><div class='scPDiv3'><label class='scLabelQuantity'>Cantidad:</label><input type='text' class='scTxtQuantity' value='1'><a class='scAddToCart' title='Add to Cart' rel='0' href='#'>eliminar</a></div></div>");
	 $(activ).removeAttr('id')
	 //$(activ).removeAttr('div')
}

function cargaritems(div, desde)
{
	var activ = '#' + div;
	var idproducto = desde;
	//alert('mensaje');
	$(activ).load('lista_productos1.php?id='+ desde);
	$(activ).removeAttr('id')
}

function cargarsuma(div, desde)
{
		var activ = '#' + div;
		var idproducto = desde;

		//var pnombre = 	"<?  ?>"+ "jyk";
		$(activ).load('add_item_suma.php?id='+ desde);
			//$('#10662').html("REALIZADO");
			//$('#resultmsg').addClass('ResultError');
            //$('#resultmsg').html("resul 99 787987897")           
		//alert("demos" + pnombre);
     //	$(div).load(desde);
	 //$(activ).addClass('ResultError');
	 //$(activ).html("<div id='10663'>contenido nuevo</div><div class='scProducts'><div class='scPDiv1'></div><div class='scPDiv2'><strong>"+pnombre+"</strong></div><div class='scPDiv3'><label class='scLabelQuantity'>Cantidad:</label><input type='text' class='scTxtQuantity' value='1'><a class='scAddToCart' title='Add to Cart' rel='0' href='#'>eliminar</a></div></div>");
	 $(activ).removeAttr('id')
	 //$(activ).removeAttr('div')
}
function cargarresta(div, desde)
{
		var activ = '#' + div;
		var idproducto = desde;
		$(activ).load('add_item_resta.php?id='+ desde);
		$(activ).removeAttr('id')
}
function realizarpedido(div, desde)
{		
		var observaciones=document.getElementsByName("observaciones")[0].value;
		var activ = '#' + div;
		var idproducto = desde;
		observaciones=observaciones.replace(/\s/g,"_");
		//alert(observaciones);
		//document.observaciones.value = ' ' ;
		$(activ).load('realizarpedido.php?id='+ desde+'&observaciones='+observaciones);
		$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}

function personapedido(div, desde)
{
		var activ = '#' + div;
		var idproducto = desde;
		$(activ).load('personapedido.php?id='+ desde);
		$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}
function mesalista(div, desde)
{
		var activ = '#' + div;
		var idproducto = desde;
		$(activ).load('mesalista.php?id='+ desde);
		$(activ).removeAttr('id');
		 
}
function mesalistapedido(div, desde)
{
		var activ = '#' + div;
		var idproducto = desde;
		$(activ).load('mesalistapedido.php?id='+ desde);
		$(activ).removeAttr('id');
		 
}
function mesaseleccion(div, id)
{
		//var activ = '#' + div;
		//var idproducto = desde;
		//$(activ).load('personapedido.php?id='+ desde);
		//$(activ).removeAttr('id');
		$('#informacion').load('crearsession.php?session=mesa&id='+id);
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		$('#idmesa').html("<div class='lista_productos'><img width='80' height='76' src='imagenes/mesa/mesa1.png' alt='img'>"+id+"</div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');

}
function personaseleccion(img, id,nombres)
{
		//var activ = '#' + div;
		//var idproducto = desde;
		$('#informacion').load('crearsession.php?session=persona&nombres='+nombres+'&id='+id);
		
		$('#idpersona').html("<div class='lista_productos'><img width='70' height='74' src='imagenes/persona/"+img+"' alt='img'>"+nombres+"</div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');

}
</script>
    <div id="total_costo_final"> 
    
    Costo Total: <input id="costo_total" class="costofinal" type="text" value="0.00">
    </div>
    OBSERVACIONES: <input name="observaciones" id="observaciones" type="text" size="64"  />  
    <div id="SmartCart" class="scMain">
    	<div class="scTabs" style="">
    		<div id="productosreinicio" class="scProductList">       
    			<div id="10663">  </div>
    		</div>
    	</div>
    </div>
	