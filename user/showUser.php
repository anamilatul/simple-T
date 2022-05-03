<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
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
                    <a class="nav-link active" href="showUser.php">User</a>
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
    <section >
        <div class="container pt-5 px-5">
            <h3 class="text-primary text-center">Daftar User</h3>
            <a href="insertUser.php" class="btn btn-primary">Tambah Data User</a>
            <div class="table-responsive">
            <table class="table">
                <thead class="text-primary ">
                    <tr>
                        <th scope="col">Kode User</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col" >No. Telepon</th>
                        <th scope="col">Password</th>
                        <th scope="col">Peran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../koneksi.php');
                    $query = mysqli_query($conn, "SELECT * FROM user");
                    while($data = mysqli_fetch_array($query)){
                        echo"<tr>";
                            echo"<th scope='row'>".$data['kode_user']."</th>";
                            echo"<td>".$data['nama']."</td>";
                            echo"<td>".$data['email']."</td>";
                            echo"<td>".$data['no_telepon']."</td>";
                            echo"<td>".$data['password']."</td>";
                            echo"<td>".$data['peran']."</td>";
                            echo"<td>"."<a href='deleteUser.php?kode_user=".$data['kode_user']."'class= 'btn btn-danger'>Hapus</a>";
                            echo" ";
                            echo"<a href='formUpdateUser.php?kode_user=".$data['kode_user']."'class= 'btn btn-success'>Edit</a>"."</td>";
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



