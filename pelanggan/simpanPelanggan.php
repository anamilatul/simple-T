<?php
    include('../koneksi.php');

    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $kode_user = $_POST['kode_user'];

    $query = "INSERT INTO pelanggan (nama,no_telepon,alamat,kode_user) values ('$nama','$no_telepon','$alamat','$kode_user')";
    mysqli_query($conn,$query);

?>

