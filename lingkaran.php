<?php
class Luas_lingkaran
{
 public $jari;
 public $pi=3.14;

  public function __construct($jari){
    $this->jari=$jari;
   }
   public function luas(){
       $luas=$this->jari * $this->pi;
       return $luas;
   }
    public function kel(){
       $keliling=2*($this->jari *$this->pi);
       return $keliling;
   }

}
$a= new Luas_lingkaran(10);
echo"Luas Lingkaran
<br>".$a->luas();
echo"<br>Kel Lingkaran
<br>".$a->kel();

?>

