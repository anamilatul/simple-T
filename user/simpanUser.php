<?php
    include('../koneksi.php');

    $kode_user = $_POST['kode_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];

    $query = "INSERT INTO user (kode_user,nama,email,no_telepon,password,peran) values ('$kode_user','$nama','$email','$no_telepon','$password','$peran')";
    mysqli_query($conn,$query);

?>

