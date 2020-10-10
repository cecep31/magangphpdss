<br>
<div class="container">
        <div class="row">
           
<?php
if (isset($_POST["addkan"])) {
    $qq = mysqli_query(Datab(),"update kriteria set namak='$_POST[nama]', bobotk='$_POST[bobot]',borc='$_POST[borc]' where idk='$_GET[key]'");
    header("location: ?p=kriteria");
}else {
    
    $equri = mysqli_query(Datab(),"SELECT * from kriteria WHERE idk='$_GET[key]'");
    
    // foreach ($equri as $x => $val) {
    //     echo $x = $val; 
    //     echo "<br>";
    // }
    while ($t = mysqli_fetch_array($equri)) {
        $nama = $t["1"];
        $bobot = $t["2"];
        $borc = $t["3"];
    }
    tampiladdkriteria($nama,$bobot,$borc);
}
?>
    </div>
</div>
