<?php

class Laptop {
 
   private $jenis="intel core i7-456 767ghz";

   public function Tamyupilkan_procesor() {
     return $this->jenis;
   }
}
class Pc extends Laptop{
     public function Tampilkan_procesor() {
     return $this->jenis;
   }
}
// buat objek dari class laptop (instansiasi)
$lp = new Laptop();
$cp = new Pc();

echo"".$lp->Tampilkan_procesor();
echo"<br>".$cp->Tampilkan_procesor();
