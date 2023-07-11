<?php 

// tipe data integer
$umur = 20;
var_dump($umur);

// tipe data float
$phi = 3.14;
var_dump($phi);

// tipe data string
$name = "Bayu";
var_dump($name);
echo "<br>";
echo "Hallo salam kenal" . " " . $name;

echo "<br>";

// tipe data boolean
$student = true;
var_dump($student);

echo "<br>";

// tipe data array indexxing
$siswa = ["Bayu", 20, true];

echo "Halo nama saya $siswa[0], umur saya adalah $siswa[1] tahun";
echo "<br>";

// array asosiatif
$mahasiswa = ["nama" => "Bayu Setiawan", "umur" => 17, "ipk" => 4.0];

echo "Hallo saya $mahasiswa[nama]". " " . "saya seorang mahasiswa dengan ipk $mahasiswa[ipk]";

?>