<?php

function Datab()
{
    # code...
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "magangdss";

        $conn = new mysqli($host,$user,$pass, $db);
        if ($conn->connect_error) {
            die("connection failed: ". $conn->connect_error);
        }
        // else{echo 'berhasil connect';}

        return $conn;
}

$jml = 4;
class Kriteria 
    {
        function __construct($c1,$c2,$c3,$c4 = null, $c5=null,$c6=null,$c7=null,$c8=null)
        {
            $this->c1 = $c1;
            $this->c2 = $c2;
            $this->c3 = $c3;
            $this->c4 = $c4;
            $this->c5 = $c5;
            $this->c6 = $c6;
            $this->c7 = $c7;
            $this->c8 = $c8;

        }
        function getdata(){
            $var = array($this->c1,$this->c2,$this->c3,$this->c4,$this->c5,$this->c6,$this->c7,$this->c8);
            return $var;
        //     return $this->c1;
            

        }
        // function getdata2(){
        //     return $this->c2;
        // }
        // function getdata3(){
        //     return $this->c3;
        // }
        // function getdata4(){
        //     return $this->c4;
        // }
        // function getdata5(){
        //     return $this->c5;
        // }
        // function getdata6(){
        //     return $this->c6;
        // }
        // function getdata7(){
        //     return $this->c7;
        // }
        // function getdata8(){
        //     return $this->c8;
        // }
        

    }


function sqlkriteria(){
    $sql = 'SELECT * FROM kriteria';
    $result = mysqli_query(Datab(),$sql);
    while($row = mysqli_fetch_array($result)) 
    {
        echo "
                        <br>
                        <h2>kriteria</h2>
                        <hr>
                        
                        <table class='table'>
                        <thead class='thead-light'>
                            <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>$row[2]</th>
                            <th scope='col'>$row[3]</th>
                            <th scope='col'>$row[4]</th>
                            <th scope='col'>$row[5]</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope='row'>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope='row'>2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope='row'>3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                        
                        ";
    }
    // return $result;

}
function tampilformjml(){
    echo "
                        <div class='col-4'>
                        <h2>Config kriteria</h2> 
                        <hr>
                        <form method='POST' action=''>
                            <!-- <div class='form-group'> -->
                                <!-- <label for='exampleFormControlInput1'>masukan jumlah kriteria</label> -->
                                <!-- <input type='text' name='jml' class='form-control' id='exampleFormControlInput1'
                                    placeholder='jumlah kriteria'>
                            </div> -->
                            <div class='form-group'>
                                <label for='exampleFormControlSelect1'>Example select</label>
                                <select class='form-control' name='jml' id='exampleFormControlSelect1'>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class='form-group'>
                                <button type='submit' class='btn btn-primary' name='simpan1'>Submit</button>
                            </div>
                        </form>
                        </div>
                        ";
}

function tampilkriteriaform(){
    echo "
    <div class='col-2'>
        <br>
        <h2>Config kriteria</h2> 
        <hr>
        <form method='POST' action=''>";
         $index = 1;
         for ($i=0; $i < $_POST["jml"]; $i++) { 
            echo "    
                <div class='form-group'>
                <!-- <label for='exampleFormControlInput1'>masukan jumlah kriteria</label> -->
                <input type='text' name='c$index' class='form-control' id='exampleFormControlInput1' placeholder='masukan kriteria $index'>
                </div>
                ";
            $index=$index+1;
        }
        $jumlah = $_POST["jml"];
        echo "
            <div class='form-group'>
                <input type='hidden' name='jml'  value='$jumlah'>
                
            </div>
            <div class='form-group'>
                 <button type='submit' class='btn btn-primary' name='simpan2'>Submit</button>
            </div>
                    
        </form>
    </div>";
    
}

function tampilformbobot(){
  
    if (isset($_POST["c1"])) {
        $k1 = $_POST["c1"];
    }
    if (isset($_POST["c2"])) {
        $k2 = $_POST["c2"];
    }
    if (isset($_POST["c3"])) {
        $k3 = $_POST["c3"];
    }
    if (isset($_POST["c4"])) {
        $k4 = $_POST["c4"];
    }
    if (isset($_POST["c5"])) {
        $k5 = $_POST["c5"];
    }
    if (isset($_POST["c6"])) {
        $k6 = $_POST["c6"];
    }
    if (isset($_POST["c7"])) {
        $k7 = $_POST["c7"];
    }
    if (isset($_POST["c8"])) {
        $k8 = $_POST["c8"];
    }
 
    echo "
    <div class='col-4'>
        <h2>Config kriteria</h2> 
        <hr>
        <form method='POST' action=''>
            <h2>berada bobot</h2>
        </form>
    </div>
    ";
}

