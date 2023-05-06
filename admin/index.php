<?php
session_destroy();
session_start();

if (empty($_SESSION['admin'])) {
    header("location:/admin/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SMKN 4 BOJONEGORO</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container">
        <div class="card shadow rounded py-4 mt-5">
            <div class="card-body">
                <form action="tambahSiswa.php" class="d-flex gap-3" method="post">
                    <div class="form-group">
                        <label for="">NISN</label>
                        <input type="number" name="nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" class="form-control" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Rekayasa Perangkat Lunak 1">Rekayasa Perangkat Lunak 1</option>
                            <option value="Rekayasa Perangkat Lunak 2">Rekayasa Perangkat Lunak 2</option>
                            <option value="Rekayasa Perangkat Lunak 3">Rekayasa Perangkat Lunak 3</option>

                            <option value="Teknik Pengelasan 1">Teknik Pengelasan 1</option>
                            <option value="Teknik Pengelasan 2">Teknik Pengelasan 2</option>

                            <option value="Agrobisnis Ternak Ruminansia 1">Agrobisnis Ternak Ruminansia 1</option>
                            <option value="Agrobisnis Ternak Ruminansia 2">Agrobisnis Ternak Ruminansia 2</option>

                            <option value="Tata boga 1">Tata boga 1</option>
                            <option value="Tata boga 2">Tata boga 2</option>

                            <option value="Perhotelan 1">Perhotelan 1</option>
                            <option value="Perhotelan 2">Perhotelan 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Status Lulus</label>
                        <select name="status_lulus" class="form-control">
                            <option value="Lulus">Lulus</option>
                            <option value="Tidak Lulus">Tidak Lulus</option>
                        </select>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" class="btn btn-primary mt-auto">Simpan</button>
                    </div>
                </form>
                <hr>
                <table class="table table-striped mt-5" id="siswa">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NISN</td>
                            <td>Nama</td>
                            <td>Jurusan</td>
                            <td>Status Lulus</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        include '../inc/config.php'; //untuk memanggil Config
                        $sql = mysqli_query($conn, "select * from data_kelulusan "); // memanggil table user di database sekolah dengan menampilkan nama dan password
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jurusan'] ?></td>
                                <td><?= $row['status_lulus'] ? "<b class='text-success'>Lulus</b>" : "<b class='text-danger'>Tidak Lulus</b>" ?></td>
                                <td>
                                    <a class="btn btn-danger" href="hapusData.php?id=<?= $row['id'] ?>">Hapus Data</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#siswa').DataTable();
        });
    </script>
</body>

</html>