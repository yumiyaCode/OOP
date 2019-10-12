<?php
class Komputer
{
    public $procesor="Intel core I-7";

     public function __construct()
    {
    echo"construct dari class komputer<br>";
    }
    public function __destruct()
    {
    echo"destruct dari class komputer<br>";
    }
}
class Laptop extends Komputer{
      public function __construct()
    {
    parent::__construct();
    echo"construct dari class laptop<br>";
    }
     public function __destruct()
    {
    echo"destruct dari class laptop<br>";
    parent::__destruct();
    }
     public function  spec()
    {
    echo"spec laptop ";
    }
}
$a= new Laptop();
$a->spec();
echo $a->procesor."<br>";
?>