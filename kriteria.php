<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriteria</title>
</head>

<body>

    <br>
    <div class="container">
        <div class="row">
           
                <?php
                
                // $sql 	= "SELECT * FROM kriteria";
                // $asd = "SELECT count(*) AS NUMBEROFCOLUMNS FROM information_schema.columns WHERE table_name = 'kriteria'";
                // $queriy 	= mysqli_query(Datab(), $sql);
                // // $queriy1 	= mysqli_query(Datab(), $asd);
                // $cek = mysqli_fetch_array($q);
                // if (!empty($cek)) {
                //         echo "
                //         <br>
                //         <h2>kriteria</h2>
                //         <hr>
                        
                //         <table class='table'>
                //         <thead class='thead-light'>
                //             <tr>
                //         ";
                //    while ($dd = mysqli_fetch_array($queriy1)) {
                //        $ff=1;
                //        for ($i=0; $i < $dd["0"]; $i++) { 

                //            echo "
                //                 <th scope='col'>c$ff</th>
                //            ";
                //            $ff=$ff+1;
                //        } 
                //    }
                   
                //     while($row = mysqli_fetch_row($queriy)) 
                //     {
                //         echo "
                        
                //             </tr>
                //         </thead>
                //         <tbody>
                //             <tr>
                //             <th scope='row'>1</th>
                //             <td>Mark</td>
                //             <td>Otto</td>
                //             <td>@mdo</td>
                //             </tr>
                //             <tr>
                //             <th scope='row'>2</th>
                //             <td>Jacob</td>
                //             <td>Thornton</td>
                //             <td>@fat</td>
                //             </tr>
                //             <tr>
                //             <th scope='row'>3</th>
                //             <td>Larry</td>
                //             <td>the Bird</td>
                //             <td>@twitter</td>
                //             </tr>
                //         </tbody>
                //         </table>
                        
                //         ";
                        
                //     }
                     
                // }else{
                //     if (isset($_POST["simpan1"])) {
                //        tampilkriteriaform();
                //     }elseif (isset($_POST["simpan2"])) {
                //         tampilformbobot();
                //     }
                //     else {
                //         tampilformjml(); 
                //     } 

                // }
                if (isset($_POST["addkan"])) {
                    $sql = mysqli_query(Datab(),"insert into kriteria (namak, bobotk, borc) values ('$_POST[nama]','$_POST[bobot]','$_POST[borc]')");
                    $trrs= mysqli_query(Datab(), "select * from kriteria where namak = '$_POST[nama]'");
                    while ($rows = mysqli_fetch_array($trrs)) {
                        $yo = $rows[0];
                    }
                    $sqlok = mysqli_query(Datab(),"ALTER TABLE `altnilai`  ADD `$yo` INT NOT NULL");
                    // $buatfiled=mysqli_query(Datab(), "ALTER TABLE altnilai ADD $yo");
                }

                if (isset($_POST["tambahk"])) {
                   tampiladdkriteria();
                }else {
                    tampilkriteria();
                   
                }

                ?>
            
        </div>
    </div>

</body>

</html>