<!DOCTYPE html>
<?php
  @session_start();
  include "connect.php";
  ?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="halaman_login/css/style.css">


</head>

<body>
  <div id="templatemo_top_panel">
    	<div id="templatemo_header">
          Login Now!
        </div>
  </div>

//  <?php
//  $username = $_POST['username'];
//  $password = $_POST['password'];
//  $login = $_POST['login'];

//  if($login){
  //  if($username == "" || $password == ""){
    //  ?>
      <!--<script type="text/javascript"> window.alert ("Username dan password tidak boleh kosong")</script>-->
    <?php
  //  }
  //  else{
    //  $sql = $mysqli_query("SELECT * FROM login WHERE username = '$username' and password = md5('$password')") or die (mysqli_error());
    //  $data = $mysqli_fetch_array($sql);
    //  $check = mysqli_num_rows($check);
      //if($check >= 1){
        //if($data['level'] == "pan"){
          //@$_SESSION['pan'] = $data['id_login'];
          //header("location: index.php");
        //} else if ($data['level'] == "spo"){
        //  @$_SESSION['spo'] = $data['id_login'];
        //  header("location: index.php");
        //}
        //else{
        //  echo "Wrong username and password";
        //}
    //  }
    //}
  //}
  //?>


  <!--<div class="menu">
  <ul class="mainmenu clearfix">
    <li class="menuitem">Well</li>
    <li class="menuitem">how</li>
    <li class="menuitem">about</li>
    <li class="menuitem">that?</li>
  </ul>
</div>-->
<form class="col-md-7 col-md-offset-2 form-horizontal" name="signin" action="loginprocess.php" method="POST" enctype="multipart/form-data">
<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="text" class="input" name="nama" placeholder="Username"/>
    <input type="password" class="input" name="password" placeholder="Password"/>
  </div>
  <button class="submit" name="login" value="login">Login</button> <br>
  <button class="submit" name="login" value="login" fontcolor="white">Forgot Password</button>
</div>

  </body>
</html>

<?php
//} ?>
