<?php

function searchForId ( $id , $Arr )  { 
   foreach  ( $Arr as $key => $val )  { 
       if  ( $val [ 'titulo' ]  === $id )  { 
           return $key ; 
       } 
   } 
   return  null ; 
}

$Arr[0] = array('titulo'=>'27', 'autor'=>'c3 ');
$Arr[1] = array('titulo'=>'28', 'autor'=>'c1 ');
//print_r($_SESSION["Arr"]);
echo "valor";
//exit(1);

$Id = searchForId( '27' , $Arr );
echo  $Id;
?>