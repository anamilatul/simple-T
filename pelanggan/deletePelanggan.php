<?php
    include('../koneksi.php');
    $kode_pelanggan =  $_GET['kode_pelanggan'];

    $query = "DELETE FROM pelanggan WHERE kode_pelanggan=$kode_pelanggan";
    mysqli_query($conn,$query);

?>

