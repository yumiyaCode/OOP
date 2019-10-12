<?php 

class Isekai 
{
    public $skill="one punch";
    public function __construct()
    {
        echo"ditabrak truk<br>";
    }
     public function __destruct()
    {
        echo"ngalahin raja iblis<br>";
    }
    
}
class Reverse extends Isekai
{
    public function __construct()
    {
        parent::__construct();
        echo"Masuk isekai<br>";
    }
     public function __destruct()
    {
        parent::__destruct();
        echo"Kembali ke dunia asal<br>";
    } 
     public function over_power()
    {
        echo"dapet skill op:<br>";
    }
}
$a= new Reverse();
$a->over_power();
echo $a->skill."<br>";
?>