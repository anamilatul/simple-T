<?php
    include('../koneksi.php');

    $kode_user = $_POST['kode_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];

    $query = "UPDATE user SET kode_user='$kode_user', nama='$nama', email='$email', no_telepon='$no_telepon', password='$password', peran='$peran' WHERE kode_user=$kode_user";
    mysqli_query($conn,$query);
?>

