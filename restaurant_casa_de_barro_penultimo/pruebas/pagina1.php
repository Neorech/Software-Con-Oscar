<?


session_start();
//$libros = array();

$_GET[id];
$c = count($_SESSION["Arr"])+1;
 

$Arr[$c] = array('1'=>'27', '2'=>'28');
//$Arr[1] = array('titulo'=>'Aprendiendo a desarrollar', 'autor'=>'Cod7777777777 ');
//$libros = array();
//$libros[0] = array('titulo'=>'Aprendiendo PHP', 'autor'=>'Ramses Velasquez');
//print_r ($libros);
$clave = array_search('27', $Arr); 
echo $c;
echo "resul" .$clave;
print_r($_SESSION["Arr"]);
//echo $libros[1]['autor'];
echo $Arr[1][titulo];
?>