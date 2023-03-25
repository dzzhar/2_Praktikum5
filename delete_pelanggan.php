<?php
include 'dbkoneksi.php';

$id = $_GET['iddel'];
$delete = mysqli_query ($conn, "DELETE FROM pelanggan WHERE id = '$id'");

header ("refresh:1; list_pelanggan.php");
?>