<?php

//Ketentuan1
print_r("<br> Nama Lengkap <br>");
// print "<br>";
$namaDepan = "Faizal ";
$namaBelakang = "Abdillah";
echo $namaDepan . $namaBelakang . "<br>";
// var_dump($namaDepan + $namaBelakang); 

//Ketentuan2
print_r("<br>Tempat Tanggal Lahir<br>");
// print "<br>";
$kota = "Lumajang,";
$hari = " 29 ";
$bulan = "September";
$tahun = " 2001";
$TTL = $kota . $hari . $bulan . $tahun;
echo $TTL . "<br>";
// echo $kota . $hari . $bulan . $tahun . "<br>";



//Ketentuan3
print_r("<br>Alamat<br>");
$perumahan = "Perumahan Griyo Wonorejo Indah, blok G.15,";
$kelurahan = " Desa Wonorejo,";
$kecamatan = " Kec.Kedungjajang,";
$kabupaten = " Kab.Lumajang,";
$kodePos = " 67358.";
echo $perumahan . $kelurahan . $kecamatan . $kabupaten . $kodePos . "<br>";

//Ketentuan4
//tipedata Boolean status Menikah
print_r("<br> Status <br>");
$umur = 20;
if ($umur>24) {
echo "Sudah Menikah";
} else {
echo "Belum Menikah";
}

//Ketentuan5
//method operator aritmatika 
//Apakah tahun lahir merupakan tahun kabisat - tipedata boolean
$tahun = 2001;
$kabisat = $tahun % 4;
echo "<br>" . "<br>";
print_r("Apakah tahun lahir saya kabisat?");
echo "<br>";
if ($kabisat = 0){
    echo "true";
} else {
    echo "false";
}

?>
