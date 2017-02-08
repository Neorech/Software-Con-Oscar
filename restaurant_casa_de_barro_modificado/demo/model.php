<?php
function getAllPosts($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT idProducto, pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb FROM productos where pFamilia='.$familia.' and idCarta=3', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}
function getAllPersonas($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT pId, pNombres, pApellidos, pFechNac, pSexo, pTelCell,pImg FROM persona where pCargo =0', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
  function searchProductos($idx)
  {
    //Conenecting, selecting database
    $link = mysql_connect('localhost','root','123456');
    mysql_select_db('restaurante',$link);

    //Performing SQL query

  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}

function getAllVentas($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT vId, vCantidadProducto, vFecha, vIdusuario, vIdTiket, vMesa FROM venta', $link);
 
  // Filling up the array
  $cventas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cventas[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cventas;
}

function getAllMesas($mesaestado)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  //echo $mesaestado;
  // Performing SQL query
  $result = mysql_query('SELECT mId, mNumero, mFamilia, mEstado, mImg, mFecha FROM mesa where mPago ='.$mesaestado.'', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}
function getAllCategorias($cat)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  
  // Performing SQL query
  $result = mysql_query(' SELECT fId, fNombre,fThumb FROM familia where fCategoria= '.$cat.'', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}
function getAllItems()
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT idProducto, pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb FROM productos ', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}

function getDetallePedidos($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT v.vId,v.vCantidadProducto, v.vFecha,v.vIdTiket, v.vMesa, vd.vd_Cantidad, vd.vd_Costo, p.pNombre,p.pPrecio ,per.pNombres, per.pApellidos from venta v inner JOIN venta_detalle vd on vd.vId=v.vId INNER JOIN productos p on vd.vd_idProducto = p.idProducto INNER JOIN persona per on v.vIdpersona = per.pId and vd.vId='.$idx.'', $link);
 
  // Filling up the array
  $cDetallePedidos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cDetallePedidos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cDetallePedidos;
}
function getEstadoMesas($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  
  
  //$result = mysql_query('SELECT mNumero, mEstado , mFecha FROM mesa WHERE mEstado = "1" ', $link);
  //$result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero  order by	vId DESC limit 1) as nVenta FROM mesa WHERE mEstado = "1" and mPago="1" ORDER BY mFecha ASC', $link);
 
 
 //$result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero  order by	vId DESC limit 1
//) as nVenta,(select vObservacion from venta where vMesa= mNumero  order by	vId DESC limit 1
//) as nObservacion FROM mesa WHERE mEstado = "1" and mPago="1" ORDER BY mFecha ASC', $link);
 $result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero  order by	vId DESC limit 1
) as nVenta,(select vObservacion from venta where vMesa= mNumero  order by	vId DESC limit 1
) as nObservacion,(select vTimbre from venta where vMesa= mNumero  order by	vId DESC limit 1
) as nTimbre FROM mesa WHERE mEstado = "1" and mPago="1" ORDER BY mFecha ASC', $link);
 
  // Filling up the array
  $cEstadoMesas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cEstadoMesas[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cEstadoMesas;
}
function getEstadoMesaCajas($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  
  
  //$result = mysql_query('SELECT mNumero, mEstado , mFecha FROM mesa WHERE mEstado = "1" ', $link);
  $result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero and vEstado ="0" order by	vId DESC limit 1
) as nVenta FROM mesa WHERE mEstado = "0" and mPago="1" ORDER BY mFecha ASC', $link);
 
  // Filling up the array
  $cEstadoMesaCajas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cEstadoMesaCajas[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cEstadoMesaCajas;
}


function getProductoBases($idx)
{	
  $fechaactual= date("Y-m-d");
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
   $result = mysql_query('SELECT pNombre,pPrecio FROM productobase ', $link);
	 //$result = mysql_query('SELECT pNombre,pPrecio FROM productobase where vFecha>="2015-04-21" ', $link);
 
  // Filling up the array
  $cProductoBases = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cProductoBases[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cProductoBases;
}

function getVentas($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  //$result = mysql_query('SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>=' .$ifecha. +' and venta.vFecha<="2015-04-16 23:59:59")', $link);
 $result = mysql_query("SELECT venta.vId, venta.vFecha, venta.vEstado, venta.vFechaCaja, venta.vMesa,venta.vCosto,venta.vCostoVisa, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>='$ifecha' and venta.vFecha<='$ffecha')", $link);

  // Filling up the array
  $cVentas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cVentas[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cVentas;
}

function getVentaCantidadPlatos($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  //$result = mysql_query('SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>=' .$ifecha. +' and venta.vFecha<="2015-04-16 23:59:59")', $link);
 
 
 $result = mysql_query("SELECT vdId, vId, vd_idProducto, vd_Cantidad, vd_Costo, vd_Estado FROM `venta_detalle` where vId>=(SELECT vId FROM venta where vFecha >='2015-04-24 00:00:00'  order by	vId asc limit 1) and vId<=(SELECT vId FROM venta where vFecha >='2015-04-24 00:00:00'  order by	vId desc limit 1)", $link);

//$result = mysql_query("SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto,venta.vCostoVisa, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>='$ifecha' and venta.vFecha<='$ffecha')", $link);


  // Filling up the array
  $cVentaCantidadPlatos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cVentaCantidadPlatos[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cVentaCantidadPlatos;
}
function getPersonas($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT pNombres, pApellidos, pFechNac FROM persona', $link);
 
  // Filling up the array
  $cpersonas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cpersonas[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cpersonas;
}

function getAlmacens($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT aProducto, aCantidad, aUnidadMedida FROM almacen', $link);
 
  // Filling up the array
  $calmacens = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $calmacens[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $calmacens;
}
function regAlmacens($aProducto, $aCantidad, $aFecha, $aUnidadMedida)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO almacen(aProducto,aCantidad,aFecha,aUnidadMedida) VALUES('$aProducto','$aCantidad','$aFecha','$aUnidadMedida')");

  //echo '456';  // Filling up the array
}

function regPersonas($pNombres, $pApellidos, $pFechNac, $pSexo, $pTelCell, $pCargo, $pNomCorto, $pAlias, $pPassword)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO persona(pNombres,pApellidos,pFechNac,pSexo,pTelCell,pCargo,pNomCorto,pAlias,pPassword) VALUES('$pNombres','$pApellidos','$pFechNac','$pSexo','$pTelCell','$pCargo','$pNomCorto','$pAlias','$pPassword')");

  //echo '456';  // Filling up the array
}

function regEstadoTimbres($idx)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("UPDATE venta SET vTimbre = '0' WHERE vId ='$idx' ");

  //echo '456';  // Filling up the array
}
function getProductoss($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT pNombre,pDescripcion,pPrecio FROM productos', $link);
 
  // Filling up the array
  $cproductoss = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductoss[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductoss;
}
function regProductoss($pNombre,$pDescripcion,$pPrecio,$pFamilia,$pImg,$pThumb,$idCarta)
{// Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO productos(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta) VALUES('$pNombre','$pDescripcion','$pPrecio','$pFamilia','$pimg','$pThumb','$idCarta')");

  //echo '456';  // Filling up the array
}
function regMesas($mNumero,$mFamilia,$mEstado,$mImg,$mFecha,$mPago)
{// Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO mesa(mNumero,mFamilia,mEstado,mImg,mFecha,mPago) VALUES('$mNumero','$mFamilia','$mEstado','$mImg','$mFecha','$mPago')");

  //echo '456';  // Filling up the array
}
  /*function searchProductos($idx)
  {
    //Conenecting, selecting database
    $link = mysql_connect('localhost','root','123456');
    mysql_select_db('restaurante',$link);

    //Performing SQL query
    mysql_query("SELECT name FROM productos WHERE pNombre LIKE "%pNombre%"");
  
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}*/

?>