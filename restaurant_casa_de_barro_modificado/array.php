<?
session_start();


print_r($_SESSION["arr"]);

//unset($arr[1]);
echo "</p>___________________</p>" ;

$stack = $_SESSION["arr"];
array_push($stack,"fruta");

print_r($_SESSION["arr"]);
?>