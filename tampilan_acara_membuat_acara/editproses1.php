<?php
	include "../connect.php";
	//$image = $_POST['file'];
	//$id = $_POST['user_id'];
	
	if($_POST['submit']) {
		$ekstensi_diperbolehkan	= array('png','jpg');
		$foto_size = $_FILES["file"]["size"];
		$foto_loc = $_FILES["file"]["tmp_name"];
		$foto_name = $_FILES["file"]["name"];
		//$name = $_FILES["NULL"]["name"];
		
		if($foto_size < 1000000){
			move_uploaded_file($foto_loc, "file/$foto_name");
			//$hasil = mysqli_query($conn, "UPDATE user SET image = '$foto_name' WHERE user_id='$id'");
			
			$hasil = mysqli_query ($conn, "INSERT INTO event VALUE (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, poster = '$foto_name'");
			//mysqli_query($conn, $sql_ganti)
	
			if ($hasil) {
?>
				<script language="javascript">alert("Photo Change Successful");</script>
				<script>document.location.href='edit.php';</script>
<?php
			}
		}
		else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='edit.php';</script>
<?php
		}
	}
	mysqli_close($conn);
?>
