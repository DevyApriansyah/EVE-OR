<!DOCTYPE HTML> 
<html>

<?php
	include 'connect.php';
	$keyword=$_GET['keyword'];

	if(empty($keyword)){
		?> <script>alert("Silakan masukan kata kunci");</script> <?php
		header("refresh:0; ../tampilan_awal_acara/awal.php");
	}
	else{
		$sql = "SELECT name FROM user WHERE name LIKE '%{$keyword}%'";
		$query = mysqli_query($conn, $sql);
		$numrows = mysqli_num_rows($query);
		if($numrows==NULL){
			?> <script> alert("Tidak ada Bro"); </script> <?php
			header("refresh:0; tampilan_awal_acara/awal.php");
		}
		else{
			while($hasil = mysqli_fetch_array($query)){
				echo $hasil['name']; ?> <br> <?php
			}
		}
	}
?>
</html>
