<?
$link = mysql_connect("localhost", "root","123456"); 
mysql_select_db("restaurante", $link);
//ADJUDICAR VALOR A CAMPOS DE carta
$idCarta='';
$cCodigo='';
$cDescripcion='';
$cFecha='';
$idUsuario='';


//ADJUDICAR VALOR A CAMPOS DE POST carta
$idCarta=$_POST['idCarta'];
$cCodigo=$_POST['cCodigo'];
$cDescripcion=$_POST['cDescripcion'];
$cFecha=$_POST['cFecha'];
$idUsuario=$_POST['idUsuario'];


//ADJUDICAR VALOR A CAMPOS DE GET carta
$idCarta=$_GET['idCarta'];
$cCodigo=$_GET['cCodigo'];
$cDescripcion=$_GET['cDescripcion'];
$cFecha=$_GET['cFecha'];
$idUsuario=$_GET['idUsuario'];


//ADJUDICAR VALOR A CAMPOS DE SESSION carta
$idCarta=$_SESSION['idCarta'];
$cCodigo=$_SESSION['cCodigo'];
$cDescripcion=$_SESSION['cDescripcion'];
$cFecha=$_SESSION['cFecha'];
$idUsuario=$_SESSION['idUsuario'];


//ADJUDICAR VALOR DE SESSION A CAMPOS carta
$_SESSION['idCarta']=$idCarta;
$_SESSION['cCodigo']=$cCodigo;
$_SESSION['cDescripcion']=$cDescripcion;
$_SESSION['cFecha']=$cFecha;
$_SESSION['idUsuario']=$idUsuario;


//ADJUDICAR VALOR DE SESSION A POST carta
$_SESSION['idCarta']=$_POST['idCarta'];
$_SESSION['cCodigo']=$_POST['cCodigo'];
$_SESSION['cDescripcion']=$_POST['cDescripcion'];
$_SESSION['cFecha']=$_POST['cFecha'];
$_SESSION['idUsuario']=$_POST['idUsuario'];


//ADJUDICAR VALOR DE SESSION A GET carta
$_SESSION['idCarta']=$_GET['idCarta'];
$_SESSION['cCodigo']=$_GET['cCodigo'];
$_SESSION['cDescripcion']=$_GET['cDescripcion'];
$_SESSION['cFecha']=$_GET['cFecha'];
$_SESSION['idUsuario']=$_GET['idUsuario'];


//ADJUDICAR VALOR A CAMPOS DE COOKIE carta
$idCarta=$_COOKIE['idCarta'];
$cCodigo=$_COOKIE['cCodigo'];
$cDescripcion=$_COOKIE['cDescripcion'];
$cFecha=$_COOKIE['cFecha'];
$idUsuario=$_COOKIE['idUsuario'];


//SELECT * DE  carta
$sqlcarta= 'SELECT * from carta';
$querycarta = mysql_query($sqlcarta, $link) or die ('problema al recoger carta');
while($arraycarta = mysql_fetch_row($querycarta)){
$id=$arraycarta[0];
$idCarta=$arraycarta[1];
$cCodigo=$arraycarta[2];
$cDescripcion=$arraycarta[3];
$cFecha=$arraycarta[4];
$idUsuario=$arraycarta[5];
}

?>
//INPUT TYPE PARA INSERT  carta
<span>IDCARTA</span>&nbsp;<input name='idCarta' id='idCarta' type='text'  ><br><br>
<span>CCODIGO</span>&nbsp;<input name='cCodigo' id='cCodigo' type='text'  ><br><br>
<span>CDESCRIPCION</span>&nbsp;<input name='cDescripcion' id='cDescripcion' type='text'  ><br><br>
<span>CFECHA</span>&nbsp;<input name='cFecha' id='cFecha' type='text'  ><br><br>
<span>IDUSUARIO</span>&nbsp;<input name='idUsuario' id='idUsuario' type='text'  ><br><br>


//INPUT TYPE PARA UPDATE PHP carta
<span>IDCARTA</span>&nbsp;<input name='idCarta' id='idCarta' type='text' value='$idCarta' ><br><br>
<span>CCODIGO</span>&nbsp;<input name='cCodigo' id='cCodigo' type='text' value='$cCodigo' ><br><br>
<span>CDESCRIPCION</span>&nbsp;<input name='cDescripcion' id='cDescripcion' type='text' value='$cDescripcion' ><br><br>
<span>CFECHA</span>&nbsp;<input name='cFecha' id='cFecha' type='text' value='$cFecha' ><br><br>
<span>IDUSUARIO</span>&nbsp;<input name='idUsuario' id='idUsuario' type='text' value='$idUsuario' ><br><br>


//INPUT TYPE PARA UPDATE HTML  carta
<span>IDCARTA</span>&nbsp;<input name='idCarta' id='idCarta' type='text' value='<?php echo $idCarta; ?>' ><br><br>
<span>CCODIGO</span>&nbsp;<input name='cCodigo' id='cCodigo' type='text' value='<?php echo $cCodigo; ?>' ><br><br>
<span>CDESCRIPCION</span>&nbsp;<input name='cDescripcion' id='cDescripcion' type='text' value='<?php echo $cDescripcion; ?>' ><br><br>
<span>CFECHA</span>&nbsp;<input name='cFecha' id='cFecha' type='text' value='<?php echo $cFecha; ?>' ><br><br>
<span>IDUSUARIO</span>&nbsp;<input name='idUsuario' id='idUsuario' type='text' value='<?php echo $idUsuario; ?>' ><br><br>

<?
//INSERT EN  carta
$sqlinsertcarta=mysql_query("INSERT INTO carta( 
id
,idCarta
,cCodigo
,cDescripcion
,cFecha
,idUsuario
)
VALUES ( 
'$id'
,'$idCarta'
,'$cCodigo'
,'$cDescripcion'
,'$cFecha'
,'$idUsuario'
)");
$resultcarta=mysql_query($sqlinsertcarta);

//UPDATE EN  carta
$updatecarta = "UPDATE carta SET 
id = '$id'
,idCarta = '$idCarta'
,cCodigo = '$cCodigo'
,cDescripcion = '$cDescripcion'
,cFecha = '$cFecha'
,idUsuario = '$idUsuario'
where id = '$id'";
$resultupdatecarta = mysql_query($updatecarta) or die ('Problema al actualizar carta');


//DELETE EN  carta
$deletecarta = "DELETE FROM carta where id = '$id'";
$delt= mysql_query($deletecarta, $link) or die ('problem to del carta');

?>