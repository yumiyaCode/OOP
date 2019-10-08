<?php

class Eksekusi
{
    public $nama_napi="bambang";
    protected $kejahatan_napi="Pembunuhan berantai";
    private $tgl_eksekusi="12 Agustus(hujuman mati)";
    
    //protected
    public function hak_eksekutor()
    {
        return $this->kejahatan_napi;
    }
    //private
      public function info_eksekutor()
    {
        return $this->tgl_eksekusi;
    }
}
class Media extends Eksekusi{
    //!private
     public function info_media()
    {
        return $this->tgl_eksekusi;
    }
}
$hukum= new Eksekusi();
$info= new Media();

echo"Nama Narapidana :$hukum->nama_napi";
echo"<br>";
echo"Kejahatan Narapidana:".$hukum->hak_eksekutor();
echo"<br><br>info khusus eksekutor<br>";
echo"tgl eksekusi:".$hukum->info_eksekutor();
echo"<br><br>info Khusus media<br>";
echo"tgl eksekusi:".$info->info_media();