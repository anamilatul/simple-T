<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Toko ABC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto px-2">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/showUser.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="showPelanggan.php">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../insertLogin.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container pt-5 px-5">
            <h3 class="text-primary text-center">Daftar Pelanggan</h3>
            <a href="insertPelanggan.php" class="btn btn-primary">Tambah Data Pelanggan</a>
            <div class="table-responsive">
            <table class="table">
                <thead class="text-primary ">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" >No. Telepon</th>
                        <th scope="col">Kode User</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../koneksi.php');
                    $query = mysqli_query($conn, "SELECT * FROM pelanggan");
                    while($data = mysqli_fetch_array($query)){
                        echo"<tr>";
                            echo"<th scope='row'>".$data['kode_pelanggan']."</th>";
                            echo"<td>".$data['nama']."</td>";
                            echo"<td>".$data['alamat']."</td>";
                            echo"<td>".$data['no_telepon']."</td>";
                            echo"<td>".$data['kode_user']."</td>";
                            echo"<td>"."<a href='deletePelanggan.php?kode_pelanggan=".$data['kode_pelanggan']."'class= 'btn btn-danger'>Hapus</a>"." ";
                            echo"<a href='formUpdatePelanggan.php?kode_pelanggan=".$data['kode_pelanggan']."'class= 'btn btn-success'>Edit</a>"."</td>";
                        echo"</tr>";
                    }
                ?>
                </tbody>
            
            </table>
            </div>
            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



