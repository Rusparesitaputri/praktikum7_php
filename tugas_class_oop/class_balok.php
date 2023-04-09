<?php

class Balok 
{
  // properti
  public $panjang;
  public $lebar;
  public $tinggi;

  // constructor
  public function __construct($p, $l, $t) {
    $this->panjang = $p;
    $this->lebar = $l;
    $this->tinggi = $t;
  }

  // method untuk menghitung volume
  public function hitungVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
  }

  // method untuk menghitung permukaan
  public function hitungPermukaan() {
    return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
  }
}

// membuat objek balok
$balok1 = new Balok(4, 5, 6);

// menghitung volume dan permukaan balok
$volume = $balok1->hitungVolume();
$permukaan = $balok1->hitungPermukaan();

// menampilkan hasil perhitungan
echo "Volume balok: " . $volume . "\n";
echo "Permukaan balok: " . $permukaan;
