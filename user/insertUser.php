<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User</title>
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
                    <a class="nav-link  active" href="showLUser.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pelanggan/showPelanggan.php">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../insertLogin.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="log-container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title text-center">USER</h2>
            </div>
            <div class="card-text">
            <form action="simpanUser.php" method="POST">
                <div class="mb-2">
                    <label for="kode_user" class="form-label">Kode User</label>
                    <input type="number" class="form-control" id="kode_user" name="kode_user">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="no_telepon" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-2">
                    <label for="peran" class="form-label">Peran</label>
                    <input type="text" class="form-control" id="peran" name="peran">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" value="submit"><a id="sub" href="../home.php">Submit</a></button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>