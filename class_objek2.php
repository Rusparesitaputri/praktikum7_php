<?php
class kendaraan
{
    public $nama, $warna, $merk;
    
    public function berjalan()
    {
        return "$this->nama bisa jalan";
    }

    public function tambahkecepatan()
    {
        return "$this->nama bisa nambah kecepatan";
    }

    public function getkendaraan()
    {
        echo "Nama : $this->nama <br>
              Warna : $this->warna <br>
              Merk : $this->merk";
    }
}
$objekKendaraan = new Kendaraan;
$objekKendaraan->nama = "Hijet 1000";
$objekKendaraan->warna = "Merah";
$objekKendaraan->merk = "Daihatsu";
echo $objekKendaraan->berjalan();
echo "<br>";
echo $objekKendaraan->tambahkecepatan();
echo "<br>";
echo $objekKendaraan->getkendaraan();