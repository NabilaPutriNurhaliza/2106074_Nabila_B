<?php

/* Membuat koneksi dengan MySQL */
$koneksi = mysqli_connect('localhost', 'root', '', '2106074_nabila');

/* periksa koneksi, jika tidak terkoneksi maka akan tampilkan pesan gagal */
if (!$koneksi) {
    echo "<script>alert('koneksi database gagal')</script>";
}
