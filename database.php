<?php
// config/database. php

$host = ' localhost ';
$user = 'root';
$pass = '';
$db = 'penjualan';

// inisialisasi koneksi dengan MySQL secara Obj ect oriented
$koneksi = new mysqli( $host, $user, $pass, $db);
?>