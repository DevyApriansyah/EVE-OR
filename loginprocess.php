<?php
	include "connect.php";

	$username = $_POST['nama'];
	$password = md5($_POST['password']);
	$query = mysqli_query($conn, "SELECT * FROM panitia WHERE nama ='$username' and password = '$password'");
  	$result = mysqli_fetch_array($query);

	if ($result) {
		$_SESSION['id'] = $result['id_panitia'];
		$_SESSION['status'] = "User";
?>
		<script language="javascript">alert("Login Successful");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Login Failed");</script>
		<script>document.location.href='login.php';</script>
<?php
	}
	mysqli_close($conn);
?>
