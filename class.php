<?php
//class dengan nama kucing
class Kucing 
{
// membuat property
public $warna="Rainbow";
public$jml_kaki=9;
public $mkn_fav="steak salibury";

//membuat method dengan nama bersuara
public function bersuara()
  {
    return "miauuuu";
  }

}
//membuat object baru ditandai dengan keyword new
$kucing1= new Kucing();
// var_dump($kucing1);
// $kucing -> warna="orange";
echo"Warna Kucing ;$kucing1->warna<br>";
echo"Suara Kucing :".$kucing1->bersuara();
