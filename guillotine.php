<?php

class Guillotine
{
    
    public $lebar_pisau;
    public $ukuran_alat;
    public $diameter_lubang;

    public function Jatuhkan ()
    {
        return "Pisau dijatuhkan!!";
    }

}
//inisialisasi object
 $sin = new Guillotine();
  $sin2 = new Guillotine();


  //set object
  $sin->lebar_pisau="42 inch";
  $sin->ukuran_alat="23 Meter";
  $sin->diameter_lubang="12 cm";

  $sin2->lebar_pisau="65 inch";
  $sin2->ukuran_alat="33 Meter";
  $sin2->diameter_lubang="12 cm";


  //output
  echo"Spesifikasi alat Guillotine";
  echo"<br><br>";

  echo"Lebar pisau :$sin->lebar_pisau<br>Ukuran alat :$sin->ukuran_alat
  <br>Diameter lubang :$sin->diameter_lubang<br><br>";
  echo"".$sin->jatuhkan();
  
  echo"<br><br>";
  echo"Lebar pisau :$sin2->lebar_pisau<br>Ukuran alat :$sin2->ukuran_alat
  <br>Diameter lubang :$sin2->diameter_lubang<br><br>";
  echo"".$sin2->jatuhkan();