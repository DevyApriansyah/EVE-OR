<?php
	include 'connect.php';

	if(isset($_POST["subject"])){
		$subject=mysqli_real_escape_string($con, $_POST["subject"]);
		$event=mysqli_real_escape_string($con, $_POST["event"]);
		$query="INSERT INTO tawaran(pengirim, acara) VALUES('$subject', '$event')";
		mysqli_query($con, $query);
	}
?>