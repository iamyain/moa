<?php
include("koneksi.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tambah</title>
  </head>
  <body>
    <div class="container">
    <h1>Update Data</h1>
    <form action="update-proses.php" method="post" enctype="multipart/form-data">
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM mahasiswa WHERE id=$id";
        $result = mysqli_query(mysql: $conn, query: $sql);
        while($data =  mysqli_fetch_array($result)){
        ?>
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="nim">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan nim" value="<?php echo $data['nim'] ?>">
        </div>
        <div class="form-group">
            <label for="almat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" value="<?php echo $data['alamat'] ?>">
        </div>
        <?php
        }
        ?>
        <button type="submit" class="btn btn-success">Update data</button>
    </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>