<?php 

class Pakaian {
    public $bahanPakaian;
    public $warna;
    public $merk;
    public $harga;
    public $jumlahPakaian;
    public $diskon;

    public function __construct( $bahanPakaian = "bahan", $warna = "warna", $merk = "merk", $harga = 0, $jumlahPakaian = 0 ) {
        $this->bahan = $bahanPakaian;
        $this->warna = $warna;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->jumlahPakaian = $jumlahPakaian;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->bahan, $this->warna";
    }

    public function getInfoPakaian() {
        $str = "Bahan : {$this->bahan} <br> Warna : {$this->warna} <br> Merk : {$this->merk} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Jumlah Pakaian : {$this->jumlahPakaian}";
        return $str;
    }

}

$pakaian1 = new Pakaian("Katun", "Merah", "Zara", 200000, 100);
$pakaian1->setDiskon(11);
echo $pakaian1->getInfoPakaian();