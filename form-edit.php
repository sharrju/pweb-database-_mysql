<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>

    <form id="contact" action="proses-pendaftaran.php" method="POST">
        <h3>Formulir Edit Siswa</h3>
        <fieldset>
            <label for="nama">Nama: </label>
            <input placeholder="Masukkan Nama Anda" type="text" tabindex="1" name="nama" value="<?php echo $siswa['nama'] ?>" required autofocus>
        </fieldset>
        <fieldset>
            <label for="nama">Alamat: </label>
            <input placeholder="Masukkan Alamat Anda" type="text" name="alamat" value=<?php echo $siswa['alamat'] ?> required autofocus>
        </fieldset>
        <fieldset>
            <label for="jenis_kelamin">Jenis Kelamin: </label></br>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </fieldset>
        <fieldset>
            <label for="agama">Agama: </label> </br>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option>Islam</option>
                <option>Katolik</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </fieldset>
        <fieldset>
            <label for="sekolah_asal">Sekolah Asal: </label></br>
            <input placeholder="Masukkan Sekolah Asal Anda" name="sekolah_asal" type="text" required value="<?php echo $siswa['sekolah_asal'] ?>">
        </fieldset>
        <fieldset>
            <button name="daftar" type="submit" id="contact-submit" value="Daftar" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>

</body>

</html>