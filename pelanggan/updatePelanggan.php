<?php
    include('../koneksi.php');

    $kode_pelanggan = $_POST['kode_pelanggan'];
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $kode_user = $_POST['kode_user'];

    $query = "UPDATE pelanggan SET nama='$nama', no_telepon='$no_telepon', alamat='$alamat' WHERE kode_pelanggan=$kode_pelanggan";
    mysqli_query($conn,$query);
?>

