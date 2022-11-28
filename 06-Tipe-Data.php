<?php
$string = "Tipe Data String";
$int = 12;
$float = 10.500;
$boolean = true;
$array = array("Merah","Kuning","Hijau", "Biru");

//Object
class Mobil {
    public $warna;
    public $merk;
    public function __construct($warna, $merk) {
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function jenis() {
        return "Warna mobil: ". $this->warna. ",". " Merk Mobil : ".$this->merk;
    }
}

$mobilSaya = new Mobil("black", "Audi");
echo $mobilSaya -> jenis();
echo "\n";
$mobilSaya = new Mobil("red", "Toyota");
echo $mobilSaya -> jenis();
?>