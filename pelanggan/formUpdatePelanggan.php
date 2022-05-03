<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pelanggan</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include('../koneksi.php');
        $kode_pelanggan = $_GET['kode_pelanggan'];
        $query = mysqli_query($conn, "SELECT * FROM pelanggan WHERE kode_pelanggan = $kode_pelanggan");
        $data = mysqli_fetch_array($query);
    ?>

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
    <div class="log-container ">
        <div class="card pelanggan-form ">
            <div class="card- pt-3 pb-3">
                <h4 class="card-title text-center">Edit Data Pelanggan</h4>
            </div>
            <div class="card-text">
            <form action="updatePelanggan.php" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="kode_pelanggan" value="<?php echo $data['kode_pelanggan'];?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $data['no_telepon']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" rows="2" value="<?php echo $data['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label for="kode_user" class="form-label">Kode User</label>
                    <input type="text" class="form-control" id="kode_user" name="kode_user" value="<?php echo $data['kode_user'];?>">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" value="submit"><a id="sub" href="showPelanggan.php">Submit</a></button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

