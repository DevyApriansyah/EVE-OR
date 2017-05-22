<!DOCTYPE html>
<?php
	include "connect.php";
	$query = mysqli_query($conn, "SELECT * FROM user");
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
		<th>Jenis Akun</th>
	</tr>
<?php
	$count = 1;
	while($result = mysqli_fetch_array($query)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			<td>'.$result['name'].'</td>
			<td>'.$result['email'].'</td>
			<td>'.$result['level'].'</td>
			<td><a href="edit.php?id='.$result['user_id'].'"><button type="button" class="btn btn-primary">Edit</button></td>
			<td><a href="deleteproses.php?id='.$result['user_id'].'" button type="button" class="btn btn-danger">Delete</button></td>
			</tr>';
	}
?>
	</table>
	</div>
</body>
</html>
