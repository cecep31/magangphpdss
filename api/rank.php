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
$no=1;
$json=[];
$sql = "SELECT ranknya.ida, alternatif.namaa, ranknya.nilai FROM ranknya,alternatif WHERE alternatif.ida = ranknya.ida ORDER BY nilai DESC limit 10";
$gou=mysqli_query(Datab(),$sql); 
while ($sd= mysqli_fetch_array($gou)) {
    $json[$no] = [
        'id' => $sd["0"],
        'nama' => $sd["1"],
        'nilai' => $sd["2"],
        ];
        $no += 1;
    }
$data = ['ranking' => $json];
echo json_encode($data);
echo "json";