<?php
	include "../connect.php";

	$id = $_POST['user_id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$level = $_POST['level'];

	$sql_ganti = "UPDATE user SET email = '$email', name='$name', level='$level' WHERE user_id='$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='list.php';</script>
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
