<?php
function getAllPosts($familia)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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

function getUsuarios($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO productos(pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES('$nom','$desc','$precio','$familia','$img','$thumb','$idcarta')");

  echo '456';  // Filling up the array
}

function regUsuarios($uNombres,$uApellidos,$uRol,$uFecha,$uAlias,$uPass,$uDni,$uFechNacimiento)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO usuario(uNombres,uApellidos,uRol,uFecha,uAlias,uPass,uDni,uFechNacimiento) VALUES('$uNombres','$uApellidos','$uRol','$uFecha','$uAlias','$uPass','$uDni','$uFechNacimiento')");

  //Echo '456';  // Filling up the array
}

function editPlatos($nom , $desc, $precio, $familia, $img, $thumb, $idCarta)
{
  mysql_connect('localhost','root','123456');
  mysql_select_db('restaurante');
  mysql_query("SET NAMES 'utf8'");
  mysql_query("UPDATE productos(pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES ('$pNombre', '$pDescripcion', '$pPrecio', '$pFamilia', '$pImg', '$pThumb', '$idCarta')");
}
function getCartas($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO carta(cCodigo,cDescripcion,cFecha,idUsuario) VALUES('$cCodigo','$cDescripcion','$cFecha','$idUsuario')");

  //echo '456';  // Filling up the array
}

function getFamilias($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO familia(fNombre,fDescripcion,fFamilia,fCategoria,fThumb) VALUES('$fNombre','$fDescripcion','$fFamilia','$fCategoria','$fThumb')");

  //echo '456';  // Filling up the array
}
function getMesas($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO mesa(mNumero,mArea,mEstado,mImg,mFecha) VALUES('$mNumero','$mArea','$mEstado','$mImg','$mFecha')");

  //echo '456';  // Filling up the array
}

