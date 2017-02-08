<?
 
session_start();
$_SESSION["Arr"]= array('titulo'=>'Aprendiendo a desarrollar', 'autor'=>'CodeHero999');
//print_r($_SESSION["Arr"]);
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link id= "estilo" href="estilo1.css" rel="stylesheet" type="text/css">

<script type='text/javascript'>


function estilo(arquivo) {
	//alert("mensajes"+ arquivo);
document.getElementById('estilo').href=arquivo;
}

function cargar(div, desde)
{
	
 

 
	
	
		var activ = '#' + div;
		var tema= $(activ).load('pagina1.php?id='+ desde);
				//alert('1231'+ "<? echo $_SESSION['usuario'];?>")
				var variable = document.getElementById('10663').innerHTML;
				//alert (variable);
				//edgarselacome
}
</script>
<a onclick="javascript:cargar('10662','27'); return false;" href="#">PENDIENTE</a>
    <div id="10662">Este contenido va a c </div>
    
    <a onclick="javascript:cargar('10663','28'); return false;" href="#">PENDIENTE</a>
    <div id="10663" valor='45645645'>99999999999</div>
    <? echo $_SESSION['usuario'];?>
	

    <a value="Cambiar Estilo" onClick="estilo('estilo2.css');" return false;" href="#">estilo</a>
<input type="button" value="Cambiar Estilo" onClick="estilo('estilo1.css');">
