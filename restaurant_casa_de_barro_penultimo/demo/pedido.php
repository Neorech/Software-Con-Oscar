<html>
	<head>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
          <script src="js/jquery.tools.min.js"></script>

	</head>
	<body>
		Lista de Pedidos en Mesas
		
		<div id="fixedtime">
		</div>
		
		
		<div id="dinamictime">
		</div>
	</body>

	<script type="text/javascript">

		$(document).ready(function() {
			//pintahora('fixedtime');
			pintahora('dinamictime');
			var refreshId = setInterval(pintahoradinamic, 99000);
		});

		function pintahoradinamic() {
			pintahora('dinamictime');
		}

		function gethora() {
			var myDate = new Date().toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
			return myDate;
		}

		function pintahora(capa) {
			//$('div#' + capa).html('<span>hora: ' + gethora() + '</span>');		
			$('div#' + capa).load('tiempopedido.php?id=');
		}
	</script>
</html>