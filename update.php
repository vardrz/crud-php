<?php

include 'koneksi.php';

$npmold = $_POST['npmold'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$tptlhr = $_POST['tptlhr'];
$tgllhr = $_POST['tgllhr'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];

$sql = "UPDATE mahasiswa SET npm='$npm', nama='$nama', tptlhr='$tptlhr', tgllhr='$tgllhr', alamat='$alamat', kelas='$kelas', prodi='$prodi', nohp='$nohp' WHERE npm='$npmold'";

if (mysqli_query($conn, $sql)) {
    header("location:mahasiswa.php?pesan=updatesuccess");
} else {
    header("location:mahasiswa.php?pesan=updatefailed");
}
