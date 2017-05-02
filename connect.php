<?php
  $conn = mysqli_connect('localhost', 'root', '', 'eve-or') or die (mysqli_error());
  
  if(mysqli_connect_errno()){
	echo "Upss.. Failed connect";
	mysqli_connect_error();
  }
 ?>
