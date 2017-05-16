<!DOCTYPE html>
<?php
  include "connect.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input</title>
</head>
<body>
  <form name="create" action="inputproses.php" method="POST">
    Email : <input type="email" name="emailmhs"  required><br><br>
    Pass  : <input type="password" name="passmhs"  required><br><br>
    Nama  : <input type="text" name="namamhs"  required><br><br>
    NIM   : <input type="text" name="nimmhs"  required><br><br>
    Jenis Kelamin : <input type="text" name="jkmhs"  required><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
