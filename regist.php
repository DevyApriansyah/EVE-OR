<!DOCTYPE html>
<?php
  include "connect.php";

  if(@$_SESSION['pan'] || @$_SESSION['spo']){
    header('Location: index.php');
  }
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="halaman_signup/css/style.css">


</head>

<body>
  <div id="templatemo_top_panel">
    	<div id="templatemo_header">
          Join EVE-OR today
        </div>
  </div>

<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <form name="create" action="inputproses.php" method="POST">
      <input type="text" class="input" name="nama" placeholder="Username"/>
      <input type="email" class="input" name="email" placeholder="Email"/>
      <input type="password" class="input" name="password" placeholder="Password"/>
  </div>
  <button class="submit" id="submit" >Sign Up</button> <br>
  </form>
</div>

</body>
</html>