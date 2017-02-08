<?
session_start();
//sleep(3);
$username = $_POST['username'];
$password = $_POST['password'];
 
$link = mysql_connect("localhost", "root","123456"); 
mysql_select_db("restaurante", $link); 
$result = mysql_query("SELECT pId,pNombres,pApellidos,pAlias,pPassword,pImg,pCargo FROM persona WHERE pAlias='$username' ", $link); 
 
while ($row = mysql_fetch_row($result)){ 
      	if ($row[4]==$password)
	   	{	   
		   $_SESSION["idusuario"]=$row[0];
		   $_SESSION["pernombres"]=$row[1];
		   $_SESSION["perapellidos"]=$row[2];
		   $_SESSION["palias"]=$row[3];
		   $_SESSION["pimagen"]=$row[5];
		   $_SESSION["pCargo"]=$row[6];
		   
		   //setcookie('nombreUsuario', 'Pedro', time() + 4800);
		   //echo date('Y-m-d h:i:s');
		   
		   echo $_SESSION["palias"];
		   $_SESSION["Fecha"]=date('Y-m-d');
		   echo $_SESSION["Fecha"];
		   
		   /*echo  '<script language="javascript">window.location="../demo/inicio.php"</script>';*/
 		   echo  '<script language="javascript">window.location="../backend/pages/tables/generar_stock.php"</script>';
			/*echo '<script language="javascript">window.close()</script>';*/
		   
		   //session_destroy();
		   
		   
		   
		   //echo $_SESSION["Fecha"];
		   echo"_____";
		   exit;
	   	}
		} 
		
		echo "Datos incorrectos";
?>