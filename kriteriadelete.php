<?php

$qurs = mysqli_query(Datab(),"delete from kriteria where idk='$_GET[key]'");
header("location: ?p=kriteria");