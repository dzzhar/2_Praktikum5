<?php
include 'dbkoneksi.php';

$id = $_GET['iddel'];
$delete = mysqli_query ($conn, "DELETE FROM produk WHERE id = '$id'");

header ("refresh:1; list_produk.php");
?>