function getVentas($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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
function getVentasie($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  //$result = mysql_query('SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>=' .$ifecha. +' and venta.vFecha<="2015-04-16 23:59:59")', $link);
/* $result = mysql_query("select almacencontroldetalle.idAlmacen, productos.pNombre, sum(almacencontroldetalle.acdCantidad) as total,almacencontrol.acMovimiento from almacencontrol,almacencontroldetalle,productos 
where CAST(almacencontrol.acFecha AS DATE) >= '$ifecha' and CAST(almacencontrol.acFecha AS DATE) <= '$ffecha' 
and almacencontrol.idAlmacenControl=almacencontroldetalle.idAlmacenControl and almacencontroldetalle.idAlmacen = productos.idProducto and acMovimiento='$idx' GROUP BY almacencontroldetalle.idAlmacen", $link);*/

$result = mysql_query("select almacencontroldetalle.idAlmacen, almacen.aProducto, sum(almacencontroldetalle.acdCantidad) as total,almacencontrol.acMovimiento from almacencontrol,almacencontroldetalle,almacen 
where CAST(almacencontrol.acFecha AS DATE) >= '$ifecha' and CAST(almacencontrol.acFecha AS DATE) <= '$ffecha' 
and almacencontrol.idAlmacenControl=almacencontroldetalle.idAlmacenControl and almacencontroldetalle.idAlmacen = almacen.idAlmacen and acMovimiento='$idx' GROUP BY almacencontroldetalle.idAlmacen", $link);



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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO productobase(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta) VALUES('$pNombre','$pDescripcion','$pPrecio','$pFamilia','$pImg','$pThumb','$idCarta')");

  //echo '456';  // Filling up the array
}

function getAlmacens($idx)
{ 
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
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

function getEstadoMesas($idx)
{	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  
  
  //$result = mysql_query('SELECT mNumero, mEstado , mFecha FROM mesa WHERE mEstado = "1" ', $link);
  //$result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero  order by	vId DESC limit 1) as nVenta FROM mesa WHERE mEstado = "1" and mPago="1" ORDER BY mFecha ASC', $link);
 $result = mysql_query('SELECT mNumero, mEstado , mFecha ,(select vId from venta where vMesa= mNumero  order by	vId DESC limit 1
) as nVenta,(select vObservacion from venta where vMesa= mNumero  order by	vId DESC limit 1
) as nObservacion FROM mesa WHERE mEstado = "1" and mPago="1" ORDER BY mFecha ASC', $link);
 
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
  mysql_query("SET NAMES 'utf8'");
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
  mysql_query("SET NAMES 'utf8'");
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

function regAlmacens($aProducto, $aCantidad, $aFecha, $aUnidadMedida,$aConcepto)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO almacen(aProducto,aCantidad,aFecha,aUnidadMedida,aConcepto) VALUES('$aProducto','$aCantidad','$aFecha','$aUnidadMedida','$aConcepto')");

  //echo '456';  // Filling up the array
}

function getVentaCantidadPlatos($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  //$ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  //$result = mysql_query('SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>=' .$ifecha. +' and venta.vFecha<="2015-04-16 23:59:59")', $link);
 
 
 //$result = mysql_query("SELECT venta_detalle.vdId, productos.pNombre,venta_detalle.vId, venta_detalle.vd_idProducto, venta_detalle.vd_Cantidad, venta_detalle.vd_Costo, venta_detalle.vd_Estado, sum(venta_detalle.vd_Cantidad) as suma FROM venta_detalle, productos where venta_detalle.vId>=(SELECT vId FROM venta where vFecha >='$ifecha'  order by	vId asc limit 1) and venta_detalle.vId<=(SELECT vId FROM venta where vFecha <='$ffecha'  order by	vId desc limit 1) and venta_detalle.vd_idProducto=productos.idProducto group by venta_detalle.vd_idProducto", $link);

//$result = mysql_query("SELECT venta_detalle.vdId, productos.pNombre,productos.pPrecio, venta_detalle.vId, venta_detalle.vd_idProducto, venta_detalle.vd_Cantidad, venta_detalle.vd_Costo, venta_detalle.vd_Estado, sum(venta_detalle.vd_Cantidad) as suma FROM venta_detalle, productos where venta_detalle.vId>=(SELECT vId FROM venta where vFecha >='$ifecha'  order by	vId asc limit 1) and venta_detalle.vId<=(SELECT vId FROM venta where vFecha <='$ffecha'  order by	vId desc limit 1) and venta_detalle.vd_idProducto=productos.idProducto group by venta_detalle.vd_idProducto order by productos.pNombre", $link);
$result = mysql_query("SELECT venta.vId,venta_detalle.vdId, productos.pNombre,productos.pPrecio, venta_detalle.vId, venta_detalle.vd_idProducto, venta_detalle.vd_Cantidad, 
venta_detalle.vd_Costo, venta_detalle.vd_Estado, sum(venta_detalle.vd_Cantidad) as suma FROM venta_detalle, productos, venta
where CAST(venta.vFecha AS DATE) >= '$ifecha' and CAST(venta.vFecha AS DATE) <= '$ifecha'
and venta_detalle.vd_idProducto=productos.idProducto and venta.vId=venta_detalle.vId group by venta_detalle.vd_idProducto order by productos.pNombre", $link);




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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT persona.pId, persona.pNombres, persona.pApellidos,persona.pFechNac,persona.pSexo,persona.pTelCell,	persona.pCargo,	persona.pAlias,	persona.pPassword, persona.pFechNac,persona.pFechReg, rol.idRol,rol.rNombre FROM persona,rol where persona.pCargo= rol.idRol', $link);
 
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
function getconsultaPersonas($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT persona.pId, persona.pNombres, persona.pApellidos,persona.pFechNac,persona.pSexo,persona.pTelCell,	persona.pCargo,	persona.pAlias,	persona.pPassword, persona.pFechNac,persona.pFechReg, rol.idRol,rol.rNombre FROM persona,rol where persona.pCargo= rol.idRol and persona.pId='.$idx.'', $link);
 
  // Filling up the array
  $cconsultapersonas = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cconsultapersonas[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cconsultapersonas;
}

function regPersonas($pNombres, $pApellidos, $pFechNac, $pSexo, $pTelCell, $pCargo, $pNomCorto, $pAlias, $pPassword)
{ 
  // Connecting, selecting database
  mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante');
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO persona(pNombres,pApellidos,pFechNac,pSexo,pTelCell,pCargo,pNomCorto,pAlias,pPassword) VALUES('$pNombres','$pApellidos','$pFechNac','$pSexo','$pTelCell','$pCargo','$pNomCorto','$pAlias','$pPassword')");

  //echo '456';  // Filling up the array
}
function getProductoss($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT productos.idProducto, productos.pFamilia, productos.pNombre, productos.pDescripcion, productos.pPrecio, familia.fNombre, carta.cDescripcion FROM productos, familia, carta where productos.pFamilia=familia.fId and productos.idCarta=carta.idCarta order by productos.idProducto asc', $link);
 
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



function getSelectProductos($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT productos.idProducto, productos.pFamilia, productos.pNombre, productos.pDescripcion, productos.pPrecio, familia.fNombre, productos.idCarta, carta.cDescripcion FROM productos, familia, carta where productos.pFamilia=familia.fId and productos.idCarta=carta.idCarta and productos.idProducto='.$idx.'', $link);
 
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

function getSelectFamilias($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT fId, fNombre, fDescripcion, fFamilia, fCategoria, fThumb from familia', $link);
 
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

function getSelectCartas($idx)
{
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT idCarta, cCodigo, cDescripcion, cFecha, idUsuario from carta', $link);
 
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
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  mysql_query("INSERT INTO productos(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta) VALUES('$pNombre','$pDescripcion','$pPrecio','$pFamilia','$pimg','$pThumb','$idCarta')");

  //echo '456';  // Filling up the array
}
function getAlmacenStocks($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query('SELECT idAlmacen,aProducto, aCantidad, aFecha,aUnidadMedida FROM almacen', $link);
 
 
 //$result = mysql_query("SELECT venta_detalle.vdId, productos.pNombre,venta_detalle.vId, venta_detalle.vd_idProducto, venta_detalle.vd_Cantidad, venta_detalle.vd_Costo, venta_detalle.vd_Estado, sum(venta_detalle.vd_Cantidad) as suma FROM venta_detalle, productos where venta_detalle.vId>=(SELECT vId FROM venta where vFecha >='$ifecha'  order by  vId asc limit 1) and venta_detalle.vId<=(SELECT vId FROM venta where vFecha <='$ffecha'  order by vId desc limit 1) and venta_detalle.vd_idProducto=productos.idProducto group by venta_detalle.vd_idProducto", $link);

//$result = mysql_query("SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto,venta.vCostoVisa, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>='$ifecha' and venta.vFecha<='$ffecha')", $link);


  // Filling up the array
  $cAlmacenStocks = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cAlmacenStocks[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cAlmacenStocks;
}


function getVentaDiarias($idx, $ifecha ,$ffecha)
{ 
  //echo "texto".$ifecha;
  $ffecha=$ffecha." 23:59:59";
  
  //echo "texto".$ifecha;
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
  mysql_query("SET NAMES 'utf8'");
  // Performing SQL query
  $result = mysql_query("select idAlmacenDia, idAlmacen, aProducto, aCantidad, aFecha, aUnidadMedida,(select sum(almacencontroldetalle.acdCantidad) as suma from almacencontroldetalle, almacencontrol where almacencontroldetalle.idAlmacenControl=almacencontrol.idAlmacenControl and CAST(almacencontrol.acFecha AS DATE) ='".$ifecha."' and almacencontroldetalle.idAlmacen=almacendia.idAlmacen and almacencontrol.acMovimiento='Ingreso' group by almacencontroldetalle.idAlmacen) as ingresoalmacen,(select sum(almacencontroldetalle.acdCantidad) as suma from almacencontroldetalle, almacencontrol where almacencontroldetalle.idAlmacenControl=almacencontrol.idAlmacenControl and CAST(almacencontrol.acFecha AS DATE) = '".$ifecha."' and almacencontroldetalle.idAlmacen=almacendia.idAlmacen and almacencontrol.acMovimiento='Egreso' group by almacencontroldetalle.idAlmacen) as egresoalmace,(Select sum(productoalmacen.paCantidad * venta_detalle.vd_Cantidad) as cantidad from venta, venta_detalle,productoalmacen where venta.vId=venta_detalle.vId and venta_detalle.vd_idProducto = productoalmacen.idProducto and CAST(venta.vFechaCaja AS DATE) = '".$ifecha."' and productoalmacen.idAlmacen=almacendia.idAlmacen group by productoalmacen.idAlmacen) as productosvendidos from almacendia where CAST(aFecha AS DATE) = '".$ifecha."'", $link);
 
 
 //$result = mysql_query("SELECT venta_detalle.vdId, productos.pNombre,venta_detalle.vId, venta_detalle.vd_idProducto, venta_detalle.vd_Cantidad, venta_detalle.vd_Costo, venta_detalle.vd_Estado, sum(venta_detalle.vd_Cantidad) as suma FROM venta_detalle, productos where venta_detalle.vId>=(SELECT vId FROM venta where vFecha >='$ifecha'  order by  vId asc limit 1) and venta_detalle.vId<=(SELECT vId FROM venta where vFecha <='$ffecha'  order by vId desc limit 1) and venta_detalle.vd_idProducto=productos.idProducto group by venta_detalle.vd_idProducto", $link);

//$result = mysql_query("SELECT venta.vId, venta.vFecha, venta.vFechaCaja, venta.vMesa,venta.vCosto,venta.vCostoVisa, persona.pNombres , persona.pApellidos FROM venta, persona where venta.vIdpersona=persona.pId and (venta.vFecha>='$ifecha' and venta.vFecha<='$ffecha')", $link);


  // Filling up the array
  $cAlmacenStocks = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cAlmacenStocks[] = $row;
  }
  // Closing connection
  mysql_close($link);
  return $cAlmacenStocks;
  
}

?>


