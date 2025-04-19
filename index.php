<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark">
    <main class="container-cust bg-dark text-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pb-3">Data Mahasiswa</h2>
                    <div class="mb-3">
                        <a href="tambah-data.php" class="link-underline link-underline-opacity-0 link-light btn btn-success rounded shadow"><i class="fa fa-add"></i></a>
                    </div>
                    <table class="table table-dark table-striped-columns shadow">
                        <thead>
                            <tr class="text-center">
                                <th scope="row">Nama</th>
                                <th scope="row">NPM</th>
                                <th scope="row">Jurusan</th>
                                <th scope="row">Email</th>
                                <th scope="row">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM mahasiswa";
                            $result = mysqli_query($conn, $query);
                            if (isset($_GET['delete'])) {
                                $deleteId = mysqli_real_escape_string($conn, $_GET['delete']);
                                echo "<script>
                                    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                                        window.location.href = '?confirmDelete=' + $deleteId;
                                    }
                                </script>";
                            }
                            if (isset($_GET['confirmDelete'])) {
                                $delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '" . mysqli_real_escape_string($conn, $_GET['confirmDelete']) . "'");
                                if ($delete) {
                                    echo "<div class='alert alert-success mt-3'>Data berhasil dihapus.</div>";
                                    $result = mysqli_query($conn, $query);
                                } else {
                                    echo "<div class='alert alert-danger mt-3'>Gagal menghapus data.</div>";
                                }
                            }
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr class='text-center'>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['npm'] . "</td>";
                                    echo "<td>" . $row['jurusan'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td><a href='edit-data.php?id=" .$row['id']. "' class='link-primary'><i class='fa fa-edit'></i></a> | <a href='?delete=" .$row['id']. "' class='link-danger'><i class='fa fa-trash-can'></i></a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr class='text-center'>";
                                echo "<td colspan='5'>Tidak ada data mahasiswa.</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>