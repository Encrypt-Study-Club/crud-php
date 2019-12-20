
<?php 
        include_once("config.php");
        if(isset($_POST['submit'])){
            $stb = $_POST['stambuk'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];

            // edit
            $result = mysqli_query($mysqli, "update biodata set nama = '$nama', email = '$email', alamat = '$alamat' where stambuk = $stb");

            // info
            echo "<script>
                swal('Mantap dijiwa!', 'Email berhasil dikirim!', 'success')
                </script>";
            echo "data berhasil di edit";
            header("Location: biodata.php");
        }
    ?>

    <?php 
        $stb = $_GET['stambuk'];
        $result = mysqli_query($mysqli, "select * from biodata where stambuk = '$stb'");
        while($data = mysqli_fetch_array($result)){
            // $stambuk = $data['stambuk'];
            $nama = $data['nama'];
            $email = $data['email'];
            $alamat = $data['alamat'];
        }
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
                    <li class="breadcrumb-item active" aria-current="page">Biodata</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <h5 class="card-header">Edit Data</h5>
            <div class="card-body">
                <form action="edit.php" method="post" name="update">
                    <div class="form-group">
                        <label for="stambuk">Stambuk</label>
                        <input type="text" value=<?= $stb; ?> placeholder="stambuk" class="form-control" required="true" name="stambuk">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" value=<?= $nama; ?> placeholder="nama lengkap" class="form-control" required="true" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" value=<?= $email; ?> placeholder="email" class="form-control" required="true" name="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" value=<?= $alamat; ?> placeholder="alamat" class="form-control" required="true" name="alamat">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="add">Edit</button>
                </form>
            </div>
        </div>
    </div>

  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>