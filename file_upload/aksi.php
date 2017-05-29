<?php
	include "koneksi.php";
	if($_POST['upload']) {
		$ekstensi_diperbolehkan	= array('png','jpg');
		$foto_size = $_FILES["file"]["size"];
		$foto_loc = $_FILES["file"]["tmp_name"];
		$foto_name = $_FILES["file"]["name"];

		if($foto_size < 1000000){
			move_uploaded_file($foto_loc, "file/$foto_name");
			$hasil = mysqli_query($conn, "INSERT INTO upload VALUES(NULL, '$foto_name')");
	
			if ($hasil) {
?>
				<script language="javascript">alert("Photo Change Successful");</script>
				<script>document.location.href='../index.php';</script>
<?php
			}
		}
		else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='../index.php';</script>
<?php
		}
	}
?>
