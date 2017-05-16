<!DOCTYPE html>
<?php
  include "connect.php";
  $user = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$user'");
  $result = mysqli_fetch_array($query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input</title>
</head>
<body>
  <form name="create" action="editproses.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $result ['user_id'];?>">
    Email : <input type="email" name="email" value="<?php echo $result  ['email'];?>" required><br><br>
    Pass  : <input type="password" name="password" value="<?php echo $result ['password'];?>" required><br><br>
    Nama  : <input type="text" name="name" value="<?php echo $result ['name'];?>" required><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
