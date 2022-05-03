<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data User</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include('../koneksi.php');
        $kode_user = $_GET['kode_user'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE kode_user = $kode_user");
        $data = mysqli_fetch_array($query);
    ?>
    <div class="log-container pt-4">
        <div class="card login-form">
            <div class="card-body">
                <h4 class="card-title text-center">Edit Data User</h4>
            </div>
            <div class="card-text">
            <form action="updateUser.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Kode User</label>
                    <input type="number" class="form-control" id="kode_user" name="kode_user" value="<?php echo $data['kode_user'];?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $data['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $data['no_telepon']; ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>">
                </div>
                <div class="mb-3">
                    <label for="peran" class="form-label">Peran</label>
                    <input type="text" class="form-control" id="peran" name="peran" value="<?php echo $data['peran']; ?>">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" value="submit"><a id="sub" href="showUser.php">Submit</a></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>

