<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","northwind");

$db = new mysqli(HOST,USER,PASS,DB);
if ($db->connect_error) {
    //  akan dieksekusi ketika terjadi error
    http_response_code(500);
    die("Koneksi Gagal");
}

