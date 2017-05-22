<!DOCTYPE html>
<?php
	include "../connect.php";
	if (isset($_SESSION['admin'])){
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
		<a href="../logoutproses.php">Logout</a> <br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Jenis Akun</th>
		<th colspan="2">Action</th>
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
<?php
}
else if (@$_SESSION['company']){
		?>
		<script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
		<?php
	}
	else if (@$_SESSION['committee']){
			?>
			<script>document.location.href='../tampilan_awal_acara/awal.php';</script>
			<?php
		}
	else{
			?>
			<script language="javascript">alert("Anda belum login");</script>
			<script>document.location.href='../index.php';</script>
			<?php
		}
?>
