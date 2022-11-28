<?php
    include('config.php');
    $peminjaman_query = pg_query("SELECT * FROM peminjaman ORDER BY id");

    //if (isset($_GET['status4'])) {
        //print("Penghapusan ruangan gagal!");
    //}

    if (isset($_GET['statusupdate'])) {
        print("Update status peminjaman berhasil!");
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
            <h1>Daftar Peminjaman Ruangan IPB University</h1>
        </header>
        <a href="index.php">Home</a>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Kode Ruangan</th>
                    <th>Acara</th>
                    <th>Penanggung Jawab</th>
                    <th>Waktu Mulai</th>
                    <th>Waktu Selesai</th>
                    <th>Update</th>
                    <th>Aksi</th>

                </tr>

            </thead>
            <tbody> 

                <?php 
                    while($peminjaman = pg_fetch_array($peminjaman_query)) {
                        ?>
                    <tr>
                        <td><?php echo $peminjaman['id']?></td>

                        <td><?php echo $peminjaman['kode_ruangan_peminjaman']?></td>
                        <td><?php echo $peminjaman['nama_acara']?></td>
                        <td><?php echo $peminjaman['notelfon_pj']?></td>
                        <td><?php echo $peminjaman['waktu_mulai']?></td>
                        <td><?php echo $peminjaman['waktu_selesai']?></td>
                        <td>
                            <?php 
                                $update = $peminjaman['disetujui'];
                                if ($update == 't') {
                                    echo "Iya";
                                }
                                elseif ($update == 'f') {
                                    echo "Tidak";
                                }
                            
                            ?>
                        </td>
                        <td> 
                            <form action= "updatestatuspeminjaman_page.php" method="post">
                                <input type="hidden" name="id" value="<?= $peminjaman['id']?>">
                                <input type="submit" name="updateStatusPeminjaman" value="Update">

                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>

        </table>
    
</body>
</html>