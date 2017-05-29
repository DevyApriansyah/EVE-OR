<?php
	include "../connect.php";

	$id = $_POST['user_id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$fullname = $_POST['fullname'];
	$telp = $_POST['telp'];
	$image = $_POST['image'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$deskripsi = $_POST['deskripsi'];

	$newPasswordEnkrip = md5($password);

	$sql_ganti = "UPDATE user SET email = '$email', name='$name', fullname='$fullname', telp = '$telp', image = '$image', address = '$address', password = '$newPasswordEnkrip', deskripsi = '$deskripsi' WHERE user_id='$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='../tampilan_sponsor_liat_profile/index.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
<?php
	}
	mysqli_close($conn);
?>
