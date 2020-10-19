<?php
include "./config/app.php";
$conn = new mysqli("localhost","pilput","pilput31", "magangdss");
$gou=mysqli_query($conn,"SELECT alternatif.ida,namaa,nilai FROM `ranknya`,alternatif WHERE ranknya.ida=alternatif.ida ORDER BY nilai DESC limit 10"); 
                
echo json_encode($gou);
echo "json";