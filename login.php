<?php
  @session_start();
  include "connect.php";
  ?>

  <!DOCTYPE html>
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

  <div class="form">
    <div class="forceColor"></div>
    <div class="topbar">
      <div class="spanColor"></div>
      <form class="col-md-7 col-md-offset-2 form-horizontal" name="signin" action="loginprocess.php" method="POST" enctype="multipart/form-data">
      <input type="text" class="input" name="name" placeholder="Username"/>
      <input type="password" class="input" name="password" placeholder="Password"/>
    </div>
    <button class="submit" id="submit" >Login</button> <br>
    <button class="submit" id="submit" fontcolor="white">Forgot Password</button>
  </div>

  </body>
  </html>
