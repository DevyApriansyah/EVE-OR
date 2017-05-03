<?php
	include "connect.php";

	$username = $_POST['name'];
	$password = md5($_POST['password']);
	$query = mysqli_query($conn, "SELECT * FROM committee WHERE name ='$username' and password = '$password'");
  	$result = mysqli_fetch_array($query);

	if ($result) {
		$_SESSION['id'] = $result['committee_id'];
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
