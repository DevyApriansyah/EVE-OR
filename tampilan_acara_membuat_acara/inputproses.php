<?php
	include "../connect.php";

	$name = $_POST['name'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	$org = $_POST['org'];
	$tgl1 = $_POST['tgl1'];
	$tgl2 = $_POST['tgl2'];
	$place = $_POST['place'];
	$cost = $_POST['cost'];
	$contactname = $_POST['contactname'];
	$contactnum = $_POST['contactnum'];
	$committee = $_SESSION['committee'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
	$data = mysqli_fetch_array($query);
	$author = $data['user_id'];

	$sql_buat = "INSERT INTO event(event_id, name, category, description, org, tgl1, tgl2, place, cost, contactname, contactnum, author, poster) VALUE('','$name', '$category', '$description', '$org', '$tgl1', '$tgl2', '$place', '$cost', '$contactname', '$contactnum', '$author', '../images/default.png')";
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='../tampilan_awal_acara/awal.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	mysqli_close($conn);
?>
