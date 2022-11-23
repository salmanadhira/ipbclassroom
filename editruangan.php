<?php
include('config.php');
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['editruangan'])){

	// ambil data dari formulir
    $kode_ruangan = $_POST['kode_ruangan'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $ruangan_nama = $_POST['ruangan_nama'];
    $ruangan_lokasi = $_POST['ruangan_lokasi'];
    $ketersediaan = $_POST['bisa_dipinjam'];
    if ($ketersediaan === 'Iya'){
        $ketersediaan = 'true';
    } elseif ($ketersediaan === 'Tidak') {
        $ketersediaan = 'false';
    }

    var_dump($kode_ruangan);

	// buat query
    //$query = pg_query("UPDATE kereta SET nama = '$nama_kereta', beroperasi = $operasional, kapasitas = $kapasitas WHERE id = $id_kereta");

	// apakah query simpan berhasil?
	//if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		//header('Location: index.php?status=editKeretaBerhasil');
	//} else {
		// kalau gagal kembalikan ke halaman form
		//header('Location: tambahkereta_page.php');
	//}


} else {
	die("Akses dilarang...");
}
?>