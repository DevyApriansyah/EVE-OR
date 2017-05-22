<?php
	include "../connect.php";

	$id = $_POST['user_id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$fullname = $_POST['fullname'];
	$telp = $_POST['telp'];
	$image = $_POST['image'];

	$sql_ganti = "UPDATE user SET email = '$email', name='$name', fullname='$fullname', telp = '$telp', image = '$image' WHERE user_id='$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='../tampilan_acara_liat_profile/index.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
<?php
	}
	mysqli_close($conn);
?>

<?php
include "../connect.php";
$fileName = $_FILES['picture']['name']; //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['picture']['tmp_name'], 'D:/Coba/htdocs/eve-or/upload_image/image/'.$fileName); //save image to the folder
if($move){
echo "<h3>Success! </h3>";
$q = "INSERT into db_image VALUES('','$fileName','image/$fileName')"; //insert image property to database
$result = mysql_query($q);

$q1 = "SELECT location from db_image where filename = '$fileName' limit 1 "; //get the image that have been uploaded
$result = mysql_query($q1);
while ($data = mysql_fetch_array($result)) {
$loc = $data['location']; ?>
<br/>
<h2> This is the Image : </h2>
<img src="<?php echo $loc; ?>" /> <!-- show the image using img src -->
<?php
}
} else{
echo "<h3>Failed! </h3>";
}
} else {
echo "Failed to Upload : ".$fileError;
}
?>

