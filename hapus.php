<?php
include_once 'koneksi.php';
$nim = $_GET['nim'];

$sql = "DELETE FROM saripudin WHERE nim = '{$nim}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
