<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriteria</title>
</head>

<body>


    <div class="container">
        <div class="row">
           
                <?php
                $sql 	= 'SELECT * FROM kriteria';
                $query 	= mysqli_query(Datab(), $sql);
                if (!empty($query)) {
                   
                    while($row = mysqli_fetch_array($query)) 
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
                        echo $row['nama'];
                    }
                     
                }else{
                    if (isset($_POST["simpan1"])) {
                       tampilkriteriaform();
                    }elseif (isset($_POST["simpan2"])) {
                        
                    }
                    else {
                        tampilformjml(); 
                    } 

                }
                ?>
            
        </div>
    </div>

</body>

</html>