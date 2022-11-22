<?php
    if (isset($_GET['status'])) {
        print($_GET['status']);
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
        <h1>IPB Classroom</h1>
        <h2>Layanan Peminjaman Ruangan IPB University</h2>
    </header>
    <p>
        <h3>User</h3>
        <ul>
        </ul>
    </p>
    <p>
        <h3>Admin</h3>
        <ul>
            <li><a href="buatpeminjaman_page.php">Pembuatan Peminjaman Baru</a></li> 
            <li><a href="daftarruangan_page.php">Daftar Ruangan</a></li>
            <li><a href="tambahruangan_page.php">Pendaftaran Ruangan Baru</a></li>
        </ul>
    </p>
</body>
</html>