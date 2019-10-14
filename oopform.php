<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form OOP</title>
</head>
<body>

<fieldset >
<legend>Aritmatika</legend>
<form action="" method="post">
<label for="">Bilangan 1:</label>
 <input type="number" name="bil1" min="1" required>
  <br>
   <label for="">Bilangan 2 :</label>
    <input type="number" name="bil2" min="1" required>
    <br>
     <input type="submit" name="submit" value="simpan">
</form>
</fieldset>
    
</body>
</html>

<?php
class Aritmatika
{
    public $bil1;
    public $bil2;
    public function __construct($bil1, $bil2)
    {
    $this->bil1=$bil1;
    $this->bil2=$bil2;
    }
    public function tambah()
        {
            $tambah=$this->bil1 + $this->bil2;
            return "Hasil Tambah :$tambah<br>";
        }
      public function kurang()
        {
            $kurang=$this->bil1 - $this->bil2;
            return "Hasil Kurang :$this->bil1 - $this->bil2=$kurang<br>";
        }
          public function kali()
        {
            $kali=$this->bil1 * $this->bil2;
            return "Hasil Kali :$kali<br>";
        }
          public function bagi()
        {
            $bagi=$this->bil1 / $this->bil2;
            return "Hasil Bagi :$bagi<br>";
        }
    
}
if(isset($_POST['submit'])){
    $a=$_POST['bil1'];
    $b=$_POST['bil2'];
    
    echo"<center> Hasil perhitungan </center>";
    $hasil=new Aritmatika($a,$b);
    echo $hasil->tambah();
       echo $hasil->kurang();
          echo $hasil->kali();
             echo $hasil->bagi();



}
?>