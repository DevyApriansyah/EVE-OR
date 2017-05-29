<?php
	include "../connect.php";

	$id = $_POST['user_id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$fullname = $_POST['fullname'];
	$telp = $_POST['telp'];
	$password = $_POST['password'];

	$newPasswordEnkrip = md5($password);

	$sql_ganti = "UPDATE user SET email = '$email', name='$name', fullname='$fullname', telp = '$telp', password = '$newPasswordEnkrip' WHERE user_id='$id'";

	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='../tampilan_acara_liat_profile/index.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
<?php
	}
	mysqli_close($conn);
?>
