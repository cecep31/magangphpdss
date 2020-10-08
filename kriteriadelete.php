<?php

$qurs = mysqli_query(Datab(),"delete from kriteria where idk='$_GET[key]'");
$thda = mysqli_query(Datab(),"ALTER TABLE `altnilai` DROP `$_GET[key]`");
header("location: ?p=kriteria");