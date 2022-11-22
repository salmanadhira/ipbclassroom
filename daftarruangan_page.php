<?php
    include('config.php');
    $ruangan_query = pg_query("SELECT * FROM ruangan");
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
            <h1>Daftar Ruangan IPB University</h1>
        </header>
        <a href="index.php">Home</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Ruangan</th>
                    <th>Fakultas</th>
                    <th>Nama Ruangan</th>
                    <th>Lokasi Ruangan</th>
                    <th>Kapasitas Ruangan</th>
                    <th>Availability</th>

                </tr>

            </thead>
            <tbody> 
                <tr>
                    <td>A00000BD</td>
                    <td>FAPERTA</td>
                    <td>RK. Gedung Kuliah A</td>
                    <td>Antara NodeB-D-Exst Ftta, Gedung Faperta</td>
                    <td>285</td>
                    <td>t</td>
                </tr>
                <?php 
                    while($ruangan = pg_fetch_array($ruangan_query)) {
                        ?>
                    <tr>
                        <td><?php echo $ruangan['kode_ruangan']?></td>

                        <td><?php echo $ruangan['ruangan_fakultas']?></td>
                        <td><?php echo $ruangan['ruangan_nama']?></td>
                        <td><?php echo $ruangan['ruangan_lokasi']?></td>
                        <td><?php echo $ruangan['ruangan_kapasitas']?></td>
                        <td>
                            <?php echo $ruangan['bisa_dipinjam']?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>

        </table>
    
</body>
</html>