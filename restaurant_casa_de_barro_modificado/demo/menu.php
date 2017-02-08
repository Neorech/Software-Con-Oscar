<style>
body {
    margin: 0 auto;
 
}
#menu{
	border:1px solid #3c8dbc;
	width: 100%;
	background:#3c8dbc;
	color:#FFF;
	padding:14px;
}

#menu a{
	color: #fff;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: bold;
    text-decoration: none;
	font-size: 20px;
	padding: 40px;
	
}

</style>
<?
echo '<div id="menu"> <a href="cocina.php"> COCINA</a><a href="barra.php"> BARRA</a><a href="caja.php"> CAJA</a><a href="../backend/pages/tables/repventas.php?ifecha='.date("Y-m-d").'&ffecha='.date("Y-m-d").'"> ADMINISTRACION</a></div>';


?>