<?php

class Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Mashashi Kismitho", "Shonen Jump", 3000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 5000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";
echo "<br>";

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
