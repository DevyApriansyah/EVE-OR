<!DOCTYPE html>
<?php
  include "connect.php";
  if (@$_SESSION['committee']){
    ?>
    <script>document.location.href='tampilan_awal_acara/awal.php';</script>
    <?php
  } else if (@$_SESSION['company']){
      ?>
      <script>document.location.href='tampilan_awal_sponsor/awalspo.php';</script>
      <?php
    }else if (@$_SESSION['admin']){
        ?>
        <script>document.location.href='admin/list.php';</script>
        <?php
      }else{
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
            Make Your Own Event
          </div>
    </div>
<div class="header">
  <div class="form">
    <div class="forceColor"></div>
    <div class="topbar">
      <div class="spanColor"></div>
    <form name="create" action="inputproses.php" method="POST">
      <input type="text" class="input" name="name" placeholder="Username" maxlength="16" required/>
      <input type="email" class="input" name="email" placeholder="Email" required/>
      <input type="password" class="input" name="password" pattern=[a-9]{6,12} placeholder="Password   (min. 6 karakter)" required/>
      <input type="password" class="input" name="password1" pattern=[a-9]{6,12} placeholder="Re-type Password" required/>
    <button class="submit" id="submit" >Sign Up</button>
    </div>
  </div>

  </body>
</div>
  </html>

<?php
}
 ?>
