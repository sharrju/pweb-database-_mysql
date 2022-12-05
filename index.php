<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">

            </a>
        </div>
    </nav>
    <header>
        <div class="title-utama">
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Coding</h1>
        </div>
    </header>

    <div class="option-menu">
        <a class="badge bg-primary text-wrap" href="form-daftar.php">Daftar Baru</a>
        <a class="badge bg-primary text-wrap" href="list-siswa.php">Pendaftar</a>
    </div>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>