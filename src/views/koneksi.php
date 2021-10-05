<?php
$config["server"]='localhost';
$config["username"]='root';
$config["password"]='';
$config["database_name"]='db_pencatatan';
    error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
    $koneksi = mysqli_connect("localhost", "root","","db_pencatatan");
    mysqli_select_db($koneksi,"db_pencatatan");
?>