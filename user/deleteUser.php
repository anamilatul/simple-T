<?php
    include('../koneksi.php');
    $kode_user =  $_GET['kode_user'];

    $query = "DELETE FROM user WHERE kode_user=$kode_user";
    mysqli_query($conn,$query);

?>
