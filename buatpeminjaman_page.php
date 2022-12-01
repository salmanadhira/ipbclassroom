<?php 
    include('config.php');
    $ruangan_query = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");
    $ruangan_query1 = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");
    $ruangan_query2 = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");



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
        <h1>Pengajuan Peminjaman Ruangan</h1>
    <header>
    <a href="index_user.php">Home</a>
    <form action="buatpeminjaman.php" method="post">
        <fieldset>
            <!-- Masukan Nama Acara-->
            <p>
                <label for="nama_acara">Nama Acara  :</label>
                <input type="text" name="nama_acara" placeholder="Nama acara"   />
            </p>

            <!-- Pilih Fakultas Ruangan -->
            <p>
            <label for="ruangan_fakultas">Fakultas Ruangan  :</label>
            <select name="ruangan_fakultas" id="">
                <option value=""></option>
                <?php while($ruangan_fakultas = pg_fetch_array($ruangan_query1)) {
                echo "<option value=".$ruangan_fakultas['ruangan_fakultas'].">".$ruangan_fakultas['ruangan_fakultas']."</option>";
            }

            ?>
            </select>
        </p>
            <!-- Pilih Ruangannya 
            <p>
            <label for="ruangan_nama">Ruangan  :</label>
            <select name="ruangan_nama" id="">
                <option value=""></option>
                <?php while($ruangan_nama = pg_fetch_array($ruangan_query)) {
                echo "<option value=".$ruangan_nama['ruangan_nama'].">".$ruangan_nama['ruangan_nama']."</option>";
            }

            ?> -->
            <!-- </select> -->
        </p>

        </p>
            <!-- Pilih Kode Ruangannya -->
            <p>
            <label for="kode_ruangan">Kode Ruangan  :</label>
            <select name="kode_ruangan" id="">
                <option value=""></option>
                <?php while($kode_ruangan = pg_fetch_array($ruangan_query2)) {
                echo "<option value=".$kode_ruangan['kode_ruangan'].">".$kode_ruangan['kode_ruangan']."</option>";
            }

            ?>
            </select>
        </p>
 
        </p>
            <!-- Pilih Jam Mulainya -->
            <p>
            <label for="waktu_mulai">Peminjaman dari  :</label>
            <input type="datetime-local" name="waktu_mulai" />
            <label for="waktu_selesai">sampai  :</label>
            <input type="datetime-local" name="waktu_selesai" />
        </p>

        <!-- Masukan nomer telfon penanggungjawab -->
        <p>
            <label for="notelfon_pj">Nomer telfon penanggungjawab  :</label>
            <input type="text" name="notelfon_pj" placeholder="08_____" />
        
        </p>


    </fieldset>
    <br>
    <input type="submit" name="pinjamruangan" />
    </form>
</body>
</html>
