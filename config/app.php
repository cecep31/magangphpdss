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
                            <th scope='col'>First</th>
                            <th scope='col'>Last</th>
                            <th scope='col'>Handle</th>
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
    <div class='col-4'>
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
 
    $objk = new Kriteria($_POST["c1"],$_POST["c2"],$_POST["c3"],$_POST["c4"],$k5,$k6,$k7,$k8);
    $tpdata = $objk->getdata;
    $x = 4;
    $ka1 = $objk->getdata()[0];
    $ka2 = $objk->getdata()[1];
    $ka3 = $objk->getdata()[2];
    $ka4 = $objk->getdata()[3];
    $ka5 = $objk->getdata()[4];
    $ka6 = $objk->getdata()[5];
    $ka7 = $objk->getdata()[6];
    $ka8 = $objk->getdata()[7];

    $arrs =array();
    // for ($i=0; $i < $_POST["jml"]; $i++) { 
    //     array_push($arrs,c)
    //     $x = $x+1;
    // }

    $query = "CREATE TABLE MyGuests (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
}

function tampilformbobot(){
    for ($i=0; $i < $_POST["jml"]; $i++) { 
        
    }
    echo "
    <div class='col-4'>
        <h2>Config kriteria</h2> 
        <hr>
        <form method='POST' action=''>

        </form>
    </div>
    ";
}

?>