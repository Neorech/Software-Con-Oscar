 <?php

$link = mysql_connect("localhost", "munihuan_master","GXGpALPRJcV7tCRd");
mysql_select_db("munihuan_dbportalnew", $link);
$result = mysql_query("select id,title, alias, introtext from j25_content order by id desc limit 5", $link);
while($row = mysql_fetch_array($result)) {
echo "<hr>";
echo "id: ".$row['id']."<br>";
echo "title: ".$row['title']."<br>";
echo "alias: ".$row['alias']."<br>";
echo "introtext:".$row['introtext']."<br>";
} 
mysql_free_result($result);
mysql_close($link);
echo "<hr>";











$dbhost = 'localhost';
$dbuser = 'munihuan_master';
$dbpass = 'GXGpALPRJcV7tCRd';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$var="canino";


$sql = 'UPDATE j25_modules
        SET params='.$var.'
        WHERE id=162';

mysql_select_db('munihuan_dbportalnew');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);

?>