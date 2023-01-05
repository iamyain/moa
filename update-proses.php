<?php
include('koneksi.php');
extract($_POST);
$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id ='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>