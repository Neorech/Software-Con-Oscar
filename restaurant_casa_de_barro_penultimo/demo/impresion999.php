<script language="javascript">

  function imprSelec(nombre)

  {
  
  ////////
  var ficha = document.getElementById(nombre);

  var ventimp = window.open(' ', 'popimpr');

  ventimp.document.write( ficha.innerHTML );

  ventimp.document.close();

  ventimp.print( );

  ventimp.close();

  } 

</script> 


<style type="text/css" media="print">
#Imprime {
	height: auto;
	width: 310px;
	margin: 0px;
	padding: 0px;
	float: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 7px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	color: #000;
}
@page{
   margin: 0;
}
</style>

<div id="Imprime">
    --------------------------------
    <td><?php echo 'hola mundo'?></td>
    --------------------------------
  <br>
    </div>


    <p><a href="javascript:imprSelec('Imprime')" ><img src="http://localhost/restaurant/demo/img/printer-9.png" width="140" height="140" /></a></p>