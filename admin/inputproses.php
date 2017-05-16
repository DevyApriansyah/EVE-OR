<?php
	include "connect.php"; //semua terhubung ke connect

	$email = $_POST['emailmhs'];
	$pass = $_POST['passmhs'];
	$name = $_POST['namamhs'];
	$nim = $_POST['nimmhs'];
	$jk = $_POST['jkmhs'];

	$sql_buat = "INSERT INTO mahasiswa(id_mahasiswa, email_mahasiswa, pass_mahasiswa, nama_mahasiswa, nim_mahasiswa, jenis_kelamin) VALUE('','$email','$pass','$name','$nim','$jk')";
	if (mysqli_query($conn, $sql_buat)){ //mysqli_query buat
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='input.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='input.php';</script>
<?php
	}
	mysqli_close($conn);
?>
