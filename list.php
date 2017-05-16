<!DOCTYPE html>
<?php
	include "connect.php";
	$query = mysqli_query($conn, "SELECT * FROM committee");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTRASI BERHASIL</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<h1>Daftar Akun EVE-OR</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th colspan="2">Email</th>
	</tr>
<?php
	$count = 1;
	while($result = mysqli_fetch_array($query)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			<td>'.$result['name'].'</td>
			<td>'.$result['email'].'</td>
			</tr>';
	}
?>
	</table>
	</div>
</body>
</html>
