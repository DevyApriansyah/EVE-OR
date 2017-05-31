<?php
  include "../connect.php";
  $user = $_GET['id'];

  $sql_hapus= "DELETE FROM user WHERE user_id= '$user'";
  $sql_hapus_acara= "DELETE FROM event WHERE  author= '$user'";

  if (mysqli_query($conn, $sql_hapus) && mysqli_query($conn, $sql_hapus_acara)){
?>
		<script language="javascript">alert("Delete Successful");</script>
		<script>document.location.href='list.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Delete Failed");</script>
		<script>document.location.href='list.php';</script>
<?php
	}
	mysqli_close($conn);
?>
