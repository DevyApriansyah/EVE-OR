<?php
	include "connect.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];

if($pass == $pass1) {
	$sql_buat = "INSERT INTO user(user_id, email, name, password, level, image) VALUE('','$email', '$name', '$password', 'committee', 'profile.png')";

	if (mysqli_query($conn, $sql_buat)){
		$query = mysqli_query($conn, "SELECT * FROM user WHERE name ='$name' and password = '$password'");
	$data = mysqli_fetch_array($query);
	$_SESSION['committee'] = $data['user_id'];
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='tampilan_awal_acara/awal.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed, Username atau Email Telah Dipakai");</script>
		<script>document.location.href='regist.php';</script>
<?php
	}}

else{
?>
<script language="javascript">alert("Password Tidak Sama");</script>
<script>document.location.href='regist.php';</script>
<?php
}
mysqli_close($conn);
?>