function tampilkriteria(){
    $sql = "SELECT * FROM Kriteria";
    $quer = mysqli_query(Datab(),"select * from kriteria");
    echo "
        <br>
        <div class='col-6'>
            <h2>kriteria</h2>
        </div>
        <div class='col-6'>
            <form action='' method='post'>

                <button type='submit' name='tambahk' class='btn btn-primary float-right btn-sm' data-toggle='modal'>
                    Tambah kriteria
                </button>
            </form>
        </div>

        <hr>           
        <table class='table'>
    ";
    echo "
                <thead class='thead-light'>
                     <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama kriteria</th>
                        <th scope='col'>Bobot</th>
                        <th scope='col'>keterangan benefit/cost</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
    ";
    $nom = 1;
    $totb = 0;
    while ($row = mysqli_fetch_array($quer)) {
        echo "
        <tr>
            <th scope='row'>$nom</th>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>
                <a href='?p=kriteriaedit&key=$row[0]'><img src='img/053-edit.png' width='20' alt=''></a>&nbsp;|
                <a href='?p=kriteriadelete&key=$row[0]'><img src='img/074-bin.png' width='20' alt=''></a>
            </td>
        </tr>
        ";
        $totb = $totb + $row[2];
        $nom+=1;
    }
    echo "
    </tbody>
    </table>
    <div>
        
        total bobot: $totb
    </div>
    ";
    if ($totb != 1) {
        echo "
        <br>
        <div class='alert alert-danger mx-auto' role='alert'>
            Total dari bobot harus 1. !!
        </div>
                      
    ";
    }
    
}

function tampilalternatif($keyword=1){
    if ($keyword==1) {
        
        $sqlku = "SELECT * FROM alternatif";
    }else {
        $sqlku = "SELECT * FROM alternatif where namaa like '%$keyword%' or ida like '%$keyword%'";
    }
    $quer = mysqli_query(Datab(),$sqlku);
    if ($keyword==1) {
        
        echo "
            <br>
            <div class='col-6'>
                <h2>Alternatif</h2>
            </div>
            <div class='col-6'>
                <form action='' method='post'>
    
                    <button type='submit' name='tambaha' class='btn btn-primary float-right btn-sm' data-toggle='modal'>
                        Tambah Alternatif
                    </button>
                </form>
                
                
            </div>
    
            <hr>           
            ";
    }
        echo "
        <br>
        <table class='table'>
                <thead class='thead-light'>
                     <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Id</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>E-mail</th>
        ";

        $sqs = mysqli_query(Datab(),"select * from kriteria");
        $gu=1;
        while ($ty=mysqli_fetch_array($sqs)) {
            echo "<th scope='col'>c$gu</th>";
            $gu += 1;
        }

        echo "
                        
                        
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
    ";
    $nom = 1;
    while ($row = mysqli_fetch_array($quer)) {
        echo "
        
        <tr>
            <th scope='row'>$nom</th>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            ";
            $ghu=mysqli_query(Datab(),"SELECT * from altnilai where ida='$row[0]'");
            while ($fgy=mysqli_fetch_array($ghu)) {
                $fgs=1;
                $rsff=mysqli_query(Datab(), "SELECT * FROM kriteria order by idk asc");
                while ($rgb = mysqli_fetch_array($rsff)) {
                    
                    echo "<td>$fgy[$fgs]</td>";
                    $fgs += 1;
                }
                
            }
            echo"
            
          
            <td>
            <a href='?p=alternatifedit&key=$row[0]'><img src='img/053-edit.png' width='20' alt=''></a>&nbsp;|
            <a href='?p=alternatifdelete&key=$row[0]'><img src='img/074-bin.png' width='20' alt=''></a>&nbsp&nbsp
            <form action='' method='post'>
                    <input type='hidden' value='$row[0]' name='ida'>
                    <button type='submit' name='tambahab' class='btn-success  btn-sm' data-toggle='modal'>
                        Beri nilai
                    </button>
                </form>
            </td>
        </tr>
        
        
        ";
        $nom+=1;
    }
    echo "
    </tbody>
    </table>
                        
                        
    ";
}

