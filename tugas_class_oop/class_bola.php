<?php
class Bola 
{
    // property
    public $jari;
  
    // constructor
    public function __construct($jari) {
      $this->jari = $jari;
    }
  
    // method hitung volume bola
    public function hitungVolume() {
      return 4/3 * pi() * pow($this->jari, 3);
    }
  
    // method hitung permukaan bola
    public function hitungPermukaan() {
      return 4 * pi() * pow($this->jari, 2);
    }
  }
  
  // membuat objek bola dengan jari-jari 5
  $bola = new Bola(5);
  
  // mengakses method hitungVolume() dan hitungPermukaan() pada objek bola
  echo "Volume bola dengan jari-jari 5 adalah " . $bola->hitungVolume() . "<br>";
  echo "Permukaan bola dengan jari-jari 5 adalah " . $bola->hitungPermukaan();
  