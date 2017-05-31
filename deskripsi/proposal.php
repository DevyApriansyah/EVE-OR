<?php
	include "../connect.php";
	//$image = $_POST['file'];
	$id = $_POST['user_id'];

	if($_POST['upload']) {
		$ekstensi_diperbolehkan	= array('docx','pdf');
		$proposal_size = $_FILES["file"]["size"];
		$proposal_loc = $_FILES["file"]["tmp_name"];
		$proposal_name = $_FILES["file"]["name"];
		$tipe_file = $_FILES["file"]["type"];
		//$name = $_FILES["NULL"]["name"];

		if($proposal_size < 10000000){
			move_uploaded_file($proposal_loc, "proposal/$proposal_name");
			//$hasil = mysqli_query($conn, "UPDATE user SET image = '$foto_name' WHERE user_id='$id'");

			$hasil = "INSERT INTO proposal(proposal_id, filename, for) VALUE('', '$proposal_name', 'untuk')";
			//mysqli_query($conn, $sql_ganti)

			if ($hasil) {
?>
				<script language="javascript">alert("Proposal Successfully Uploaded");</script>
				<script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
<?php
			}
		else{
?>
			<script language="javascript">alert("Proposal Failed Uploaded");</script>
<?php
		}}
	else {
?>
			<script language="javascript">alert("Photo Change Failed, Check Your Photo Size or Your Type File");</script>
			<script>document.location.href='edit.php';</script>
<?php
	}
	}
	mysqli_close($conn);
?>
