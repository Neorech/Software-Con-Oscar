<?
session_start();

      	if ($_SESSION["idusuario"]>='1')
	   	{	   
		   /*
		   if($_SESSION["pCargo"]=='0' and $_SERVER['REQUEST_URI']='/restaurant/demo/caja')
		   {
			
		   }
		   
		   if($_SESSION["pCargo"]=='2' and $_SERVER['REQUEST_URI']='/restaurant/demo/cocina' )
		   {
			 }
		   
		   
		   */
		   
	   	}
		else
		{
		echo  '<script language="javascript">window.location="http://localhost/restaurant/login/login.php"</script>';	
        
        
        }

?>