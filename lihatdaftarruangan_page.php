<?php
    include('config.php');
    $ruangan_query = pg_query("SELECT * FROM ruangan WHERE bisa_dipinjam='t' ORDER BY ruangan_fakultas");

    if (isset($_GET['status4'])) {
        print("Penghapusan ruangan gagal!");
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
                    <th>Ketersediaan</th>

                </tr>

            </thead>
            <tbody> 
                
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
                            <?php 
                                $ketersediaan = $ruangan['bisa_dipinjam'];
                                if ($ketersediaan == 't') {
                                    echo "Iya";
                                }
                                elseif ($ketersediaan == 'f') {
                                    echo "Tidak";
                                }
                            
                            ?>
                        </td>
                        
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>

        </table>
    
</body>
</html>