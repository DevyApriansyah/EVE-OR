<?php
	include "connect.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$fullname = $_POST['fullname'];

if($pass == $pass1) {
	$sql_buat = "INSERT INTO user(user_id, email, name, password, level, image, fullname) VALUE('','$email', '$name', '$password', 'company', 'profile.png', '$fullname')";

	if (mysqli_query($conn, $sql_buat)){
	$query = mysqli_query($conn, "SELECT * FROM user WHERE name ='$name' and password = '$password'");
	$data = mysqli_fetch_array($query);
	$_SESSION['company'] = $data['user_id'];
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='formulir1.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='registspo.php';</script>
<?php
	}}
else {
?>
	<script language="javascript">alert("Password Tidak Sama");</script>
	<script>document.location.href='registspo.php';</script>
<?php
}
	mysqli_close($conn);
?>
