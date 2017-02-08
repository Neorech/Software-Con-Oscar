<?
//crearsession.php?session=persona&nombres='+ nombres
$id=$_GET['id'];
$tipo=$_GET['session'];
$nombres=$_GET['nombres'];

session_start();
$_SESSION[$tipo]=$id;

echo $tipo.": " .$nombres.$id ;
?>