function tampiladdkriteria($nama="",$bobot="",$borc=""){
    if ($_GET["p"] == "kriteriaedit") {$tombol="ubah";}else{$tombol="tambah";}
    if ($borc=="b") {
        $borcd = "selected";
        $co = "id=''";
    }elseif ($borc == "c") {
        $co = "selected";
        $borcd = "id=''";
    }else {
        $co = "id=''";
        $borcd = "id=''";
    }
    echo "
    <form action='' method='post'>
        <div class='form-group'>
            <label >Nama kategori</label>
            <input type='text' value='$nama' name='nama' class='form-control' >
            
        </div>
        <div class='form-group'>
            <label >Bobot kategori</label>
            <input type='text' value='$bobot' name='bobot' class='form-control' >
        </div>
        <div class='form-group'>
            <label >ket benefit or cost</label>
            <select class='form-control' name='borc'>
                <option value='b' $borcd>Benefit</option>
                <option value='c' $co>Cost</option>
            </select>

        </div>          
            <button type='submit' name='addkan' class='btn btn-primary'>$tombol</button>
    </form>
    ";
    
    
    
}



function tampiltambahalteratif($id=null,$nama=null,$email=null,$tgl=null,$alamat=null){
    if ($_GET["p"] == "alternatifedit") {$tombol="ubah"; $disabel="disabled";}else{$tombol="tambah";$disabel="";}
    echo "
    <form action='' method='post'>
        <div class='form-group'>
            <label >ID</label>
            <input type='text' value='$id' name='id' class='form-control' $disabel>
            
        </div>
        <div class='form-group'>
            <label >nama</label>
            <input type='text' value='$nama' name='nama' class='form-control' >
        </div>
        <div class='form-group'>
            <label >e-mail</label>
            <input type='text' value='$email' name='email' class='form-control' >
        </div> 
        <div class='form-group'>
            <label >tanggal lahir</label>
            <input type='date' value='$tgl' name='tgl' class='form-control' >
        </div> 
        <div class='form-group'>
            <label >alamat</label>
            <textarea class='form-control' name='alamat' id='exampleFormControlTextarea1' >$alamat</textarea>
        </div>           
            <button type='submit' name='addkan' class='btn btn-primary'>$tombol</button>
    </form>
    ";
}

function formtambahnilai(){
    $qqui = mysqli_query(Datab(), "SELECT namaa FROM altnilai,alternatif WHERE alternatif.ida=altnilai.ida");
    $asiko = mysqli_query(Datab(), "select * from kriteria");
    $rffs = mysqli_query(Datab(), "SELECT * FROM alternatif WHERE ida = '$_POST[ida]'");
    while ($tras = mysqli_fetch_array($rffs)) {
        $tamp = $tras["namaa"];
    }
    
    while ($rrr = mysqli_fetch_array($qqui)) {
        $rrr["0"];
        
    }
    echo "
    <form action='' method='POST'>
        <div class='form-group'>
            <label for='exampleFormControlSelect1'>pilih kriteria</label>
            <select class='form-control' name='idk'>
                <option value=''>pilih kriteria</option>
            ";
                while ($rea = mysqli_fetch_array($asiko)) {
                echo "<option value='$rea[idk]'>$rea[namak] ($rea[bobotk] ) $_POST[ida]</option>";
                }

             echo "
            </select>
        </div>
        <div class='form-group'>
            <label for='exampleFormControlInput1'>masukan bobot nilai</label>
            <input type='text' class='form-control' name='bobotk' placeholder='Nilai untuk $tamp'>
        </div>
        <div class='form-group'>
        <input type='hidden' value='$_POST[ida]' name='ida'>
        </div>    
        <button type='submit' name='simp' class='btn btn-primary'>Simpan</button>
        
    </form>
    ";
}


function cekkri(){
    $sql = mysqli_query(Datab(), "select * from kriteria");
    $cek = mysqli_num_rows($sql);
    if($cek==0){
        echo "disabled";
    }else{
        echo "";
    }
}

?>
