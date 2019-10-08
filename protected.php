<?php
 
// buat class laptop
class Laptop {
 
   
   protected $pemilik="kama";
 
  
   public function Akses_pemilik() {
     return $this->pemilik;
   }
   protected function Hidupkan_laptop(){
       return "hidupkan Laptop";
   }
   public function Hidupkan_paksa(){
       return $this->Hidupkan_laptop();
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
  
echo"".$laptop_anto->Akses_pemilik();
echo"<br>".$laptop_anto->Hidupkan_paksa();