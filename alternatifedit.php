<br>
<div class="container">
        <div class="row">
           
<?php
if (isset($_POST["addkan"])) {
    $qq = mysqli_query(Datab(),"UPDATE alternatif set ida='$_POST[id]', namaa='$_POST[nama]',emaila='$_POST[email]', tgl_lahira='$_POST[tgl]', alamata='$_POST[alamat]' where ida='$_GET[key]'");
    // echo $_POST["id"];
    // echo $_POST["nama"];
    // echo $_POST["email"];
    // echo $_POST["tgl"];
    // echo $_POST["alamat"];
    header("location: ?p=alternatif");
}else {
    
    $equri = mysqli_query(Datab(),"SELECT * from alternatif WHERE ida='$_GET[key]'");
    
    // foreach ($equri as $x => $val) {
    //     echo $x = $val; 
    //     echo "<br>";
    // }
    while ($t = mysqli_fetch_array($equri)) {
        $id = $t["0"];
        $nama = $t["1"];
        $email = $t["2"];
        $tgl = $t["3"];
        $alamat = $t["4"];
    }
    tampiltambahalteratif($id,$nama,$email,$tgl,$alamat);
}
?>
    </div>
</div>
