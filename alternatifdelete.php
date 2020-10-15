<?php

$qurs = mysqli_query(Datab(),"delete from alternatif where ida='$_GET[key]'");
$qurssa = mysqli_query(Datab(),"delete from altnilai where ida='$_GET[key]'");
$gf=mysqli_query(Datab(),"delete from altnormal where ida='$_GET[key]'");
$gds=mysqli_query(Datab(),"delete from ranknya where ida='$_GET[key]'");

header("location: ?p=alternatif");