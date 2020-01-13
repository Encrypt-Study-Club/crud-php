<?php 
    include_once("config.php");
    $info="home";
    $result = mysqli_query($mysqli, "select * from biodata");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Crud PHP Native</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
              <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link active" href="biodata.php">Biodata</a>
              <a class="nav-item nav-link" href="#">About</a>
              </div>
          </div>
        </div>
    </nav>
    <!-- biodata -->
    
    <div class="container mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <h5 class="card-header">Tambah Data</h5>
            <div class="card-body">
                <form action="tambah.php" method="post" name="form1">
                    <div class="form-group">
                        <label for="stambuk">Stambuk</label>
                        <input type="text" placeholder="stambuk" class="form-control" required="true" name="stambuk">
                    </div>
                    <div class="form-group">
                        <label for="stambuk">Nama Lengkap</label>
                        <input type="text" placeholder="nama lengkap" class="form-control" required="true" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="stambuk">Email address</label>
                        <input type="email" placeholder="email" class="form-control" required="true" name="email">
                    </div>
                    <div class="form-group">
                        <label for="stambuk">Alamat</label>
                        <input type="text" placeholder="alamat" class="form-control" required="true" name="alamat">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="add">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST['submit'])){
            $stambuk = $_POST['stambuk'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            // koneksi
            include_once("config.php");

            // koneksi
            $result = mysqli_query($mysqli, "insert into biodata values ('$stambuk','$nama','$email','$alamat')");

            // info
            header("Location: biodata.php");
        }
    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>