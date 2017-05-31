<!DOCTYPE HTML>
<html>

<?php
	include 'connect.php';
	$keyword=$_GET['keyword'];
	
	if($keyword==NULL){
		?> <script>alert("Silakan masukan kata kunci");</script> <?php
		header("refresh:0; index.php");
	}
	
	else{
		$sql = "SELECT name FROM event WHERE name LIKE '%{$keyword}%'";
		$query = mysqli_query($con, $sql);
		if($query==NULL){
			echo "Tidak ditemukan untuk"; ?> <strong> <?php echo $keyword ?> </strong> <?php
		}
		else{
			while($hasil = mysqli_fetch_array($query)){
				echo $hasil['name']; ?> <br> <?php
			}
		}
	}
?>
</html>
