<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['tambahruangan'])){

	// ambil data dari formulir
    $kode_ruangan = $_POST['kode_ruangan'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $ruangan_nama = $_POST['ruangan_nama'];
    $ruangan_lokasi = $_POST['ruangan_lokasi'];
    $ruangan_kapasitas = (int)$_POST['ruangan_kapasitas'];
    $ketersediaan = $_POST['bisa_dipinjam'];
    if ($ketersediaan === 'Iya'){
        $ketersediaan = 'true';
    } elseif ($ketersediaan === 'Tidak') {
        $ketersediaan = 'false';
    }

	// buat query
    $query = pg_query("INSERT INTO ruangan (kode_ruangan, ruangan_fakultas, ruangan_nama, ruangan_lokasi, ruangan_kapasitas, bisa_dipinjam) VALUES('$kode_ruangan', '$ruangan_fakultas', '$ruangan_nama', '$ruangan_lokasi', $ruangan_kapasitas, $ketersediaan)");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status5=penambahanRuanganBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: tambahruangan_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>