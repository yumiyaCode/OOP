<?php

class Rpl2
{
    public $nama;
    public $rarity;
    public $alamat;
    public $spesies;
    public $kelamin;
    public $keahlian;

public function sekolah()
{
    return "saya sekolah di smk Assalaam";
}
public function bkn()
{
    return "saya tidak sekolah di smk assalam";
}
public function islam()
{
    return "alhamdulillah saya islam";
}
public function Nonislam()
{
    return "Saya Non islam";
}
}
$murid1 = new Rpl2();
$murid1->nama="jangkung";
$murid1->rarity="S+";
$murid1->alamat="cirainbow";
$murid1->spesies="Manusia";
$murid1->kelamin="LK2";
$murid1->keahlian="bernafas";

$murid2 = new Rpl2();
$murid2->nama="caca";
$murid2->rarity="A+";
$murid2->alamat="majaLega";
$murid2->spesies="Manusia";
$murid2->kelamin="PR";
$murid2->keahlian="Makan";

$murid3 = new Rpl2();
$murid3->nama="Vein";
$murid3->rarity="SS+";
$murid3->alamat="Transvalnia";
$murid3->spesies="Half";
$murid3->kelamin="LK2";
$murid3->keahlian="minum";

echo"Murid Murid RPL2<br><br>";
echo"Nama saya ".$murid1->nama.
    " ,".$murid1->sekolah()."<br>".
    "Rarity saya ".$murid1->rarity."<br>".
    "Saya tinggal di ".$murid1->alamat."<br>".
    "Saya seorang ".$murid1->spesies."<br>".
    "Dan tentu saya ".$murid1->kelamin."<br>".
    "Keahlian saya ".$murid1->keahlian."<br>".
    "".$murid1->islam()."<br>";

    echo"<br><br>Nama saya ".$murid2->nama.
    " ,".$murid2->bkn()."<br>".
    "Rarity saya ".$murid2->rarity."<br>".
    "Saya tinggal di ".$murid2->alamat."<br>".
    "Saya seorang ".$murid2->spesies."<br>".
    "Dan tentu saya ".$murid2->kelamin."<br>".
    "Keahlian saya ".$murid2->keahlian."<br>".
    "".$murid1->islam()."<br>";

    echo"<br><br>Nama saya ".$murid3->nama.
    " ,".$murid3->sekolah()."<br>".
    "Rarity saya ".$murid3->rarity."<br>".
    "Saya tinggal di ".$murid3->alamat."<br>".
    "Saya seorang ".$murid3->spesies."<br>".
    "Dan tentu saya ".$murid3->kelamin."<br>".
    "Keahlian saya ".$murid3->keahlian."<br>".
    "".$murid1->Nonislam()."<br>";

