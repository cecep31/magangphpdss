<div class="container">
<?php

$golo = mysqli_query(Datab(), "select * from altnilai order by ida asc");
$ni=0;
$cars = array();
$ria= mysqli_query(Datab(),"desc altnilai");
while ($ty=mysqli_fetch_array($ria)) {
    echo $ty["0"];
    echo "<br>";
}
$nok=1;
$nok2=2;
$nokkat=1;
$kriteria=mysqli_query(Datab(),"select * from kriteria order by idk asc");
while ($tar=mysqli_fetch_array($kriteria)) {
    if ($tar["3"]=="b") {
        $go=mysqli_query(Datab(),"select '$tar[$nok]' from altnilai order by ida asc");
        $lai = mysqli_query(Datab(), "SELECT max($tar[$nok]) AS max FROM altnilai");
        while ($rt=mysqli_fetch_array($go)) {
            $rt[$nok];
        }
        echo "bangsat";
    }else {
        $go=mysqli_query(Datab(),"select * from altnilai order by ida asc limit $nok,$nok2");
        $lai = mysqli_query(Datab(), "SELECT min($tar[$nok]) AS max FROM altnilai");
        while ($rt=mysqli_fetch_array($go)) {
            $rt[$nok];
        }
        echo "cok";
    }
    $nok += 1;
}
$no=1;
// while ($yu=mysqli_fetch_array($go)) {
//     $lai = mysqli_query(Datab(), "SELECT max($yu[1]) AS max FROM altnilai");
//     $sqlki=mysqli_query(Datab(),"select '$yu[1]' from kriteria where idk  ");
    
// }

?>
</div>