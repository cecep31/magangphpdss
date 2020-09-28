<?php


$jmlc = 5;
$arraasd = array('c1','c2','c3');
$cnya = 3;
for ($i=$cnya; $i <= $jmlc ; $i++) { 
    $cnya=$cnya + 1;
    array_push( $arraasd, "c$cnya");
}

print_r( $arraasd );
$data;
foreach ($arraasd as $data) {
    
}

class MyClass
{
   function __construct($arraasd)
   {
       
   }
}

$myobj = new MyClass('asd','asd');
echo $myobj->myprop;