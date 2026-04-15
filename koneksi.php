<?php 
$koneksi = mysqli_connect("103.56.207.66","bpjsfktl","bpjsfktl","sik");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
echo "";
}

// KONFIGURASI BPJS MOBILE JKN API
$URLAPIMOBILEJKN = "https://apijkn.bpjs-kesehatan.go.id/antreanrs"; // PRINGSEWU 103.56.207.66
$CONSIDAPIMOBILEJKN = "22194"; // Consumer ID dari BPJS
$SECRETKEYAPIMOBILEJKN = "1iEC682454"; // Secret Key dari BPJS
$USERKEYAPIMOBILEJKN = "da1cd3130763da5ea1da7882928d52d4"; // User Key dari BPJS

// KONFIGURASI BPJS VCLAIM API
$URLVCLAIM = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest"; // PRINGSEWU 103.56.207.66
$CONSIDVCLAIM = "22194"; // Consumer ID dari BPJS
$SECRETKEYVCLAIM = "1iEC682454"; // Secret Key dari BPJS
$USERKEYVCLAIM = "6258965fbc0eacad8e6de1164c6628a6"; // User Key dari BPJS

// $URLAPIMOBILEJKN = "https://apijkn.bpjs-kesehatan.go.id/antreanrs"; // LEC 103.144.213.212
// $CONSIDAPIMOBILEJKN = "17005"; // Consumer ID dari BPJS
// $SECRETKEYAPIMOBILEJKN = "2qW1F7184F"; // Secret Key dari BPJS
// $USERKEYAPIMOBILEJKN = "2caf24aa8b7445268854dbfcddc6ae1f"; // User Key dari BPJS

// KONFIGURASI MOBILE JKN AUTH
$URLAUTHMJKN = "https://localhost/auth"; // URL Auth Mobile JKN
$USERNAMEAUTHMJKN = "usermjkn"; // Username untuk Auth
$PASSWORDAUTHMJKN = "passwordmjkn"; // Password untuk Auth


?>