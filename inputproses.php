<?php
	include "connect.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];

	$sql_buat = "INSERT INTO panitia(id_panitia, email, nama, password) VALUE('','$email', '$nama', '$password')";

	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='index.php';</script>
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
