<?php
  include "../connect.php";
  if (isset($_SESSION['committee'])){
    $committee = $_SESSION['committee'];
  }else if (isset($_SESSION['company'])){
    $committee = $_SESSION['company'];}
    $event = $_GET['id'];
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
		<!---webfonts--->
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

        <!-- search-form -->
				<div class="search-form">
					<form align="center" action="../searching func./list_company.php" method="get">
						<input type="text" name="keyword" value="Keyword or product code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword or product code';}">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- /search-form -->

				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
				<!-- script-for-nav -->

				<!-- /cart-info -->
				</div>
				<!-- header -->
			</div>

		<?php
		$query = mysqli_query($conn, "SELECT * FROM event WHERE event_id = '$event'");
		$data = mysqli_fetch_array($query);
		?>

		<!-- iteam-grids -->
		<div class="collections">
		<div class="iteam-grids">

		<form action="../deskripsi/editproses1.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="event_id" value="<?php echo $data ['event_id'];?>">
		<img src="../deskripsi/file/<?php echo $data['poster']?>" title="poster">

		<table border=0 align=left>

		<input type="file" name="file">
		<input type="submit" name="upload" value="Upload">
		</form>
	<br>

					<h2><label><?php echo $data['name']; ?></label></h2>
					<p>
<?php echo $data['description']?> <br>
Diselenggarakan Oleh: <?php echo $data['org']?><br>
<?php if ($data['tgl1'] == $data['tgl2']) {?>
Waktu Penyelenggaraan: <?php echo $data['tgl1'];?>
<?php } else { ?>
Waktu Penyelanggaraan: <?php echo $data['tgl1']?> s/d <?php echo $data['tgl2'];
}?>
            </p>


		</div>
				<!-- iteam-grids -->
		</div>


		<br>
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
