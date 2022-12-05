<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/styledaftar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <table class="container">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['id'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>