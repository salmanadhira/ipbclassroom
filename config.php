<?php
$db=pg_connect('host=localhost dbname=ipbclassroom user=postgres password=1234 port=5432');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>