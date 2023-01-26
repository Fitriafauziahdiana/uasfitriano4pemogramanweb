<?php
// deklarasi $meja yang memiliki beberapa array sebagai elemennya
$meja = array( array( 'gunting', 'pulpen'),
 array('handphone', 'earphone'),
 array('kue', 'minuman') 

);
// anggap setiap baris/array di $meja adalah sebuah laci
// kita akses laci ketiga, benda pertama
echo $meja[2][0];
echo "\n";
// kita akses laci kedua, benda kedua
echo $meja[1][1];
echo "\n";
// akses elemen di array yang anda buat

?>