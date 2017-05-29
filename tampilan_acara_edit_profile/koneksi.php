 <?php
  $conn = mysqli_connect("localhost", "root", "", "eveor") or die ("Gagal koneksi ke server".mysqli_error());
  if(!isset($_SESSION)){
      session_start();
    }
  if(!(isset($_SESSION['id']))) {
      $_SESSION['status'] = "nouser";
  	}
 ?>
