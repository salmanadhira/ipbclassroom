<?php
    include('config.php');
    $kode_ruangan = $_POST['kode_ruangan'];
    $kode_ruangan_query = pg_query("SELECT * FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    $ruangan = pg_fetch_array($kode_ruangan_query);

    $ruangan_query1 = pg_query("SELECT * FROM ruangan");
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
        <h1>Edit Data Ruangan</h1>
    </header>

    <a href="index.php">Homepage</a>

    <form action="editruangan.php" method="post">
        <fieldset>
            <!-- Edit Kode Ruangan -->
            <input type="hidden" value="<?= $ruangan['kode_ruangan']?>" name="kode_ruangan">
            <p>
                <label for="kode_ruangan">Kode Ruangan :</label>
                <input type="text" name="kode_ruangan" value="<?= $ruangan['kode_ruangan']?>"/>
            </p>

            <!-- Edit Fakultas Ruangan-->
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


            <!-- Edit Nama Ruangan -->
            <input type="hidden" value="<?= $ruangan['ruangan_nama']?>" name="ruangan_nama">
            <p>
                <label for="ruangan_nama">Nama Ruangan :</label>
                <input type="text" name="ruangan_nama" value="<?= $ruangan['ruangan_nama']?>"/>
            </p>

            <!-- Edit Lokasi Ruangan -->
            <input type="hidden" value="<?= $ruangan['ruangan_lokasi']?>" name="ruangan_lokasi">
            <p>
                <label for="ruangan_lokasi">Lokasi Ruangan :</label>
                <input type="text" name="ruangan_lokasi" value="<?= $ruangan['ruangan_lokasi']?>"/>
            </p>

             <!-- Edit Kapasitas Ruangan -->
            <p>
                <label for="ruangan_kapasitas">Kapasitas :</label>
                <input type="number" name="ruangan_kapasitas" value="<?= $ruangan['ruangan_kapasitas']?>"/>
            </p>

            <p>
                <label for="bisa_dipinjam">Apakah ruangan dapat dipinjam?</label><br>
                <?php
                    if ($ruangan['bisa_dipinjam']=='t') {
                    ?>
                        <input type="radio" name="bisa_dipinjam" value="Iya" checked>Iya</input>
                        <input type="radio" name="bisa_dipinjam" value="Tidak">Tidak</input>
                    <?php
                    } elseif ($ruangan['bisa_dipinjam']=='f'){
                    ?>
                        <input type="radio" name="bisa_dipinjam" value="Iya" >Iya</input>
                        <input type="radio" name="bisa_dipinjam" value="Tidak" checked>Tidak</input>
                    <?php
                    }
                ?>
            </p>
            
        </fieldset>
        <br>
        <input type="submit" value="Edit Ruangan" name="editruangan" />
    </form>
</body>
</html>