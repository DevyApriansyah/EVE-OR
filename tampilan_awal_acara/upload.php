<?php
include "../connect.php";
$id = $_SESSION['committee'];
$folder = "proposal";
$upload = "../proposal";
$foto_size = $_FILES["photobaru"]["size"];
$foto_loc = $_FILES["photobaru"]["tmp_name"];
$foto_name = $_FILES["photobaru"]["name"];
$target_file = $folder.basename($foto_name);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($foto_size < 10000000 && $imageFileType == "pdf"){
  move_uploaded_file($foto_loc, "$upload/$foto_name");
$hasil = mysqli_query($conn, "INSERT INTO proposal(proposal_id, name, acara) VALUE ('', '$foto_name', '$id')");
$hasil2 = mysqli_query($conn, "UPDATE propoal SET name='$folder/$foto_name' WHERE acara ='$id'");
  if ( $hasil && $hasil2 == 0) {
?>
    <script language="javascript">alert("Upload File Successful");</script>
      <script>document.location.href='../tampilan_awal_acara/profilespo.php';</script>
<?php
  }
}
else{
?>
  <script language="javascript">alert("Upload File Failed");</script>
  <script>document.location.href='../tampilan_awal_acara/profilespo.php';</script>
<?php
}
?>
