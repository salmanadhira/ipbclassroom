<?php
    include('config.php');
    $fakultas_query = pg_query("SELECT * FROM fakultas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPB Classroom</title>
</head>
<body>
    <header>
        <h1>Pendaftaran Ruangan Baru</h1>
    </header>

    <a href="index.php">Home</a>

    <form action="tambahruangan.php" method="post">
        <fieldset>
            <p>
                <label for="kode_ruangan">Kode Ruangan :</label>
                <input type="text" name="kode_ruangan" />
            </p>
            <input type="hidden" value="<?= $ruangan['ruangan_fakultas']?>" name="ruangan_fakultas">
            <p>
            <label for="ruangan_fakultas">Fakultas Ruangan :</label>
                <select name="ruangan_fakultas" id="">
                <option value=""></option>
                <?php while($fakultas = pg_fetch_array($fakultas_query)) {
                echo "<option value=".$fakultas['fakultas'].">".$fakultas['fakultas']."</option>";
                }

                ?>
            </select>
            </p>
            <p>
                <label for="ruangan_nama">Nama Ruangan :</label>
                <input type="text" name="ruangan_nama"/>
            </p>
            <p>
                <label for="ruangan_lokasi">Lokasi Ruangan :</label>
                <input type="text" name="ruangan_lokasi"/>
            </p>
            <p>
                <label for="bisa_dipinjam">Apakah ruangan dapat dipinjam?</label><br>
                <input type="radio" name="bisa_dipinjam" value="Iya">Iya</input>
                <input type="radio" name="bisa_dipinjam" value="Tidak">Tidak</input>
            </p>
            <p>
                <label for="ruangan_kapasitas">Kapasitas :</label>
                <input type="number" name="ruangan_kapasitas"/>
            </p>
        </fieldset>
        <br>
        <input type="submit" value="Tambah Ruangan" name="tambahruangan" />
    </form>
</body>
</html>

