<?php
    include('config.php');
    if(isset($_POST['pinjamruangan'])){

	// ambil data dari formulir
    $nama_acara = $_POST['nama_acara'];
    $deskripsi_acara = $_POST['deskripsi_acara'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $kode_ruangan = $_POST['kode_ruangan'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $notelfon_pj = $_POST['notelfon_pj'];

    $nama_ruangan_query = pg_query("SELECT ruangan_nama FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    $nama_ruangan = pg_fetch_array($nama_ruangan_query);

    //$id_ruangan_query = pg_query("SELECT id FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    //$id_ruangan = pg_fetch_array($id_ruangan_query);

    var_dump($nama_ruangan);
    var_dump($kode_ruangan);
    //$id_ruangan = (int)$id_ruangan;
    //var_dump($id_ruangan);

    

	// buat query
   // $query = pg_query("INSERT INTO peminjaman (nama_acara, deskripsi_acara, notelfon_pj, waktu_mulai, waktu_selesai) VALUES ($nama_acara, $deskripsi_acara, $notelfon_pj, '$waktu_mulai', '$waktu_selesai')");

	// apakah query simpan berhasil?
	//if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		//header('Location: index.php?status=berhasil');
	//} else {
		// kalau gagal kembalikan ke halaman form
		//header('Location: buatpeminjaman_page.php');
	//}


    } else {
        die("Akses dilarang...");
    }
?>