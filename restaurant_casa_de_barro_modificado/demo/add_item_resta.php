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
	function eliminabloque (indice) {
	var indicebloque
	indicebloque= '#'+indice+'_bloque'
	//alert ("mensaje9"+indicebloque);	
	
	$(indicebloque).html("");
	$(indicebloque).removeAttr('id');
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
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

//array datos lista

session_start();

$contararray=count ($_SESSION["arr"]);
	//echo "____" .$contararray. "_____";
if ($contararray =='0')
{
	//echo "primer if";
	
$_SESSION["arr"]['99']= array('id'=>''.$idx.'','cantidad'=>'1','costo'=>$costo);
	//print_r($_SESSION["arr"]);
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
//$costo = $arr[$Id][costo];
/*echo "___________";
print_r($_SESSION["arr"]);
echo "___________";
	*/
	//echo "segundo if  if";
$valor_cantidad=$arr[$Id][cantidad];
$arr[$Id][cantidad]=$valor_cantidad -1;
$arr[$Id][costo]=$costo * ($valor_cantidad -1);


//echo "costo :".$arr[$Id][costo]."cantidad :".$arr[$Id][cantidad];
//echo "id : " .$Id;
}
else
{
	//echo "segundo else  if";
$arr[$contararray]=array('id'=>''.$idx.'','cantidad'=>'1','costo'=>$costo);
}
	//print_r($_SESSION["arr"]);

}
//echo $contararray;


echo "
<div id='".$idx."'>
<input id='".$idx."_val' type='text' class='scTxtQuantity' value='".$arr[$Id][cantidad]."'>
<div>";
//echo '<a class=\'scAddToCart\' href="#" onclick="javascript:cargarsuma(\''.$idx.'\',\''.$idx.'\'); return false;">agregar </a>';


//echo $cproductos[$idx-1]['pNombre'];
$totalarray =count($_SESSION["arr"]);
$costototal='0';
$_SESSION["arr"];
foreach ($_SESSION["arr"] as $i => $value){
$costototal=$arr[$i][costo] + $costototal;
}

?>

<script languaje="javascript">
costototal('<? echo $costototal; ?>');
</script>
<?
if ($arr[$Id][cantidad]=='0')
{
?>
<script languaje="javascript">
eliminabloque('<? echo $idx; ?>');
</script>
<?
unset($arr[$Id]);

}
?>

