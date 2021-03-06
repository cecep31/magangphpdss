<?php
include 'config/app.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magang DSS</title>
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  
</head>

<body>

 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

      <a class="navbar-brand" href="/"><img src="img/logoinfo.png" width="35" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($_GET["p"] == "") {echo 'active';} ?>">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if ($_GET["p"] == "kriteria" || $_GET["p"] == "kriteriaedit"||$_GET["p"] == "kriteriadelete") {echo 'active';} ?>">
            <a class="nav-link" href="?p=kriteria">Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($_GET["p"] == "alternatif") {echo 'active';} cekkri();?>" href="?p=alternatif">Alternatif</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Output
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?p=ranking">Ranking</a>
              <a class="dropdown-item" href="api/rank.php">Get Data</a>
            </div>
          </li>
        
        </ul>
        <form action="" method="POST" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
          <button class="btn my-2 my-sm-0" name="cari" type="submit"><img src="img/se.png" width="20" alt=""></button>
        </form>
      </div>
    </div>
  </nav>

  <?php
$obj = new Kriteria("nama",30,40,34,3,3,2);

$c1 = $obj->getdata()[0];
$c2 = $obj->getdata()[1];
$c3 = $obj->getdata()[2];
$c4 = $obj->getdata()[3];
$c5 = $obj->getdata()[4];
$c6 = $obj->getdata()[5];
$c7 = $obj->getdata()[6];
$c8 = $obj->getdata()[7];



  Datab();
  if (isset($_POST["cari"])) {
    echo "<div class='container'>";
    tampilalternatif($_POST["keyword"]);
    echo "</div>";
  }
  elseif (isset($_GET['p'])) {
    $page = $_GET['p'];

    switch ($page) {
      case 'kriteria':
        include "kriteria.php";
        break;
      case 'cedit':
        include "kriteriaedit.php";
        break;
      case 'alternatif':
        include "alternatif.php";
        break;
      case 'kriteriaedit':
        include "kriteriaedit.php";
        break;
      case 'alternatifedit':
        include "alternatifedit.php";
        break;
      case 'kriteriadelete':
        include "kriteriadelete.php";
        break;
      case 'alternatifdelete':
        include "alternatifdelete.php";
        break;
      case 'ranking':
        include "ranking.php";
        break;
      case 'home':
        include "home.php";
        break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  } else {
    include "home.php";
  }
 

  ?>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="container">
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <br>
  <p></p>
  <div>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</div>

</body>

</html>