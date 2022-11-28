<?php 
function Arithmetic() {
    $x = 3;
    $y = 2;
    $tambah = $x + $y;
    $kurang = $x - $y;
    $bagi = $x / $y;
    $kali = $x * $y;  
    echo "Operator Arithmetic \n";  
    echo "Hasil dari Penjumlahan adalah : $tambah \n";
    echo "Hasil dari Pengurangan adalah : $kurang \n";
    echo "Hasil dari Pembagian adalah : $bagi \n";
    echo "Hasil dari Perkalian adalah : $kali \n";
}
Arithmetic();

function Assignment() {
    echo "Operator Assignment \n";
    $a = 20;
    $a += 50;
    echo "$a \n";
    $b = 30;
    $b -= 10;
    echo "$b";
}
Assignment();

?>