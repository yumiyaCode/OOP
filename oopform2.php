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
<form action="gaji.php" method="post">
<label for="">Nama:</label>
<br>
 <input type="text" name="nm" required>
  <br>
   <label for="">NIP:</label>
   <br>
    <input type="number" name="nip" required>
    <br>
    <label for="">Alamat</label>
    <br>
     <textarea name="alamat" required></textarea>
     <br>
     <label for="">Hari kerja:</label>
    <br>
    <input type="number" name="hr" min="7" required>
    <br>
     <input type="submit" name="submit" value="simpan">
</form>
</fieldset>
    
</body>
</html>
