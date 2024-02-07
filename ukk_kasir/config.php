<?php
$koneksi = mysqli_connect("localhost", "root", "", "ukk_kasir");

if (!$koneksi) {
      echo "Koneksi gagal" . mysqli_connect_error();
}
