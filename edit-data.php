<?php include 'koneksi.php' ?>
<?php
    $query = "SELECT * FROM mahasiswa WHERE id = '" .$_GET['id']. "'";
    $fetch = mysqli_query($conn, $query);
    if (mysqli_num_rows($fetch) == 0) {
        echo "<script>alert('Data tidak ditemukan'); window.location.href = 'index.php';</script>";
    }
    $data = mysqli_fetch_object($fetch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit - Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark">
    <main class="bg-dark text-light">
        <div class="container py-5">
            <div>
                <div class="row justify-content-center">
                    <h2 class="pb-3">Edit Data Mahasiswa</h2>
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
                                $update = mysqli_query($conn, "UPDATE mahasiswa SET nama='" .$nama. "', npm='" .$npm. "', jurusan='".$jurusan."', email='".$email."' WHERE id='" .$_GET['id']. "'");
                                if ($update) {
                                    echo "<script>alert('Data berhasil diperbarui'); window.location.href = 'edit-data.php?id=" . $_GET['id'] . "';</script>";
                                } else {
                                    echo "<div class='alert alert-danger mt-3'>Gagal memperbarui data.</div>";
                                }
                            } else {
                                echo "<div class='alert alert-warning mt-3'>Semua field harus diisi.</div>";
                            }
                        }
                        
                    ?>
                    <div class="col-lg-6">
                        <form style="background-color: #32383e;" class="p-3 text-light rounded" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" value="<?= $data->nama ?>" class="form-control bg-dark border-dark text-light" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" value="<?= $data->npm ?>" class="form-control bg-dark border-dark text-light" id="npm" name="npm" required>
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" value="<?= $data->jurusan ?>" class="form-control bg-dark border-dark text-light" id="jurusan" name="jurusan" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="<?= $data->email ?>" class="form-control bg-dark border-dark text-light" id="email" name="email" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>