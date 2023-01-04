<?php

include 'koneksi.php';

$npm = $_GET['npm'];

$sql = "DELETE FROM mahasiswa WHERE npm='$npm'";

if (mysqli_query($conn, $sql)) {
    header("location:mahasiswa.php");
} else {
    header("location:mahasiswa.php?pesan=deletefailed");
}
