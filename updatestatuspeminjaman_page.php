<?php
    include('config.php');
    $id = $_POST['id'];
    $id_peminjaman_query = pg_query("SELECT * FROM peminjaman WHERE id = $id");
    $peminjaman = pg_fetch_array($id_peminjaman_query);

    if (isset($_GET['statusupdate2'])) {
        print("Update status peminjaman gagal!");
    }
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
        <h1>Update Status Peminjaman Ruangan</h1>
    </header>

    <a href="index.php">Home</a>

    <form action="updatestatuspeminjaman.php" method="post">
        <fieldset>
            <!-- Edit ID Peminjaman -->
            <input type="hidden" value="<?= $peminjaman['id']?>" name="id">

            <!-- Edit Status Peminjaman -->
            <p>
                <label for="disetujui">Apakah peminjaman disetujui?</label><br>
                <?php
                    if ($peminjaman['disetujui']=='t') {
                    ?>
                        <input type="radio" name="disetujui" value="Iya" checked>Iya</input>
                        <input type="radio" name="disetujui" value="Tidak">Tidak</input>
                    <?php
                    } elseif ($peminjaman['disetujui']=='f'){
                    ?>
                        <input type="radio" name="disetujui" value="Iya" >Iya</input>
                        <input type="radio" name="disetujui" value="Tidak" checked>Tidak</input>
                    <?php
                    }
                ?>
            </p>
            
        </fieldset>
        <br>
        <input type="submit" value="Update" name="updateStatusPeminjaman" />
    </form>
</body>
</html>