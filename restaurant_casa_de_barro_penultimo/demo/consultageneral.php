<?php 
//$buscar = $_GET["dni"];
$buscar='44';
//echo "mensaje" .$buscar;
if ($buscar== null){ 
      echo "Debe especificar una cadena a bucar"; 
      echo "</html></body> \n"; 
      exit; 
} 
$link = mysql_connect("localhost", "root","123456"); 
mysql_select_db("dbveterinaria", $link); 
$result = mysql_query("SELECT * FROM cliente WHERE Dni LIKE '%$buscar%' limit 1", $link); 
if ($row = mysql_fetch_array($result)){ 
	do 
	{ 
   		echo 'Nombres : '.$row["Nombres"].' '.$row["Apellidos"].'Fijo : '.$row["Celular"].'';
		}
	while ($row = mysql_fetch_array($result)); 
    	}
	else 
	 	{ 
		echo 'agregar Cliente';
		} 
?> 
  