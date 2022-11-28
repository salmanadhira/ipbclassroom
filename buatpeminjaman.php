<?php
    include('config.php');
    if(isset($_POST['pinjamruangan'])){

	// ambil data dari formulir
    $nama_acara = $_POST['nama_acara'];
    $deskripsi_acara = $_POST['deskripsi_acara'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $kode_ruangan = $_POST['kode_ruangan'];
    $waktu_mulai = $_POST['waktu_mulai'];
        $temp_time = strtotime($waktu_mulai);
        $waktu_mulai = date('Y-m-d H:i:s', $temp_time);
    $waktu_selesai = $_POST['waktu_selesai'];
        $temp_time = strtotime($waktu_selesai);
        $waktu_selesai = date('Y-m-d H:i:s', $temp_time);
    $notelfon_pj = $_POST['notelfon_pj'];

    // cari nama ruangan dari kode ruangan
    //$nama_ruangan_query = pg_query("SELECT ruangan_nama FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    //$nama_ruangan = pg_fetch_array($nama_ruangan_query);

    // cari id user
    //$id_users_query = pg_query("SELECT id FROM users WHERE users_username='salmanadhira'");
    //$id_users = pg_fetch_array($id_users_query);
    //$id_users = (int)$id_users;
    //var_dump($id_users);


	// buat query
   $query = pg_query("INSERT INTO peminjaman (kode_ruangan_peminjaman, nama_acara, waktu_mulai, waktu_selesai, notelfon_pj, disetujui) VALUES ('$kode_ruangan', '$nama_acara', '$waktu_mulai', '$waktu_selesai', $notelfon_pj, 'f')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status=berhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: buatpeminjaman_page.php?');
	}


    } else {
        die("Akses dilarang...");
    }
?>