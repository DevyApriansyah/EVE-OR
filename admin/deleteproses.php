<?php
  include "../connect.php";
  $user = $_GET['id'];

  $sql_hapus= "DELETE FROM user WHERE user_id= '$user'";

  if (mysqli_query($conn, $sql_hapus)){
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
