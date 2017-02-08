        <link href="smart_cart.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


<script type='text/javascript'>
  //Elaborado por Daniel Fernández (www.danielfernandez.co)
  //<![CDATA[
  function setCookie(nombre, valor, tiempo){
    var fecha = new Date();
    fecha.setTime(fecha.getTime() + tiempo);
    document.cookie = nombre + ' = ' + escape(valor) + ((tiempo == null) ? '' : '; expires = ' + fecha.toGMTString()) + '; path=/';
  }

  function getCookie(nombre){
    var nombreCookie, valorCookie, cookie = null, cookies = document.cookie.split(';');
    for (i=0; i<cookies.length; i++){
      valorCookie = cookies[i].substr(cookies[i].indexOf('=') + 1);
      nombreCookie = cookies[i].substr(0,cookies[i].indexOf('=')).replace(/^\s+|\s+$/g, '');
      if (nombreCookie == nombre)
        cookie = unescape(valorCookie);
    }
    return cookie;
  }
  //]]>
function cargar(div, desde)
{
		var activ = '#' + div;
		setCookie('variable', 'valor');
		alert(getCookie('variable')+ " <? echo $_COOKIE["variable"];  ;?>");
		
	 $('#10662').html("REALIZADO");
	 $(activ).html("7777777777777777");
	 $(activ).removeAttr('id')
	 //$(activ).removeAttr('div')
}
</script>
<a onclick="javascript:cargar('10662','27'); return false;" href="#">PENDIENTE</a>
    <div id="10662">Este contenido va a c </div>
    
    <div id="10664">Este contenido va a cambiar :D</div>
    <div id="SmartCart" class="scMain">    
    <div class="scTabs" style=""><div class="scProductList">
    <a onclick="javascript:cargar('10663','27'); return false;" href="#">PENDIENTE</a>

    <div id="10663">Este contenido va a cambiar :D</div>
    </div>