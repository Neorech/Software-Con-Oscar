<script language="JavaScript">
function Borra(idcliente)
{
var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
if (agree) { document.location="eliminar.php?id="+idcliente; }
else return false ;
}
</script>
<style type="text/css">
body p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
<form name="form1" method="post" action="buscador.php" id="cdr" >
  <h3>Buscar Producto  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
      </p>
</form>
 <p>
  <style type="text/css">
input{outline:none;border:0px;}
#busqueda{background:#585858;color:#fff;}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}
</style>

   
  <?php
$busca="";
$busca=$_POST['busca'];
mysql_connect('localhost','root','123456');// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("restaurante");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM productos WHERE pNombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Id </td>
     <td width="61">Nombre</td>
     <td width="250">Descripcion</td>
     <td width="61">Precio</td>
     <td width="61">Familia</td>
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda))
{
echo '<tr>';
echo '<td width="19">'.$f['idProducto'].'</td>';
echo '<td width="61">'.$f['pNombre'].'</td>';
echo '<td width="250">'.$f['pDescripcion'].'</td>';
echo '<td width="61">'.$f['pPrecio'].'</td>';
echo '<td width="61">'.$f['pFamilia'].'</td>';
}
}
?>
</table>