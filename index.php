<?php
session_start();
if (isset($_SESSION['nisn'])) {
    // echo "Anda Tidak Boleh Back";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> PENGUMUMAN KELULUSAN - SMKN 40 JAKARTA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand w-100" href="index.php"><span class="fw-bolder text-primary">SMKN 40 JAKARTA</span></a>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="d-flex">
                <img src="assets/logo.png" width="150" class="mx-auto mb-4">
            </div>
            <div class="container px-5 pb-5">
                <!-- Header text content-->
                <div class="text-center text-md-center">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">SMKN 40 GO INTERNASIONAL</div>
                    </div>
                    <div class="fs-1 fw-light text-muted">PENGUMUMAN KELULUSAN</div>
                    <h1 class="display-6 fw-bolder mb-5"><span class="text-gradient d-inline">SMKN 40 JAKARTA TAHUN PELAJARAN 2022/2023</span></h1>
                    <!-- <h1 class="fw-bold">JUM'AT , 05 MEI 2023</h1>
                    <h1 class="text-gradient d-inline fw-bold">PUKUL 13:00 WIB</h1> -->
                </div>
            </div>
        </header>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; SMKN 40 Jakarta 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>