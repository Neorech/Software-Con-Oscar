        <link href="smart_cart.css" rel="stylesheet" type="text/css">

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script>

/*function cargar(div, desde)
{
     $(div).load(desde);
}*/
function cargar(div, desde)
{
		var activ = '#' + div;
			
			$('#10662').html("REALIZADO");
			
			//$('#resultmsg').addClass('ResultError');
            //$('#resultmsg').html("resul 99 787987897")
                        
		//alert("demos <? //echo "hola mundo"  ?>  ");
     //	$(div).load(desde);
	 
	 //$(activ).addClass('ResultError');
	 
	 $(activ).html("<div id='10663'>contenido nuevo</div><div class='scProducts'><div class='scPDiv1'></div><div class='scPDiv2'><strong>PATATAS FRITAS</strong></div><div class='scPDiv3'><label class='scLabelQuantity'>Cantidad:</label><input type='text' class='scTxtQuantity' value='1'><a class='scAddToCart' title='Add to Cart' rel='0' href='#'>eliminar</a></div></div>");
	 $(activ).removeAttr('id')
	 //$(activ).removeAttr('div')
}
</script>

    
    <div id="10662">Este contenido va a c </div>
    <a onclick="javascript:cargar('10662','27'); return false;" href="#">PENDIENTE</a>
    <div id="10664">Este contenido va a cambiar :D</div>
    

    
    <div id="SmartCart" class="scMain">
    
    
    
    <div class="scTabs" style=""><div class="scProductList">
    
    
         
        <div id="10663">Este contenido va a cambiar :D</div>
         

    
         <?php

 foreach($cproductos as $cproducto):   
 echo" <div class='scProducts'><div class='scPDiv1'></div><div class='scPDiv2'><strong>" . $cproducto['pNombre'] . "</strong></div><div 		class='scPDiv3'><label class='scLabelQuantity'>Cantidad:</label><input type='text' value='1' class='scTxtQuantity'><a href='#' 		rel='0' title='Add to Cart' class='scAddToCart'>eliminar</a></div></div>";  
 endforeach; 


?>     
    </div>