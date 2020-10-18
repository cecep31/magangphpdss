<div class="container">
  <?php

// $golo = mysqli_query(Datab(), "select * from altnilai order by ida asc");
// $ni=0;
// $cars = array();
// $ria= mysqli_query(Datab(),"desc altnilai");
// while ($ty=mysqli_fetch_array($ria)) {
//     // echo $ty["0"];
//      echo "<br>";
// } 
// $nok2=2;
// $nokkat=1; 
$kriteria=mysqli_query(Datab(),"select * from kriteria order by idk asc"); 
    while ($tar=mysqli_fetch_array($kriteria)){
        if ($tar["3"]=="b") { 
            $go=mysqli_query(Datab(),"select ida,c$tar[0] from altnilai order by ida asc"); 
            $lai = mysqli_query(Datab(), "SELECT max(c$tar[0]) AS max FROM altnilai"); 
            while ($rg=mysqli_fetch_array($lai)) {
                $max=$rg["0"]; 
            } 
            while ($rt=mysqli_fetch_array($go)) { 
                echo $rt[1]; 
                echo"<br />"; 
                echo $max; 
                echo "<br />"; 
                $normal = $rt[1]/$max; 
                echo $normal;
                $rsf=mysqli_query(Datab(),"update altnormal set c$tar[0]=$normal where ida='$rt[ida]'"); 
                    echo "<hr />"; 
            } 
            echo "bangsat"; 
            echo "<br />"; 
        }else {
            $go1=mysqli_query(Datab(),"select ida,c$tar[0] from altnilai order by ida asc"); 
            $lai1 = mysqli_query(Datab(), "SELECT min(c$tar[0]) AS min FROM altnilai"); 
            while ($rg1=mysqli_fetch_array($lai1)) {
                $min=$rg1["0"]; 
            } 
            while($rt1=mysqli_fetch_array($go1)) { 
                echo $rt1[1]; 
                echo "<br />"; 
                echo $min; 
                echo "<br />"; 
                $normal1 = $min/$rt1[1]; 
                echo $normal1;
                $rsfa=mysqli_query(Datab(),"update altnormal set c$tar[0]=$normal1 where ida='$rt1[ida]'"); 
                echo " <hr />"; 
            } 
            echo "<br />"; 
            echo "con"; 
            echo "<br />"; 
        } 
            echo"=====================================================================================================>";
            echo "<br />"; 
    } 
    //  while ($yu=mysqli_fetch_array($go)) { 
        //$lai = mysqli_query(Datab(), "SELECT max($yu[1]) AS max FROM altnilai"); 
        //$sqlki=mysqli_query(Datab(),"select '$yu[1]' from kriteria where idk "); 
        // }
    $sqlz=mysqli_query(Datab(),"select * from altnormal order by ida asc"); 
        while($an=mysqli_fetch_array($sqlz)) { 
            $v=0; $kns=mysqli_query(Datab(),"select idk,bobotk from kriteria order by idk asc"); 
            while($sa=mysqli_fetch_array($kns)) { 
                $ryus=mysqli_query(Datab(),"select c$sa[0] from altnormal where ida='$an[0]'"); 
                while ($gh=mysqli_fetch_array($ryus)) {
                    $nnya=$gh[0]; 
                } 
                $v += $nnya*$sa["bobotk"]; 
                    echo $nnya; echo "<br />"; 
                    echo $sa["bobotk"];
                    echo "<br />"; 
                    echo "----->",$v; 
                    echo "<br />"; 
            } 
            echo $v; 
            echo "<br />"; 
            echo"-------------------------------------------------------------------"; 
            echo "<br />"; 
            mysqli_query(Datab(),"update ranknya set nilai=$v where ida='$an[ida]'");             
        } 
            echo "hasil"; 
            echo "<div class='table-responsive'>";
            echo "<table class='table table-borderless table-dark'>
                                 <thead>
                                    <tr>
                                        <th scope='col'>RANK</th>
                                        <th scope='col'>ID</th>
                                        <th scope='col'>Nama</th>
                                        <th scope='col'>nilai</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
            $nooh=1;
            $gou=mysqli_query(Datab(),"SELECT alternatif.ida,namaa,nilai FROM `ranknya`,alternatif WHERE ranknya.ida=alternatif.ida ORDER BY nilai DESC limit 10"); 
                while($trf=mysqli_fetch_array($gou)) {
                    echo "
                            <tr>
                                <th scope='row'>$nooh</th>
                                <td>$trf[0]</td>
                                <td>$trf[1]</td>
                                <td>$trf[2]</td>
                            </tr>
                                            
                        ";
                        $nooh += 1;
                } 
                echo"
                    </tbody>
                </table>
                </div>
                ";
?>
