<?
session_start();
$alias=$_SESSION["palias"];
$fecha=$_SESSION["Fecha"];
$hoy=date('Y-m-d');
if($fecha==$hoy)
{
	echo "______________";
	echo  '<script language="javascript">window.location="../demo/a1.php"</script>';
}
echo "paso".$fecha;


echo 	$_COOKIE['nombreUsuario'];
?>