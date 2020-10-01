<br>
<div class="container">
    <div class="row <?php if (isset($_POST["tambaha"])) {
        echo "row-cols-2";
    } ?>">
       
    <!-- <form>
        <div class="form-group">
            <label>Id/kode identitas</label>
            <input type="text" class="form-control" placeholder="masukan id/kode identitas">
        </div>
        <div class="form-group">
            <label>nama</label>
            <input type="text" class="form-control" placeholder="masukan nama ">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" placeholder="masukan E-mail ">
        </div>
        <div class="form-group">
            <label>tanggal lahir</label>
            <input type="date" class="form-control" placeholder="masukan tgl lahir ">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form> -->
    <?php
        if (isset($_POST["addkan"])) {
            $sql = mysqli_query(Datab(),"insert into alternatif (ida, namaa, emaila, tgl_lahira, alamata) values ('$_POST[id]','$_POST[nama]','$_POST[email]','$_POST[tgl]','$_POST[alamat]')");
        }

        if (isset($_POST["tambaha"])) {
            tampiltambahalteratif();
        }else {
            tampilalternatif();
        }

    ?>
    
    </div>
</div>