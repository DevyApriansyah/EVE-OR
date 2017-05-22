<!DOCTYPE html>
<?php
  include "../connect.php";
  if(isset($_SESSION['committee'])){
    $committee = $_SESSION['committee'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Homepage | EVE-OR</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>

	<body>
		<?php
    $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
    $data = mysqli_fetch_array($query);
    ?>
		<!-- container -->
			<!-- header -->
			<div class="header">
				<!-- logo -->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="baku" /></a>
				</div>
				<!-- logo -->

				<!-- cart-info -->
				<div class="container">
				<div class="cart-info">
					<ul>
						<li class="dropdown"><a href="../tampilan_acara_liat_profile/index.php"><?php echo $data['name']; ?></a>
							<div class="dropdown-content">
							<a href="../tampilan_acara_liat_profile/index.php">View Profile</a> <br>
							<a href="../logoutproses.php">Logout</a> <br>
							</div>
						</li>
						<li><a href="../tampilan_awal_acara/sponsor.php">Find Sponsor</a></li>
						<li><a href="#">Notifikasi</a></li>
						<li><a href="../tampilan_awal_acara/awal.php">Home</a></li>
					</ul>
				</div>

				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
				<!-- script-for-nav -->

				<!-- search-form -->
				<div class="search-form">
					<form>
						<input type="text" class="text" value="Keyword or product code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword or product code';}">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- /search-form -->

				<!-- /cart-info -->
				</div>
				<!-- header -->
			</div>
  <form name="create" action="inputproses.php" method="POST">
		<label>Nama Acara</label>
		<br>
		<input type="text" name="name" required >
		<br><br>

		<label>Jenis Acara</label>
		<br>
		<select name="category" required>
      <option value="" disable selected> --select-- </option>
			<option value="Pertandingan">Pertandingan</option>
			<option value = "Seminar">Seminar</option>
			<option value = "Pentas Seni">Pentas Seni</option>
			<option value = "Pameran"> Pameran</option>
      <option value = "Other"> Other</option>
		</select><br>
		<br>

		<label>Deskripsi Acara</label>
		<br>
		<input type="text" name="description" required>
		<br><br>

		<label>Penyelenggara</label>
		<br>
		<input type="text" name="org" required>
		<br><br>

		<label>Waktu Penyelenggaraan</label>
		<br>
		<input type="date" name="tgl1" required> s/d <input type="date" name="tgl2" required>
		<br><br>

		<label>Tempat</label>
		<br>
		<input type="text" name="place" required>
		<br><br>

		<label>Jumlah Biaya yang Diperlukan</label>
		<br>
		<input type="tel" name="cost" required>
		<br><br>

		<label>Poster Acara (240px x 150px)</label>
		<br>
		<input type="file">
		<br>


		<label>Narahubung</label>
		<br>
		<table border=0 align=left>
		<tr>
			<td>Nama</td>
			<td><input type="tel" name="contactname" placeholder="Farah Ghita" required></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td><input type="tel" name="contactnum" placeholder="Contoh : 0838xxxxxxx" required></td>
		</tr>
		</table>
		<br><br><br>

		<!--<label>Penanggungjawab</label>
		<br>
		<table border=0 align=left>
		<tr>
			<td>Nama</td>
			<td><input type="tel" placeholder="Farah Ghita"></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td><input type="tel" placeholder="Contoh : 087809882001"></td>
		</tr>
  </table>-->
		<br>
		<input type="submit" name="submit" value="Tambah Acara"></input>
</form>
		<br>
		<br><br><br><br><br><br>
		<!-- footer -->
		<div class="footer">
			<div class="footer-grids">
				<div class="container">
					<div class="col-md-3 footer-grid contact-grid">
						<h4>Contact us</h4>
							<ul>
							<li><span class="c-icon"> </span>Dramaga, Bogor, West Java</li>
							<li><span class="c-icon1"> </span><a href="#">eveor_id@gmail.com</a></li>
							</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="facebook"> </span>EVE-OR Indonesia</a>
						</li>
						<li></li>
						</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="twitter"> </span>@eveor_id</a>
						</li>
						<li></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<!-- container -->
	</body>
</html>
<?php }
else if (@$_SESSION['company']){
    ?>
    <script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
    <?php
  }else if (@$_SESSION['admin']){
      ?>
      <script>document.location.href='../admin/list.php';</script>
      <?php
    }else{?>
    <script language="javascript">alert("Anda belum login");</script>
    <script>document.location.href='../index.php';</script>
    <?php
  }
 ?>
