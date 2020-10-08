<?php

$qurs = mysqli_query(Datab(),"delete from alternatif where ida='$_GET[key]'");
$qurssa = mysqli_query(Datab(),"delete from altnilai where ida='$_GET[key]'");

header("location: ?p=alternatif");