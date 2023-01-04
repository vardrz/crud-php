<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'")->fetch_assoc();

if (isset($data)) {
    if (md5($password) == $data['password']) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        header("location:dashboard.php");
    } else {
        header("location:index.php?gagal=sandi");
    }
} else {
    header("location:index.php?gagal=user");
}
