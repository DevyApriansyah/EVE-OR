<?php
	include "connect.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];

	$sql_buat = "INSERT INTO user(user_id, email, name, password, level) VALUE('','$email', '$name', '$password', 'company')";

	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='tampilan_awal_sponsor/index.html';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='regist.php';</script>
<?php
	}
	mysqli_close($conn);
?>