<br>
<div class="container">
    <div class="row <?php if (isset($_POST["tambaha"])) {
        echo "row-cols-2";
    } ?>">
       
    
    <?php
        if (isset($_POST["simp"])) {
            // $qualy1 = mysqli_query(Datab(), "selct * from altnilai");
            // $buatfiled=mysqli_query(Datab(), "ALTER TABLE altnilai ADD '$_POST[idk]' after  ");
            $quali = mysqli_query(Datab(), "UPDATE `altnilai` SET `c$_POST[idk]` = '$_POST[bobotk]' WHERE ida = '$_POST[ida]'");
           
            
        }
        if (isset($_POST["addkan"])) {
            $sql = mysqli_query(Datab(),"insert into alternatif (ida, namaa, emaila, tgl_lahira, alamata) values ('$_POST[id]','$_POST[nama]','$_POST[email]','$_POST[tgl]','$_POST[alamat]')");
            $HIMPIT = mysqli_query(Datab(), "INSERT IGNORE INTO altnilai (ida) SELECT ida FROM alternatif");
            $HdMPIT = mysqli_query(Datab(), "INSERT IGNORE INTO altnormal (ida) SELECT ida FROM alternatif");
            $HMPIT = mysqli_query(Datab(), "INSERT IGNORE INTO ranknya (ida) SELECT ida FROM alternatif");
        }

        if (isset($_POST["tambaha"])) {
            tampiltambahalteratif();
        }elseif (isset($_POST["tambahab"])) {
            formtambahnilai();
        }
        else {
            tampilalternatif();
        }

    ?>
    
    </div>

</div>
<!-- <script>

function showUser(str) {
  if (str == "") {
    document.getElementById("inidia").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","init.php?q="+str,true);
    xmlhttp.send();
  }
}
</script> -->