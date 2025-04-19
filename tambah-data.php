<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah - Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark">
    <main class="bg-dark text-light">
        <div class="container py-5">
            <div>
                <div class="row justify-content-center">
                    <h2 class="pb-3">Tambah Data Mahasiswa</h2>
                    <div class="mb-3">
                        <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <?php
                    if(isset($_POST['submit'])) {
                        $nama = $_POST['nama'];
                        $npm = $_POST['npm'];
                        $jurusan = $_POST['jurusan'];
                        $email = $_POST['email'];
                        
                        // Validate input
                        if (!empty($nama) && !empty($npm) && !empty($jurusan) && !empty($email)) {
                            $tambah = mysqli_query($conn, "INSERT INTO mahasiswa (nama, npm, jurusan, email) VALUES ('".$nama."', '".$npm."', '".$jurusan."', '".$email."')");
                            if ($tambah) {
                                echo "<div class='alert alert-success'>Data berhasil ditambahkan.</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Terjadi kesalahan: " . mysqli_error($conn) . "</div>";
                            }
                        } else {
                            echo "<div class='alert alert-warning mt-3'>Semua field harus diisi.</div>";
                        }
                    }
                ?>
                    <div class="col-lg-6">
                        <form style="background-color: #32383e;" class="p-3 text-light rounded" method="POST" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control bg-dark border-dark text-light" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" class="form-control bg-dark border-dark text-light" id="npm" name="npm" required>
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control bg-dark border-dark text-light" id="jurusan" name="jurusan" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control bg-dark border-dark text-light" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>