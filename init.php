
<?php
include "config\app.php";
$sql = mysqli_query(Datab(),"SELECT * FROM `altnilai` LIMIT 1");
$asd = mysqli_query(Datab(),"SELECT count(*) AS NUMBEROFCOLUMNS FROM information_schema.columns WHERE table_name = 'altnilai'");
while ($rasd = mysqli_fetch_array($asd)) {
    $jmlfl =  $rasd[0];
}
$ria= mysqli_query(Datab(),"desc altnilai");
while ($ty=mysqli_fetch_array($ria)) {
    echo $ty["0"];
    echo "<br>";
}