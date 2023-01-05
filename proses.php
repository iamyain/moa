<?php
include("koneksi.php");
    extract($_POST);
    $sql = "INSERT INTO mahasiswa (nama, nim, alamat)
    VALUES ('$nama', '$nim', '$alamat')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>