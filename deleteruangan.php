<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST["deleteruangan"])){

    $kode_ruangan = $_POST['kode_ruangan'];
    var_dump($kode_ruangan);
	// buat query
    //$query3 = pg_query("DELETE FROM peminjaman WHERE kode_ruangan_peminjaman IN (SELECT kode_ruangan FROM ruangan WHERE kode_ruangan = $kode_ruangan)");
    //$query2 = pg_query("DELETE FROM tiket WHERE id_kereta = $id_kereta");
    $query = pg_query("DELETE FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status3=hapusRuanganBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
	    header('Location: daftarruangan_page.php?status4=hapusRuanganGagal');
	}


} else {
	die("Akses dilarang...");
}
?>