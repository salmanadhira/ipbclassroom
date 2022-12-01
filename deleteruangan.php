<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['deleteruangan'])){

    // Ambil data dari $_POST
    $kode_ruangan = $_POST['kode_ruangan'];

	// Delete semua data yang berhubungan dengan ruangan, dari yang paling kuat hingga paling lemah hingga kereta
    //$query = pg_query("DELETE FROM peminjaman WHERE kode_ruangan_peminjaman IN (SELECT  FROM tiket WHERE id_kereta = $id_kereta)");
    $query = pg_query("DELETE FROM peminjaman WHERE kode_ruangan_peminjaman = '$kode_ruangan'");
    $query2 = pg_query("DELETE FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");

	// apakah query berhasil?
	if( $query==TRUE && $query2==TRUE ) {
		// kalau berhasil alihkan ke halaman index_admin.php 
		header('Location: index_admin.php?status3=hapusRuanganBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: daftarruangan_page.php?status4=hapusRuanganGagal');
	}


} else {
	die("Akses dilarang...");
}
?>
