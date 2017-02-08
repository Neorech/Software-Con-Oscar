<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
// Requiring the model
require_once('model.php');
 
// Retrieving the list of posts
$cproductos = getAllPosts();
 
// Requiring the view
//require('view.php');
?>
<?php
 foreach($cproductos as $cproducto): 

 echo $cproducto['id'] ;
 echo $cproducto['pNombre'] ;
 endforeach; 
 echo "---------------------";


 echo $cproductos[0]['id']; 
 echo $cproductos[0]['pNombre']; 
 //print_r($cproductos);
 
?>



<? include 'tabs.php' ?>
<? include 'demo01.php' ?>
<? include 'lista_productos.php' ?>
</body>
</html>
