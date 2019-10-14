
<?php
class gajioop
{
    public $hr;
    public function __construct($hr)
    {
    $this->hr=$hr;
    }
    public function gaji_kotor()
    {
        $gajik=$this->hr*75000;
        return "Gaji kotor =$gajik";
    }
     public function gaji_bersih()
    {
        $gajib=($this->hr*75000)-($this->hr*75000)*0.025;
        return "Gaji bersih =$gajib";
    }
}
if(isset($_POST['submit'])){
    $a=$_POST['hr'];
    $b=$_POST['nm'];
    $c=$_POST['nip'];
    $d=$_POST['alamat'];
    
    echo"<center> Total Gaji </center>";
    $hasil=new gajioop($a);
    echo "Nama :$b<br>";
     echo "NIP :$c<br>";
      echo "Alamat :$d<br>";
       echo $hasil->gaji_kotor()."<br>";
        echo $hasil->gaji_bersih()."<br>";
        
}

?>
