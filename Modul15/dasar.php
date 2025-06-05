<?php
echo "Hello, Mr.Rafli";

//variabel
$nama = "Rafli Kurniawan";
$umur = 21;
echo "<br>"; //menambahkan baris baru
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";

//operator
echo "<br>";
$a = 10;
$b = 5;
echo $a + $b . " Ini penjumlahan"; // Penjumlahan 
echo "<br>";
echo $a - $b . " Ini pengurangan"; // Pengurangan
echo "<br>";
echo $a * $b . " Ini perkalian"; // Perkalian 
echo "<br>";
echo $a / $b . " Ini pembagian"; // Pembagian 
echo "<br>";
echo $a % $b . " Ini mod"; // Modulus 
echo "<br>";

//if-else
$nilai = 80;
if ($nilai >= 75) {
    echo "Lulus ";
} else {
    echo "Tidak Lulus";
}

//switch
$hari = "Senin";
 
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}

//Perulangan (FOR, WHILE, FOREACH)
//for
for ($i = 1; $i <= 5; $i++) {
    echo " <br> Angka ke-$i <br>";
}
//while
$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}
//FOREACH (Untuk Array)
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}
//Array
$hewan = ["Kucing", "Anjing", "Burung"]; echo $hewan[0]; // Output: Kucing
?>