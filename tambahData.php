<?php

include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$tptlhr = $_POST['tptlhr'];
$tgllhr = $_POST['tgllhr'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];

$sql = "INSERT INTO mahasiswa (npm, nama, tptlhr, tgllhr, alamat, kelas, prodi, nohp) VALUES ('$npm','$nama','$tptlhr','$tgllhr','$alamat','$kelas','$prodi','$nohp')";

if (mysqli_query($conn, $sql)) {
    header("location:mahasiswa.php?pesan=addsuccess");
} else {
    header("location:mahasiswa.php?pesan=addfailed");
}
