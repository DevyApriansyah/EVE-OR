<?php
  $con = mysqli_connect('localhost', 'root', '', 'notif') or die (mysqli_error());
  
  if(mysqli_connect_errno()){
	echo "Upss.. Failed connect";
	mysqli_connect_error();
  }
 ?>
