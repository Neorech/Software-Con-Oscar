<?
session_start();
?>
<script type="text/javascript">
    function costototal(enviocosto) {
    document.getElementById("costo_total").value = enviocosto;   
    }
	function cantidadproducto(variable,cantidad) {
    document.getElementById(variable).value = cantidad;   
    }
</script>
<?
//busca valor array
function searchForId ( $id , $Arr ) {
foreach ( $Arr as $key => $val ) {
if ( $val [ 'id' ] === $id ) {
return $key ;
}
}
return null ;
}
//busca valor array

require_once('model.php');
$cproductos = getAllItems();
$idx =$_GET[id];
$costo= $cproductos[$idx-1]['pPrecio'];

$global_impresion=$_GET['tipo'];
$imprimir_data='data';
//array datos lista


//echo $global_impresion;
$contararray=count ($_SESSION["arr"]);
	//echo "____" .$contararray. "_____";
if ($contararray =='0')
{
	//echo "primer if";	
$_SESSION["arr"]['99']= array('id'=>''.$idx.'','cantidad'=>'1','costo'=>$costo);
/*           impresion array guia    	print_r($_SESSION["arr"]);*/
//print_r($_SESSION["arr"]);
$imprimir_data='carga';

}
else
{
	//echo "primer if else ";	
$_SESSION["arr"];

$c=count ($_SESSION["arr"]);

$Id = searchForId( $idx , $arr );
	//echo "|___" .$Id. "_____|".$c;
if ($Id != '')
{
	//echo "segundo if  if";
$valor_cantidad=$arr[$Id][cantidad];

$arr[$Id][cantidad]=$valor_cantidad +1;
$arr[$Id][costo]=$costo * ($valor_cantidad +1);
?>
<script languaje="javascript">
cantidadproducto('<? echo $idx."_val"; ?>','<? echo $arr[$Id][cantidad]; ?>');
</script>
<?

}
else
{
	//echo "segundo else  if";
	
$stack = $_SESSION["arr"];
array_push($stack, "manzana", "arándano");

	
$arr[$contararray]=array('id'=>''.$idx.'','cantidad'=>'1','costo'=>$costo);
$imprimir_data='carga';
}
/*           impresion array guia    	print_r($_SESSION["arr"]);*/
//print_r($_SESSION["arr"]);
}
//echo $contararray;
//echo $imprimir_data;
if ($imprimir_data=='carga')
{
echo "<div id='10663'></div>
<div id='".$idx."_bloque' >
<div class='scProducts'><div class='scPDiv1'><img src='imagenes/producto/".$cproductos[$idx-1]['pImg']."' width='73' height='50'alt='img' /></div><div class='scPDiv2'><strong>";
//echo $idx;
echo $cproductos[$idx-1]['pNombre'];
echo "</strong></div><div class='scPDiv3'><label class='scLabelQuantity'>Cantidad:</label>
<div id='".$idx."'>
<input id='".$idx."_val'type='text' class='scTxtQuantity' value='1'>
<div></div></div>";
echo '
<a class=\'scAddToCart\' href="#" onclick="javascript:cargarsuma(\''.$idx.'\',\''.$idx.'\'); return false;"><img src="img/suma.png" width="27" height="29" alt="suma" /> </a>
<a class=\'scAddToCart\' href="#" onclick="javascript:cargarresta(\''.$idx.'\',\''.$idx.'\'); return false;"><img src="img/resta.png" width="27" height="29" alt="suma" /> </a>
</div>';
//echo '</div></div>';
}
if ($imprimir_data=='data')
{
echo "<div id='10663'></div>";
}

$totalarray =count($_SESSION["arr"]);
$costototal='0';
$_SESSION["arr"];
foreach ($_SESSION["arr"] as $i => $value){
$costototal=$arr[$i][costo] + $costototal;
//echo $i." --- ".$costototal."---".$arr[$i][costo];	
}

?>
<script languaje="javascript">
costototal('<? echo $costototal; ?>');
</script> 