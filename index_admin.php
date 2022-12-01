<?php
    if (isset($_GET['status'])) {
        print("Pengajuan peminjaman ruangan berhasil!");
    }

    else if (isset($_GET['status2'])) {
        print("Edit ruangan berhasil!");
    }

    else if (isset($_GET['status3'])) {
        print("Penghapusan ruangan berhasil!");
    }

    if (isset($_GET['status4'])) {
        print("Registrasi berhasil!");
    }

    else if (isset($_GET['status5'])) {
        print("Penambahan ruangan baru berhasil!");
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
        <h3>Admin</h3>
        <ul>
            <li><a href="daftarpeminjaman_page.php">Daftar Peminjaman Ruangan Admin</a></li>
            <li><a href="daftarruangan_page.php">Daftar Ruangan Admin</a></li>
            <li><a href="tambahruangan_page.php">Pendaftaran Ruangan Baru</a></li>
        </ul>
    </p>
</body>
</html>