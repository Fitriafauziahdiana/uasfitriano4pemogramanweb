<?php

// $hari = array("Senin","Selasa","Rabu");
// $bulan = ["Januari","Februari","Maret"];

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// array asossiatif

$Mahasiswa = [
["nama"=> "Fitria Fauziah Diana",
"NPM" => "20552011119",
"email" => "fitriafdiana@gmail.com",
"Jurusan" => "Teknik Informatika",
"nilai" => [100,100,100]
],
["nama" => "Diana",
"NPM" => "2055201119",
"email" => "diana@gmail.com",
"Jurusan" => "Teknik Informatika",
"nilai" => [90,90,100]
]
];
echo $Mahasiswa[0]["nama"];
echo "<br>";
echo $Mahasiswa[0]["NPM"];
echo "<br>";
echo $Mahasiswa[1]["nilai"][1];
?>