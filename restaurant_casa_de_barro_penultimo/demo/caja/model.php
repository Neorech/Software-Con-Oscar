<?php
function getAllPosts($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT idProducto, pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb FROM productos where pFamilia='.$familia.' and idCarta=0', $link);
 
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
  $result = mysql_query('SELECT pId, pNombres, pApellidos, pFechNac, pSexo, pTelCell,pImg FROM persona', $link);
 
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

function getAllMesas($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT mId, mNumero, mFamilia, mEstado, mImg, mFecha FROM mesa', $link);
 
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
  $result = mysql_query('SELECT id, pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb FROM productos ', $link);
 
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
  $result = mysql_query('SELECT v.vId,v.vCantidadProducto, v.vFecha,v.vIdTiket, v.vMesa, vd.vd_Cantidad, vd.vd_Costo, p.pNombre,p.pPrecio ,per.pNombres, per.pApellidos from venta v inner JOIN venta_detalle vd on vd.vId=v.vId INNER JOIN productos p on vd.vd_idProducto = p.id INNER JOIN persona per on v.vIdpersona = per.pId and vd.vId='.$idx.'', $link);
 
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
  $result = mysql_query('SELECT mNumero, mEstado , mFecha FROM mesa WHERE mEstado = "1" ', $link);
 
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

function getProductos($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta FROM productos ', $link);
 
  // Filling up the array
  $cProducto = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cProducto[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cProducto;
}

function getUsuarios($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT uNombres,uApellidos,uRol,uFecha,uAlias,uPass FROM usuario ', $link);
 
  // Filling up the array
  $cUsuario = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cUsuario[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cUsuario;
}

function getId($idx){

  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT * FROM usuario WHERE idUsuario = $idx', $link);
 
  // Filling up the array
  $cUsuario = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cUsuario[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cUsuario;
}

/*function regPlatos($nom , $desc, $precio, $familia, $img, $thumb, $idcarta)
{
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);

  $sql = "INSERT INTO productos(pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES('$nom','$desc','$precio','$familia','$img','thumb','idcarta')";
  $rst=mysql_query($sql);
  $mysqli_execute($rst);
  }
*/

 function regPlatos($nom , $desc, $precio, $familia, $img, $thumb, $idCarta)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO productos(pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES('$nom','$desc','$precio','$familia','$img','$thumb','$idcarta')");

  echo '456';  // Filling up the array
}

function regUsuarios($uNombres,$uApellidos,$uRol,$uFecha,$uAlias,$uPass,$uDni,$uFechNacimiento)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO usuario(uNombres,uApellidos,uRol,uFecha,uAlias,uPass,uDni,uFechNacimiento) VALUES('$uNombres','$uApellidos','$uRol','$uFecha','$uAlias','$uPass','$uDni','$uFechNacimiento')");

  //Echo '456';  // Filling up the array
}

function editPlatos($nom , $desc, $precio, $familia, $img, $thumb, $idCarta)
{
  mysql_connect('localhost','root','123456');
  mysql_select_db('restaurante');

  mysql_query("UPDATE productos(pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES ('$pNombre', '$pDescripcion', '$pPrecio', '$pFamilia', '$pImg', '$pThumb', '$idCarta')");
}
function getCartas($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT cCodigo,cDescripcion,cFecha,idUsuario FROM carta ', $link);
 
  // Filling up the array
  $cCarta = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cCarta[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cCarta;
}
function regCartas($cCodigo, $cDescripcion, $cFecha, $idUsuario)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO carta(cCodigo,cDescripcion,cFecha,idUsuario) VALUES('$cCodigo','$cDescripcion','$cFecha','$idUsuario')");

  //echo '456';  // Filling up the array
}

function getFamilias($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT fNombre,fDescripcion,fFamilia,fCategoria,fThumb FROM familia ', $link);
 
  // Filling up the array
  $cFamilia = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cFamilia[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cFamilia;
}
function regFamilias($fNombre, $fDescripcion, $fFamilia, $fCategoria, $fThumb)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO familia(fNombre,fDescripcion,fFamilia,fCategoria,fThumb) VALUES('$fNombre','$fDescripcion','$fFamilia','$fCategoria','$fThumb')");

  //echo '456';  // Filling up the array
}
function getMesas($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT mNumero,mArea,mEstado,mImg,mFecha FROM mesa ', $link);
 
  // Filling up the array
  $cMesa = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cMesa[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cMesa;
}
function regMesas($mNumero, $mArea, $mEstado, $mImg, $mFecha)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO mesa(mNumero,mArea,mEstado,mImg,mFecha) VALUES('$mNumero','$mArea','$mEstado','$mImg','$mFecha')");

  //echo '456';  // Filling up the array
}
function getProductoBases($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT pNombre,pPrecio FROM productobase ', $link);
 
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
 $result = mysql_query("SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto,venta.vCostoVisa, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>='$ifecha' and venta.vFecha<='$ffecha')", $link);

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



function regProductoBases($pNombre, $pDescripcion, $pPrecio, $pFamilia, $pImg,$pThumb,$idCarta)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO productobase(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta) VALUES('$pNombre','$pDescripcion','$pPrecio','$pFamilia','$pImg','$pThumb','$idCarta')");

  //echo '456';  // Filling up the array
}

function getAlmacens($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT aProducto,aCantidad,aUnidadMedida FROM almacen', $link);
 
  // Filling up the array
  $cAlmacens = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cAlmacens[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cAlmacens;
}

function regAlmacens($aProducto, $aCantidad, $aFecha, $aUnidadMedida,$aConcepto)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
 
  // Performing SQL query
  mysql_query("INSERT INTO almacen(aProducto,aCantidad,aFecha,aUnidadMedida,aConcepto) VALUES('$aProducto','$aCantidad','$aFecha','$aUnidadMedida','$aConcepto')");

  //echo '456';  // Filling up the array
}
?>