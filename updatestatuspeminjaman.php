<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST["updateStatusPeminjaman"])){

	// ambil data dari formulir
    $id = (int)$_POST['id'];
    $peminjaman = $_POST['disetujui'];
    if ($peminjaman === 'Iya'){
        $peminjaman = 'true';
    } elseif ($peminjaman === 'Tidak') {
        $peminjaman = 'false';
    }

	// buat query
    $query = pg_query("UPDATE peminjaman SET disetujui=$peminjaman WHERE id=$id");

	//apakah query simpan berhasil? 
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: daftarpeminjaman_page.php?statusupdate=updateStatusBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: updatestatuspeminjaman_page.php?statusupdate2-updateStatusGagal');
	}


} else {
	die("Akses dilarang...");
}
?>